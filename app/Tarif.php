<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'tarifs';

    protected $fillable = [
        'yemek_adi', 'user_id', 'category_id', 'tarif', 'yapilis','malzemeler','resim'
    ];
}
