<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Moneda
 *
 * @property $id
 * @property $nombre
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Lote[] $lotes
 * @property OrdenCompra[] $ordenCompras
 * @property PagoCompra[] $pagoCompras
 * @property PagoPaciente[] $pagoPacientes
 * @property TasaCambio[] $tasaCambios
 * @property TipoExamenPrecio[] $tipoExamenPrecios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Moneda extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lotes()
    {
        return $this->hasMany(\App\Models\Lote::class, 'id', 'moneda_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ordenCompras()
    {
        return $this->hasMany(\App\Models\OrdenCompra::class, 'id', 'moneda_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagoCompras()
    {
        return $this->hasMany(\App\Models\PagoCompra::class, 'id', 'moneda_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagoPacientes()
    {
        return $this->hasMany(\App\Models\PagoPaciente::class, 'id', 'moneda_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasaCambios()
    {
        return $this->hasMany(\App\Models\TasaCambio::class, 'id', 'moneda_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tipoExamenPrecios()
    {
        return $this->hasMany(\App\Models\TipoExamenPrecio::class, 'id', 'moneda_id');
    }
    
}
