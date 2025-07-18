<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoExamenPrecio
 *
 * @property $id
 * @property $tipo_examen_id
 * @property $moneda_id
 * @property $precio
 * @property $fecha_vigencia
 * @property $created_at
 * @property $updated_at
 *
 * @property Moneda $moneda
 * @property TipoExamene $tipoExamene
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoExamenPrecio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['tipo_examen_id', 'moneda_id', 'precio', 'fecha_vigencia'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moneda()
    {
        return $this->belongsTo(\App\Models\Moneda::class, 'moneda_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoExamene()
    {
        return $this->belongsTo(\App\Models\TipoExamene::class, 'tipo_examen_id', 'id');
    }
    
}
