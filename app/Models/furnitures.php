<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class furnitures extends Model
{
    use HasFactory;
    protected $table ='furnitures' ;
    protected $fillable =[
        'nameuser',
        'typefurnitures',
        'numuser',
        'cityuser',
        'furnituresimage',
    ];
}
