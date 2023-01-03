<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Template extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'NamaTemplate', 'Jenis', 'NamaTema', 'Harga', 'LinkPreview', 'JumlahKlik', 'BanyakPembelian',
        'LinkPreview2', 'LinkPreview3', 'LinkPreview4', 'LinkPreview5'
    ];

}