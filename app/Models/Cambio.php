<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cambio extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['tc_compra', 'tc_venta'];
}