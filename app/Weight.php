<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $primaryKey = 'weight_id';
    protected $table = "weight";
    public $timestamps = false;

    public function symptom()
    {
        return $this->hasOne('App\Symptoms', 'symptom_id', 'symptom_id');
    }
    public function diease()
    {
        return $this->hasOne('App\Diease', 'diease_id', 'diease_id');
    }

}
