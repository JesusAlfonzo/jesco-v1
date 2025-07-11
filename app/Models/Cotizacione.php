<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cotizacione
 *
 * @property $id
 * @property $solicitud_compra_id
 * @property $proveedor_id
 * @property $fecha
 * @property $total
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @property Proveedore $proveedore
 * @property SolicitudCompra $solicitudCompra
 * @property DetalleCotizacione[] $detalleCotizaciones
 * @property OrdenCompra[] $ordenCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cotizacione extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['solicitud_compra_id', 'proveedor_id', 'fecha', 'total', 'observaciones'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'proveedor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function solicitudCompra()
    {
        return $this->belongsTo(\App\Models\SolicitudCompra::class, 'solicitud_compra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleCotizaciones()
    {
        return $this->hasMany(\App\Models\DetalleCotizacione::class, 'id', 'cotizacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenCompras()
    {
        return $this->hasMany(\App\Models\OrdenCompra::class, 'id', 'cotizacion_id');
    }
    
}
