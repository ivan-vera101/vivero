<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idmuestra
 * @property int $idseccion
 * @property float $humedad
 * @property float $temperatura
 * @property string $created_at
 * @property string $updated_at
 * @property Seccione $seccione
 */
class Muestras extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idmuestra';

    /**
     * @var array
     */
    protected $fillable = ['idseccion', 'humedad', 'temperatura', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seccione()
    {
        return $this->belongsTo('App\Seccione', 'idseccion', 'idseccion');
    }
}
