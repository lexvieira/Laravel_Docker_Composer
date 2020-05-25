<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recurso_disp extends Model
{
    protected $guarded = [];

    public function Empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function Insumo()
    {
        return $this->hasMany(Insumo::class);
    }

}
