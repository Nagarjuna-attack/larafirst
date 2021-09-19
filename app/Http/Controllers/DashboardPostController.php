<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' => Post::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create',[
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->file('image')->store('img_post');

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug'  => 'required|unique:posts',
            'kategori_id' => 'required',
            'body' => 'required'
        ]);

        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body),25,'...');

        Post::create($validateData);
        return redirect('/dashboard/posts')->with('succes','<div class="alert text-center alert-success" role="alert">Post Berhasil Ditambahkan..!</div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'baca' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit',[
            'postedit' => $post,
            'kategoris' => Kategori::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if($request->title==$post->title && $request->slug==$post->slug && $request->kategori_id==$post->kategori_id && $request->slug==$post->slug){

            return redirect('/dashboard/posts')->with('update','<div class="alert text-center alert-primary" role="alert">Tidak Ada Perubahan Pada Data</div>');
        }


        $aturan = [
            'title' => 'required|max:255',
            'kategori_id' => 'required',
            'body' => 'required',
        ];

        if($request->slug!=$post->slug)
        {
            $aturan['slug'] = 'required|unique:posts';
        }

        $validateData = $request->validate($aturan);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['excerpt'] = Str::limit(strip_tags($request->body),25,'...');

        Post::where('id',$post->id)->update($validateData);

        return redirect('/dashboard/posts')->with('update','<div class="alert text-center alert-success" role="alert">Post Berhasil di Update</div>');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('delete','<div class="alert text-center alert-success" role="alert">Post Berhasil Di Hapus..!</div>');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
