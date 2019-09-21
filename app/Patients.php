<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $primaryKey = 'patient_id';
    protected $table = "patient";
}
