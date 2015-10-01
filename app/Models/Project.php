<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $fillable = ['url','user_id'];

    public function user(){
    	return $this->belongsTo('App\Models\User');
    }
}
