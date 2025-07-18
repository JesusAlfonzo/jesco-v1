<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoExamene
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $area_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Area $area
 * @property Examene[] $examenes
 * @property TipoExamenPrecio[] $tipoExamenPrecios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoExamene extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'codigo', 'area_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function area()
    {
        return $this->belongsTo(\App\Models\Area::class, 'area_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenes()
    {
        return $this->hasMany(\App\Models\Examene::class, 'id', 'tipo_examen_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoExamenPrecios()
    {
        return $this->hasMany(\App\Models\TipoExamenPrecio::class, 'id', 'tipo_examen_id');
    }
    
}
