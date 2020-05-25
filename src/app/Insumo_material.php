<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo_material extends Model
{
    protected $guarded = [];
    //See about mass assing protection turned off
    //See Previous e13 Class - Mass Assignment

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeInactive($query)
    {
        return $query->where('active', 0);
    }

    public function Insumo()
    {
        return $this->belongsTo(Insumo::class);
    }

}
