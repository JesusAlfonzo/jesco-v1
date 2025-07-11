<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrdenCompra
 *
 * @property $id
 * @property $cotizacion_id
 * @property $proveedor_id
 * @property $codigo
 * @property $fecha
 * @property $subtotal
 * @property $impuestos
 * @property $total
 * @property $moneda_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cotizacione $cotizacione
 * @property Moneda $moneda
 * @property Proveedore $proveedore
 * @property Conciliacione[] $conciliaciones
 * @property DetalleOrdenCompra[] $detalleOrdenCompras
 * @property ImpuestoCompra[] $impuestoCompras
 * @property PagoCompra[] $pagoCompras
 * @property RecepcionPedido[] $recepcionPedidos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class OrdenCompra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['cotizacion_id', 'proveedor_id', 'codigo', 'fecha', 'subtotal', 'impuestos', 'total', 'moneda_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cotizacione()
    {
        return $this->belongsTo(\App\Models\Cotizacione::class, 'cotizacion_id', 'id');
    }
    
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
    public function proveedore()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'proveedor_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conciliaciones()
    {
        return $this->hasMany(\App\Models\Conciliacione::class, 'id', 'orden_compra_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function detalleOrdenCompras()
    {
        return $this->hasMany(\App\Models\DetalleOrdenCompra::class, 'id', 'orden_compra_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impuestoCompras()
    {
        return $this->hasMany(\App\Models\ImpuestoCompra::class, 'id', 'orden_compra_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagoCompras()
    {
        return $this->hasMany(\App\Models\PagoCompra::class, 'id', 'orden_compra_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function recepcionPedidos()
    {
        return $this->hasMany(\App\Models\RecepcionPedido::class, 'id', 'orden_compra_id');
    }
    
}
