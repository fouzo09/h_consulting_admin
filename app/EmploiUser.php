<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploiUser extends Model
{
    protected $fillable = [
        'Emploi_id',
        'User_id',
        'CV',
        'lettre_moti',
        'date_de_la_postulation'
    ];
}
