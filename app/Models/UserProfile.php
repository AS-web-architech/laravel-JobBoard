<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_photo',
        'phone',
        'address',
        'bio',
        'experience',
        'education',
        'skills',

    ];
    public function user(){
        return $this->belongsTo(User::class , 'user_id','id');
    }
}
