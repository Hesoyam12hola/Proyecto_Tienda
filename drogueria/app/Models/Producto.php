<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $cantidad
 * @property $precio
 * @property $descripcion
 * @property $tipoproducto_id
 *
 * @property Tipoproducto $tipoproducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    public $timestamps = false;

    protected $table = 'producto'; 

    protected $perPage = 20;

    protected $fillable = [
        'nombre',
        'cantidad',
        'precio',
        'descripcion',
        'tipoproducto_id'
    ];

    public function tipoproducto()
    {
        return $this->belongsTo(\App\Models\Tipoproducto::class, 'tipoproducto_id', 'id');
    }
}
