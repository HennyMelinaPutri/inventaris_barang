<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_out extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang_out', 'supplier'];
    protected $table = 'item_out';
}
