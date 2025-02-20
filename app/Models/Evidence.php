<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    public function role(){
        return $this->hasMany(Rule::class);
    }

}
