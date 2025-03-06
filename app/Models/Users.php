<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;


class Users extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['full_name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];
}
