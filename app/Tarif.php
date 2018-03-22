<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    protected $table = 'yemek_tarifleri';

    protected $fillable = [
        'yemek_adi', 'tarif', 'yapilis','malzemeler','resim'
    ];
}
