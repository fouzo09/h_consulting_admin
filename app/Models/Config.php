<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = "configurations";
    protected $fillable = ['nom_plateforme',
                            'telephone',	
                            'email',	
                            'adresse',	
                            'logo',	
                            'activation_notification'
                        ];
}
