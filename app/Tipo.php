<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idtipo
 * @property string $nombre
 * @property string $created_at
 * @property string $updated_at
 * @property Publicacion[] $publicacions
 */
class Tipo extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tipo';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idtipo';

    /**
     * @var array
     */
    protected $fillable = ['nombre', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function publicacions()
    {
        return $this->hasMany('App\Publicacion', 'idtipo', 'idtipo');
    }
}
