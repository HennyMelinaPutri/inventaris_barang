<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item_in extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang_in', 'supplier'];
    protected $table = 'item_in';
}
