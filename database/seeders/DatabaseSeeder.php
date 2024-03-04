<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(1000)->create();
        // $this->call([
        //     RoleTableSeeder::class,
        //     UserTableSeeder::class,
        //     ModelHasRolesTableSeeder::class,
        //     PermissionTableSeeder::class,
        //     RoleHasPermissionsTableSeeder::class,
        //     ModelHasPermissionsTableSeeder::class,
        // ]);

        $responseCodes = [
            ['code' => '00', 'description' => 'Aprobada'],
            ['code' => '01', 'description' => 'Llamar al Banco'],
            ['code' => '02', 'description' => 'Llamar al Banco'],
            ['code' => '03', 'description' => 'Comercio Invalido'],
            ['code' => '04', 'description' => 'Rechazada'],
            ['code' => '05', 'description' => 'Rechazada'],
            ['code' => '06', 'description' => 'Error en Mensaje'],
            ['code' => '07', 'description' => 'Tarjeta Rechazada'],
            ['code' => '08', 'description' => 'Llamar al Banco'],
            ['code' => '09', 'description' => 'Request in progress'],
            ['code' => '10', 'description' => 'Aprobación Parcial'],
            ['code' => '11', 'description' => 'Approved VIP'],
            ['code' => '12', 'description' => 'Transacción Invalida'],
            ['code' => '13', 'description' => 'Monto Invalido'],
            ['code' => '14', 'description' => 'Cuenta Invalida'],
            ['code' => '15', 'description' => 'No such issuer'],
            ['code' => '16', 'description' => 'Approved update track 3'],
            ['code' => '17', 'description' => 'Customer cancellation'],
            ['code' => '18', 'description' => 'Customer dispute'],
            ['code' => '19', 'description' => 'Reintentar Transacción'],
            ['code' => '20', 'description' => 'No tomo acción'],
            ['code' => '21', 'description' => 'No tomo acción'],
            ['code' => '22', 'description' => 'Transacción No Aprobada'],
            ['code' => '23', 'description' => 'Transacción No Aceptada'],
            ['code' => '24', 'description' => 'File update not supported'],
            ['code' => '25', 'description' => 'Unable to locate record'],
            ['code' => '26', 'description' => 'Duplicate record'],
            ['code' => '27', 'description' => 'File update edit error'],
            ['code' => '28', 'description' => 'File update file locked'],
            ['code' => '97', 'description' => 'CVV or CVC Error response'],
            ['code' => '98', 'description' => 'Excede Limete de Efectivo'],
            ['code' => '99', 'description' => 'CVV or CVC Error response'],
            ['code' => 'TF', 'description' => 'Solicitud de autenticación rechazada o no completada']
        ];

        foreach ($responseCodes as $responseCode) {
            DB::table('payment_response_code')->insert($responseCode);
        }
    }
}
