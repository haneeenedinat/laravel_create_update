<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorry extends Model
{
    use HasFactory;

    protected $fillable=[
        'categorries_name',
    ];
    // public function products(){
    // return $this->hasMany(product::class);
    // }

}
