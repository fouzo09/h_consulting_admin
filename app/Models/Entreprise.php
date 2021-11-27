<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Entreprise;

class Entreprise extends Model
{
    public function emplois(){
        return $this->hasMany(Emploi::class);
    }
}
