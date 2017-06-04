<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\ciudades;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Madrid',
                'longitud' => -3.709405729589883,
                'latitud' => 40.41311285612875,
                'texto' => 'Esto es Madrid',
                'provincia_id' => 1
            ],
            [
                'name' => 'Barcelona',
                'longitud' => 2.1734034999999494,
                'latitud' => 41.3850639,
                'texto' => 'Lorem ipsum dolor sit.',
                'provincia_id' => 2
            ],
            [
                'name' => 'Tarragona',
                'longitud' => 1.2444908999999598,
                'latitud' => 41.1188827,
                'texto' => 'Lorem ipsum dolor sit.',
                'provincia_id' => 2
            ],
            [
                'name' => 'Gerona',
                'longitud' => 2.821426400000064,
                'latitud' => 41.9794005,
                'texto' => 'Lorem ipsum dolor sit.',
                'provincia_id' => 2
            ],
            [
                'name' => 'Lérida',
                'longitud' => 0.6200145999999904,
                'latitud' => 41.6175899,
                'texto' => 'Lorem ipsum dolor sit.',
                'provincia_id' => 2
            ],
            [
                'name' => 'Sevilla',
                'longitud' => -5.984458899999936,
                'latitud' => 37.3890924,
                'texto' => 'Lorem ipsum dolor sit.',
                'provincia_id' => 3
            ],
            [
                'name' => 'Malaga',
                'longitud' => -4.42139880000002,
                'latitud' => 36.7212737,
                'texto' => 'Lorem ipsum.',
                'provincia_id' => 3
            ],
            [
                'name' => 'Cadiz',
                'longitud' => -6.288596200000029,
                'latitud' => 36.5270612,
                'texto' => 'Lorem ipsum.',
                'provincia_id' => 3
            ],
            [
                'name' => 'Cordoba',
                'longitud' => -4.7793834999999945,
                'latitud' => 37.8881751,
                'texto' => 'Lorem ipsum.',
                'provincia_id' => 3
            ],
            [
                'name' => 'Huelva',
                'longitud' => -6.944722400000046,
                'latitud' => 37.261421,
                'texto' => 'Lorem ipsum.',
                'provincia_id' => 3
            ],
            [
                'name' => 'Valencia',
                'longitud' => -0.3762881000000107,
                'latitud' => 39.4699075,
                'texto' => 'Esto es Valencia',
                'provincia_id' => 4
            ],
            [
                'name' => 'Castellon',
                'longitud' => -0.051324600000043574,
                'latitud' => 39.9863563,
                'texto' => 'Esto es Castellon',
                'provincia_id' => 4
            ],
            [
                'name' => 'Alicante',
                'longitud' => -0.4906855000000405,
                'latitud' => 38.3459963,
                'texto' => 'Esto es Alicante',
                'provincia_id' => 4
            ],
            [
                'name' => 'Caceres',
                'longitud' => -6.3724247000000105,
                'latitud' => 39.4752765,
                'texto' => 'Esto es Caceres',
                'provincia_id' => 5
            ],
            [
                'name' => 'Badajoz',
                'longitud' => -6.970653500000026,
                'latitud' => 38.8794495,
                'texto' => 'Esto es Badajoz',
                'provincia_id' => 5
            ]
        );

        ciudades::insert($data);
    }
}