<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $table = "sliders";
    protected $fillable = ['imagen', 'titulo', 'mensaje', 'enlace', 'estado', 'eventos_id'];
    protected $guarded = ['id'];
    public $timestamps = false;

    public function evento()
    {
        return $this->belongsTo(Slider::class);
    }
}
