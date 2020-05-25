<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //protected $fillable = ['email','Responsavel'];

    protected $guarded = [];

    //Adding Relationship
    // public function user()
    // {
    //     return $this->belongsTo(User::class)
    // }

    public function Recurso_disp()
    {
        return $this->hasMany(Recurso_disp::class);
    }
}
