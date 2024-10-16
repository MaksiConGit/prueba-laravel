<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new Alumno();

        $user->nombre = 'admin';
        $user->apellido = 'ADMIN';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('admin');
        $user->slug = 'admin_ADMIN';
        $user->descripcion = 'es admin';

        $user->save();

        Alumno::factory(25)->create();
    }
}
