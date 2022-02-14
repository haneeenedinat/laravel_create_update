<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'quatity',
        'status',
        'price',
        'category_id'
    ];

    public function Categorry(){
        return $this->belongsTo(Categorry::class);
    }
}
