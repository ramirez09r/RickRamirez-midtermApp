<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'hardware_id',
        'name',
        'ip',
        'type',
    ];

    public function user(){

        return $this->hasOne(User::class);
    }

    public function hardware(){

        return $this->hasOne(Hardware::class);
    }
}
