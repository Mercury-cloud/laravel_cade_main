<?php

namespace Database\Seeders;

use App\Models\Country;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $client = new Client();
        $countries = $client->get('https://restcountries.eu/rest/v2/all');
        $countries = $countries->getBody();
        $countries = json_decode($countries, true);
        foreach ($countries as $country) {
            Country::create([
                'name' => $country['name'],
                'iso_code' => $country["alpha2Code"],
                'call_prefix' => $country['callingCodes'][0]
            ]);
        }

    }
}
