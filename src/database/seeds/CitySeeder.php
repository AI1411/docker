<?php

use App\Models\City;
use App\Models\Pref;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Client $client, Pref $pref, City $city)
    {
        $prefs = Pref::all();

        foreach ($prefs->pluck('id') as $pref_id) {
            $api = 'https://www.land.mlit.go.jp/webland/api/CitySearch?area=' .str_pad($pref_id, 2, 0, STR_PAD_LEFT);
            $response_datas = $client->request('GET', $api);
            $response_bodies = json_decode($response_datas->getBody()->getContents(), true);

            if ($response_bodies['status'] === 'OK') {
                foreach ($response_bodies['data'] as $response_body) {
                    $city->create([
                        'pref_id' => $pref_id,
                        'city_code' => $response_body['id'],
                        'name' => $response_body['name']
                    ]);
                }
            }
        }
    }
}
