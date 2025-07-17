<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class MetodoPago
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property PagoCompra[] $pagoCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class MetodoPago extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagoCompras()
    {
        return $this->hasMany(\App\Models\PagoCompra::class, 'id', 'metodo_pago_id');
    }
    
}
