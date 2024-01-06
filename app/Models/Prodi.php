<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis'; // Gantilah 'nama_tabel_mata_kuliah' dengan nama tabel yang benar

    protected $fillable = ['kode', 'nama'];
}
