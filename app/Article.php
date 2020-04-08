<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // protected $guarded = [];
    protected $fillable = ['title', 'excerpt', 'body'];

    public function path()
    {
        return route('articles.show', $this);
    }

    // Renamed collection to match the real intent of business logic.
    // author() in this instance although constructed as a function
    // is used as a collection property for this model.
    public function author()
    {
        // added second parameter which is the FK for User table
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
