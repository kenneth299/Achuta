<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{

    //Quand tu récupères ce champ, convertis-le automatiquement en tableau PHP
    protected $casts = [
        'sizes' => 'array',
    ];

    // Calcul automatique du prix final
    // Si réduction (discount existe) : price - (price * discount/100)
    // Sinon : final_price = price
    protected static function booted()
    {
        static::saving(function ($product) {
            $product->final_price = $product->discount
                ? $product->price * (1 - $product->discount / 100)
                : $product->price;
        });
    }

    // Relation avec les images
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
