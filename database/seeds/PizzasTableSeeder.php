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
            $new_pizza->slug = Pizza::generatoreSlug($new_pizza->nome);
            $new_pizza->prezzo = $pizza['prezzo'];


            if($pizza['vegetariana'] === 'sì'){
                $new_pizza->vegetariana = true;
            } else{
                $new_pizza->vegetariana = false;
            }

            $new_pizza->save();
        }

    }
}
