<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pizza extends Model
{
    public static function GeneratoreSlug($nome){
        $slug = Str::slug($nome, '-');
        $slug_base = $slug;
        $pizza_esistente = Pizza::where('slug', $slug)->first();
        $contatore = 1;

        while($pizza_esistente){
            $slug = $slug_base .'-'. $contatore;
            $contatore++;
            $pizza_esistente = Pizza::where('slug', $slug)->first();
        }
        return $slug;
    }
}
