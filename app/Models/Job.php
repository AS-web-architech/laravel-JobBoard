<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model
{
  use HasFactory;
  protected $table = 'job_listing';
  protected $fillable = [
    'job_title',
    'job_Location',
    'salary',
    'job_description',
    'job_type'
  ];
    //job seekers relation
      public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    
    //job-application relation 
      public function applications(){
        return $this->hasMany(Application::class,'job_id','id');
    }
}
