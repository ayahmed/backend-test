<?php

use Faker\Provider\Uuid;
use Illuminate\Database\Seeder;

class AnalyticTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $analytics = json_decode('[
        {
            "id": "1",
            "name": "max_Bld_Height_m",
            "units": "m",
            "is_numeric": "TRUE",
            "num_decimal_places": "1"
        },
        {
            "id": "2",
            "name": "min_lot_size_m2",
            "units": "m2",
            "is_numeric": "TRUE",
            "num_decimal_places": "0"
        },
        {
            "id": "3",
            "name": "fsr",
            "units": ":1",
            "is_numeric": "TRUE",
            "num_decimal_places": "2"
        }
    ]', true);

        foreach ($analytics as $data) {
            DB::table('analytic_types')->insert([
                'name' => $data['name'],
                'units' => $data['units'],
                'is_numeric' => $data['is_numeric'] == "TRUE" ? 1 : 0,
                'num_decimal_places' => $data['num_decimal_places']
            ]);
        }
    }
}
