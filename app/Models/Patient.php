<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patient
 *
 * @property $id
 * @property $external_id
 * @property $first_name
 * @property $last_name
 * @property $id_number
 * @property $created_at
 * @property $updated_at
 *
 * @property LabTest[] $labTests
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Patient extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['external_id', 'first_name', 'last_name', 'id_number'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labTests()
    {
        return $this->hasMany(\App\Models\LabTest::class, 'id', 'patient_id');
    }
    
}
