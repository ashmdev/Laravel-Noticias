<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $table = 'assessments';
    protected $primaryKey = 'id';
    protected $fillable = ['post_id','value'];

    public function users(){
        return $this->belongsToMany(User::class);
    }
    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
