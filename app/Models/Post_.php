<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog = [

        [
          'judul' => 'Post pertamaku',
          'url' => 'post-pertama',
          'deskripsi' => 'Ini Adalah Post Pertama',
          'isi' => 'sdfasdf asdfa dfasdf asdfasd fasdf asdf asdf asdf asdf asdf asdf asd fsdf asdfasd fasd fasd fasdf sd asdf adf asdf ' 
        ],
        [
          'judul' => 'Post Kedua',
          'url' => 'post-kedua',
          'deskripsi' => 'Ini Adalah Post Kedua',
          'isi' => 'sdfasdf asdfa dfasdf asdfasd fasdf asdf asdf asdf asdf asdf asdf asd fsdf asdfasd fasd fasd fasdf sd asdf adf asdf '
        ]
    ];


    public static function all()
    {
        return collect(self::$blog);
    }


    public static function find($url)
    {
        return static::all()->firstWhere('url',$url);
    }
}
