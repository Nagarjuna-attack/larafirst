<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['title','slug','excerpt','body'];
    protected $guarded = ['id'];
    protected $with = ['user','kategori'];

    public function scopeFilter($posts,array $filters)
    {
        $posts->when(isset($filters['search']) ? $filters['search'] : false, function($posts,$search){          
            return $posts->where('title','like','%'.$search.'%')
                  ->orWhere('excerpt','like','%'.$search.'%');    
        });

        $posts->when(isset($filters['kategori']) ? $filters['kategori'] : false, function($posts,$kategori){          
            return $posts->whereHas('kategori',function($posts) use ($kategori){
                $posts->where('slug',$kategori);
            });    
        });


    }


    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

