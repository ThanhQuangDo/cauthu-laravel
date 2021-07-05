<?php

use Illuminate\Database\Seeder;
use App\Models\Country;

class UserTableCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $country = [
            'name' => 'VietNam'
        ];
        Country::create($country);
    }
}
