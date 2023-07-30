<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_in extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang_in', 'supplier', 'tanggal_masuk'];
    protected $table = 'item_in';
    public $timestamps = false;
}
