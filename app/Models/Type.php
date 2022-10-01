<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Emploi;

class Type extends Model
{
    protected $fillable = ['nom'];

    public function emplois(){
        return $this->hasMany(Emploi::class);
    }
}
