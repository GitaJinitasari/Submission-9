<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas'; // Gantilah 'nama_tabel_mata_kuliah' dengan nama tabel yang benar

    protected $fillable = ['nim', 'nama', 'jurusan'];

}
