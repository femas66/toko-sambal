<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sambal extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'nama-sambal', 'level-sambal', 'stok', 'harga'];
}
