<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'id';
    protected $fillable = ['user_id','category_id','name','slug','excerpt','body','status','image']; //salvar datos de forma masiva

    //Relaciones a nivel interno para datos falsos
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
    public function assessments(){
        return $this->hasMany(Assessment::class);
    }


}
