<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $guarded = [];

    public function Insumo_material()
    {
        return $this->hasOne(Insumo_material::class);
    }

    public function Recurso_disp()
    {
        return $this->belongsTo(Recurso_disp::class);
    }

}
