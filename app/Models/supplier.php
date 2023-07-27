<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $fillable = ['nama_supplier', 'alamat', 'telepon'];
    protected $table = 'supplier';
    public $timestamps = false;
}
