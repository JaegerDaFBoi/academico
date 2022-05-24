<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            [
                "documento" => "1053847714",
                "nombre" => "Juan Camilo Morales",
                "grado" => "9A",
                "tipo" => "Secundaria",
                "correo" => "mcallister2696@gmail.com"
            ]
        ];

        foreach ($students as $student) {
            Student::create(
                [
                    'documento' => $student['documento'],
                    'nombre' => $student['nombre'],
                    'grado' => $student['grado'],
                    'tipo' => $student['tipo'],
                    'correo' => $student['correo']
                ]
                );
        }
    }
}
