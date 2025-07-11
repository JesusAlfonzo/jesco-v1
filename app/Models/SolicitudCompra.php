<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SolicitudCompra
 *
 * @property $id
 * @property $departamento_id
 * @property $usuario_id
 * @property $fecha_solicitud
 * @property $estado
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Departamento $departamento
 * @property User $user
 * @property Cotizacione[] $cotizaciones
 * @property DetalleSolicitudCompra[] $detalleSolicitudCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SolicitudCompra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['departamento_id', 'usuario_id', 'fecha_solicitud', 'estado', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departamento()
    {
        return $this->belongsTo(\App\Models\Departamento::class, 'departamento_id', 'id');
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
    public function cotizaciones()
    {
        return $this->hasMany(\App\Models\Cotizacione::class, 'id', 'solicitud_compra_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleSolicitudCompras()
    {
        return $this->hasMany(\App\Models\DetalleSolicitudCompra::class, 'id', 'solicitud_compra_id');
    }
    
}
