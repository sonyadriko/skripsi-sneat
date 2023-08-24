<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


     protected $primaryKey = 'usrid';
     protected $table = "users";
     protected $fillable = ["name","email","npm","password","usrrole"];
     protected $guarded = ['usrid','created_at','updated_at'];
 


}
