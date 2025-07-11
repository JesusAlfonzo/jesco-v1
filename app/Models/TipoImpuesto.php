<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoImpuesto
 *
 * @property $id
 * @property $nombre
 * @property $porcentaje
 * @property $created_at
 * @property $updated_at
 *
 * @property ImpuestoCompra[] $impuestoCompras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoImpuesto extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'porcentaje'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function impuestoCompras()
    {
        return $this->hasMany(\App\Models\ImpuestoCompra::class, 'id', 'tipo_impuesto_id');
    }
    
}
