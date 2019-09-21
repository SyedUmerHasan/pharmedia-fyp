<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptoms extends Model
{
    protected $primaryKey = 'symptom_id';
    protected $table = "symptom";
    public $timestamps = false;
}
