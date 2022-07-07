<?php

use Illuminate\Database\Seeder;
use App\Pizza;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Pizza  $pizza)
    {

        $data = config('pizze');
        foreach ($data as $pizza) {
            $new_pizza = new Pizza();
            $new_pizza->nome = $pizza['nome'];
            $new_pizza->slug = Pizza::GeneratoreSlug($new_pizza->nome);
            $new_pizza->prezzo = $pizza['prezzo'];
            $new_pizza->ingredienti = $pizza['ingredienti'];
            $new_pizza->vegetariana = $pizza['vegetariana'];
            $new_pizza->save();
        }



    }
}
