<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ExamenLaboratorio;

/**
 * Class Paciente
 *
 * @property $id
 * @property $nombre
 * @property $apellido
 * @property $cedula
 * @property $telefono
 * @property $email
 * @property $direccion
 * @property $codigo_externo
 * @property $codigo_interno
 * @property $created_at
 * @property $updated_at
 *
 * @property ExamenLaboratorio[] $examenLaboratorios
 * @property ExamenLaboratorio[] $examenLaboratorios
 * @property Muestra[] $muestras
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Paciente extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre', 'apellido', 'cedula', 'telefono', 'email', 'direccion', 'codigo_externo', 'codigo_interno'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function examenLaboratorios()
    {
        return $this->hasMany(\App\Models\ExamenLaboratorio::class, 'id', 'id_paciente');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function muestras()
    {
        return $this->hasMany(\App\Models\Muestra::class, 'id', 'paciente_id');
    }
    
}
