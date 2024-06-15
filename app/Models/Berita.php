<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kategori',
        'judul',
        'photo',
        'isi'
    ];

    public function kategori(){
        return $this->belongsTo(KategoriBerita::class, 'id_kategori');
    }
}
