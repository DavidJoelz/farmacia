<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;
use App\Models\Titulo;
use App\Models\Pasantia;
use App\Models\Responsable;
use Spatie\Permission\Models\Role;


class EmpleadoSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$admin = Empleado::factory()->create([
			'ci' => 1,
			'nombre' => '',
			'apellido' => 'admin',
			'cargo' => 'admin',
		]);

		$david = Empleado::factory()->create([
			'ci' => 2,
			'nombre' => 'David',
			'apellido' => 'Parizaca',
		]);

		$jackfer = Empleado::factory()->create([
			'ci' => 3,
			'nombre' => 'Jackfer',
			'apellido' => 'Zevallos',
		]);

		$farma = Empleado::factory()->create([
			'ci' => 6,
			'nombre' => '',
			'apellido' => 'farmaceutico',
			'cargo' => 'farmaceutico',
		]);

		$pasante = Empleado::factory()->create([
			'ci' => 7,
			'nombre' => '',
			'apellido' => 'pasante',
			'cargo' => 'pasante',
		]);


		$analista = Empleado::factory()->create([
			'ci' => 8,
			'nombre' => '',
			'apellido' => 'analista',
			'cargo' => 'analista',
		]);


		for ($i=0; $i < 100; $i++) { 
			$empleado = Empleado::factory()->create();

			if($empleado->cargo == 'farmaceutico') {
				$titulo = Titulo::factory()->create([
					'ci' => $empleado->ci,
				]);

			} elseif ($empleado->cargo == 'pasante') {
				$pasantia = Pasantia::factory()->create([
					'ci' => $empleado->ci,
				]);

				if ($empleado->edad <= 17) {
					$responsable = Responsable::factory()->create([
						'ci' => $empleado->ci,	
					]);
				}
			}
		}
	}
}
