<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class TechnicalReport extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'id',
        'name',
        'img1',
        'img2',
        'img3',
    ];

}