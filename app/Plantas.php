<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idplantas
 * @property int $idseccion
 * @property string $nombre
 * @property string $fruto
 * @property string $descripcion
 * @property string $created_at
 * @property string $updated_at
 * @property Seccione $seccione
 * @property Cantidadplanta[] $cantidadplantas
 */
class Plantas extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idplantas';

    /**
     * @var array
     */
    protected $fillable = ['idseccion', 'nombre', 'fruto', 'descripcion', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seccione()
    {
        return $this->belongsTo('App\Seccione', 'idseccion', 'idseccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cantidadplantas()
    {
        return $this->hasMany('App\Cantidadplanta', 'idplantas', 'idplantas');
    }
}
