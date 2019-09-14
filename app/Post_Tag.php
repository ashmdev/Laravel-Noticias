<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post_Tag extends Model
{
    protected $table = 'post_tag';
    protected $primaryKey = 'id';
    protected $fillable = ['id','post_id','tag_id'];
}
