<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    //protected $fillable = ['name',....];
    //Needed include each name of field

    protected $guarded = [];
    //Guarded every single field.
    //Just possible to use Create because the guarded was setted to a empty array



}
