<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedore
 *
 * @property $id
 * @property $nombre_empresa
 * @property $rif
 * @property $direccion
 * @property $pais
 * @property $created_at
 * @property $updated_at
 *
 * @property ContactoProveedore[] $contactoProveedores
 * @property Cotizacione[] $cotizaciones
 * @property OrdenCompra[] $ordenCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedore extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_empresa', 'rif', 'direccion', 'pais'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactoProveedores()
    {
        return $this->hasMany(\App\Models\ContactoProveedore::class, 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cotizaciones()
    {
        return $this->hasMany(\App\Models\Cotizacione::class, 'id', 'proveedor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenCompras()
    {
        return $this->hasMany(\App\Models\OrdenCompra::class, 'id', 'proveedor_id');
    }
    
}
