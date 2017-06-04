<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Provincia;

class ProvinciaTableSeeder extends Seeder
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
                'name' => 'Madrid'
            ],
            [
                'name' => 'Cataluña'
            ],
            [
                'name' => 'Andalucia'
            ],
            [
                'name' => 'Valencia'
            ],
            [
                'name' => 'Extremadura'
            ]
        );

        Provincia::insert($data);
    }
}