<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $table = "links";
    protected $fillable = ['nombre', 'baner', 'cabecera', 'contenido', 'estado', 'link'];
    protected $guarded = ['id'];
    public $timestamps = false;
}
