<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assessment_User extends Model
{
    protected $table = 'assessment_user';
    protected $primaryKey = 'id';
    protected $fillable = ['id','user_id','assessment_id'];
}
