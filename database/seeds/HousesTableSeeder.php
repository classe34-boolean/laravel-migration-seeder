<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\House;

class HousesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        // ciclo
        for($i = 0; $i < 20; $i++) {
            // creo oggetto, istanza della classe House (Model)
            $newHouse = new House();

            // valorizzo le sue proprietà
            $newHouse->reference = $faker->bothify('??-#########');
            $newHouse->address = $faker->address();
            $newHouse->postal_code = $faker->postcode();
            $newHouse->city = $faker->city();
            $newHouse->state = $faker->unique()->state();
            $newHouse->square_meters = $faker->numberBetween(30, 600);
            $newHouse->rooms = $faker->numberBetween(1, 30);
            $newHouse->bathrooms = $faker->numberBetween(1, 6);
            $newHouse->description = $faker->paragraphs(5, true);
            $newHouse->price = $faker->randomFloat(2, 20000, 6000000);
            $newHouse->is_available = rand(0, 1);
            $newHouse->energy_rating = $faker->randomElement(["G", "F", "E", "D", "C", "B", "A", "A+", "A++", "A+++", "A++++"]);
            $newHouse->created_at = $faker->dateTime();
            $newHouse->updated_at = $faker->dateTime();

            // salvo l'oggetto a db
            $newHouse->save();
        }
    }
}
