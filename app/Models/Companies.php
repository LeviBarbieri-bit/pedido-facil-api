<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'fantasy_name',
        'phone_number',
        'email',
        'cnpj',
        'address',
        'city',
        'number',
        'state',
        'country',
        'site',
    ];

}
