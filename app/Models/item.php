<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'bahan', 'kondisi', 'jumlah', 'supplier'];
    protected $table = 'item';
    public $timestamps = false;
}
