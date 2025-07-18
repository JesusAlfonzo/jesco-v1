<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstadoExamene
 *
 * @property $id
 * @property $nombre
 * @property $created_at
 * @property $updated_at
 *
 * @property Examene[] $examenes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstadoExamene extends Model
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
    public function examenes()
    {
        return $this->hasMany(\App\Models\Examene::class, 'id', 'estado_examen_id');
    }
    
}
