<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ImpuestoCompra
 *
 * @property $id
 * @property $orden_compra_id
 * @property $tipo_impuesto_id
 * @property $monto
 * @property $created_at
 * @property $updated_at
 *
 * @property OrdenCompra $ordenCompra
 * @property TipoImpuesto $tipoImpuesto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ImpuestoCompra extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['orden_compra_id', 'tipo_impuesto_id', 'monto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ordenCompra()
    {
        return $this->belongsTo(\App\Models\OrdenCompra::class, 'orden_compra_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipoImpuesto()
    {
        return $this->belongsTo(\App\Models\TipoImpuesto::class, 'tipo_impuesto_id', 'id');
    }
    
}
