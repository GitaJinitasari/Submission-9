<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
        use HasFactory;

        protected $table = 'dosens'; // Gantilah 'nama_tabel_mata_kuliah' dengan nama tabel yang benar

        protected $fillable = ['nip', 'nama', 'MataKuliah'];

}
