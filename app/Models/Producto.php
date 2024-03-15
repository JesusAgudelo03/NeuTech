<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $nombre
 * @property $descripcion
 * @property $precio
 * @property $cantidad_stock
 * @property $modelo
 * @property $especificaciones_tecnicas
 * @property $imagen
 * @property $marca_id
 * @property $categoria_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Categorium $categorium
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'nombre' => 'required|string',
		'descripcion' => 'required|string',
		'precio' => 'required',
		'cantidad_stock' => 'required',
		'modelo' => 'required|string',
		'especificaciones_tecnicas' => 'required|string',
		'imagen' => 'required|string',
		'marca_id' => 'required',
		'categoria_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','descripcion','precio','cantidad_stock','modelo','especificaciones_tecnicas','imagen','marca_id','categoria_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categorium()
    {
        return $this->belongsTo(\App\Models\Categorium::class, 'categoria_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function marca()
    {
        return $this->belongsTo(\App\Models\Marca::class, 'marca_id', 'id');
    }
    

}
