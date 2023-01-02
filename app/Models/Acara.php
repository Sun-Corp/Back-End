<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Acara extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'AccountID', 'NamaTemplate', 'NamaTema', 'KodeAcara', 'Tanggal', 'Lokasi',
        'CalonL', 'CalonP', 'AyahL', 'AyahP', 'IbuL', 'IbuP'
    ];

}