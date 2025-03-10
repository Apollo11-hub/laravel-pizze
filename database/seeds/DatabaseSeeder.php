<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            $this->call(PizzasTableSeeder::class);
            $this->call(IngredientsTableSeeder::class);
            $this->call(IngredientPizzaTableSeeder::class);
    }
}
