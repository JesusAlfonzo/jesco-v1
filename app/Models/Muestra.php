<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Muestra
 *
 * @property $id
 * @property $paciente_id
 * @property $codigo_muestra
 * @property $fecha_toma
 * @property $tipo_muestra
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Paciente $paciente
 * @property Examene[] $examenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Muestra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['paciente_id', 'codigo_muestra', 'fecha_toma', 'tipo_muestra', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paciente()
    {
        return $this->belongsTo(\App\Models\Paciente::class, 'paciente_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenes()
    {
        return $this->hasMany(\App\Models\Examene::class, 'id', 'muestra_id');
    }
    
}
