<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliahs'; // Gantilah 'nama_tabel_mata_kuliah' dengan nama tabel yang benar

    protected $fillable = ['kode', 'nama', 'sks'];
}
