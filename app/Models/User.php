<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,AuthenticableTrait;


     protected $primaryKey = 'id';
     protected $table = "user";
     protected $fillable = ["name","npm","password","role_id"];
     protected $guarded = ['id','created_at','updated_at'];
 


}
