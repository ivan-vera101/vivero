<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idseccion
 * @property string $nombre
 * @property int $numplantas
 * @property int $cantidad
 * @property float $tempmax
 * @property float $tempideal
 * @property float $tempmin
 * @property string $inicioriego
 * @property string $finalriego
 * @property Muestra[] $muestras
 * @property Planta[] $plantas
 */
class Secciones extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idseccion';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'numplantas', 'cantidad', 'tempmax', 'tempideal', 'tempmin', 'inicioriego', 'finalriego'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function muestras()
    {
        return $this->hasMany('App\Muestra', 'idseccion', 'idseccion');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function plantas()
    {
        return $this->hasMany('App\Planta', 'idseccion', 'idseccion');
    }
}
