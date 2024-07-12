<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;
    protected $fillable=['file_path'];
    //getting users 
    public function applications(){
        return $this->hasMany(Application::class,'resume_id','id');
    }
    public function user(){
        return $this->belongsTo(Application::class,'user_id','id');
    }
}
