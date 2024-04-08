<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul_foto',
        'deskripsi_foto',
        'tanggal_unggah',
        'lokasi_file',
    ];
}