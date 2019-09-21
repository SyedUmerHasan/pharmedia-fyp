<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diease extends Model
{
    protected $primaryKey = 'diease_id';
    protected $table = "diease";
    public $timestamps = false;

}
