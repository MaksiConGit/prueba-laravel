<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';
    
    protected function casts(): array{
        return[
            'fecha_rara' => 'datetime'
        ];
    }

    protected function beneficios(): Attribute
    {
        return Attribute::make(
            set: function($value){
                return strtolower($value);
            },
            get: function($value){
                return strtoupper($value);
            }
        );
    }
    
}
