<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;
    protected $fillable =[
        'company_name',
        'last_name',
        'first_name',
        'email',
        'phone',

    ];

}
