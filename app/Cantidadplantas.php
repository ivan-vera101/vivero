<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcantidadplantas
 * @property int $idplantas
 * @property int $cantidad
 * @property string $movimiento
 * @property Planta $planta
 */
class Cantidadplantas extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idcantidadplantas';

    /**
     * @var array
     */
    protected $fillable = ['idplantas', 'cantidad', 'movimiento'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function planta()
    {
        return $this->belongsTo('App\Planta', 'idplantas', 'idplantas');
    }
}
