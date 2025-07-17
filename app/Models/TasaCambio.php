<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TasaCambio
 *
 * @property $id
 * @property $moneda_id
 * @property $tasa
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Moneda $moneda
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TasaCambio extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['moneda_id', 'tasa', 'fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function moneda()
    {
        return $this->belongsTo(\App\Models\Moneda::class, 'moneda_id', 'id');
    }
    
}
