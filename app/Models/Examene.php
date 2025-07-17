<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Examene
 *
 * @property $id
 * @property $muestra_id
 * @property $tipo_examen_id
 * @property $usuario_id
 * @property $estado_examen_id
 * @property $fecha_solicitud
 * @property $fecha_procesamiento
 * @property $resultado
 * @property $created_at
 * @property $updated_at
 *
 * @property EstadoExamene $estadoExamene
 * @property Muestra $muestra
 * @property TipoExamene $tipoExamene
 * @property User $user
 * @property ExamenProducto[] $examenProductos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Examene extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['muestra_id', 'tipo_examen_id', 'usuario_id', 'estado_examen_id', 'fecha_solicitud', 'fecha_procesamiento', 'resultado'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estadoExamene()
    {
        return $this->belongsTo(\App\Models\EstadoExamene::class, 'estado_examen_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function muestra()
    {
        return $this->belongsTo(\App\Models\Muestra::class, 'muestra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoExamene()
    {
        return $this->belongsTo(\App\Models\TipoExamene::class, 'tipo_examen_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'usuario_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenProductos()
    {
        return $this->hasMany(\App\Models\ExamenProducto::class, 'id', 'examen_id');
    }
    
}
