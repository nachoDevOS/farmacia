<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        Permission::firstOrCreate([
            'key'        => 'browse_admin',
            'keyDescription'=>'vista de acceso al sistema',
            'table_name' => 'admin',
            'tableDescription'=>'Panel del Sistema'
        ]);

        $keys = [
            // 'browse_admin',
            'browse_bread',
            'browse_database',
            'browse_media',
            'browse_compass',
            'browse_clear-cache',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('menus');

        Permission::generateFor('roles');
        Permission::generateFor('permissions');
        Permission::generateFor('settings');

        Permission::generateFor('users');

        Permission::generateFor('posts');
        Permission::generateFor('categories');
        Permission::generateFor('pages');

        

        // Administracion
        $permissions = [
            'browse_people' => 'Ver lista de personas',
            'read_people' => 'Ver detalles de una persona',
            'edit_people' => 'Editar información de personas',
            'add_people' => 'Agregar nuevas personas',
            'delete_people' => 'Eliminar personas',
        ];

        foreach ($permissions as $key => $description) {
            Permission::firstOrCreate([
                'key'        => $key,
                'keyDescription'=> $description,
                'table_name' => 'people',
                'tableDescription'=>'Personas'
            ]);
        }


        // Parametros
        $permissions = [
            'browse_branches' => 'Ver lista de sucursales',
            'read_branches' => 'Ver detalles de una sucursales',
            'edit_branches' => 'Editar información de sucursales',
            'add_branches' => 'Agregar nuevas sucursales',
            'delete_branches' => 'Eliminar sucursales',
        ];

        foreach ($permissions as $key => $description) {
            Permission::firstOrCreate([
                'key'        => $key,
                'keyDescription'=> $description,
                'table_name' => 'branches',
                'tableDescription'=>'Sucursales'
            ]);
        }

        $permissions = [
            'browse_presentations' => 'Ver lista de presentacion de productos',
            'read_presentations' => 'Ver detalles de una presentacion de productos',
            'edit_presentations' => 'Editar información de presentacion de productos',
            'add_presentations' => 'Agregar nuevas presentacion de productos',
            'delete_presentations' => 'Eliminar presentacion de productos',
        ];

        foreach ($permissions as $key => $description) {
            Permission::firstOrCreate([
                'key'        => $key,
                'keyDescription'=> $description,
                'table_name' => 'presentations',
                'tableDescription'=>'Presentacion de Productos'
            ]);
        }

        $permissions = [
            'browse_lines' => 'Ver lista de lineas',
            'read_lines' => 'Ver detalles de una lineas',
            'edit_lines' => 'Editar información de lineas',
            'add_lines' => 'Agregar nuevas lineas',
            'delete_lines' => 'Eliminar lineas',
        ];

        foreach ($permissions as $key => $description) {
            Permission::firstOrCreate([
                'key'        => $key,
                'keyDescription'=> $description,
                'table_name' => 'lines',
                'tableDescription'=>'Lineas'
            ]);
        }

        $permissions = [
            'browse_laboratories' => 'Ver lista de laboratorios',
            'read_laboratories' => 'Ver detalles de una laboratorios',
            'edit_laboratories' => 'Editar información de laboratorios',
            'add_laboratories' => 'Agregar nuevas laboratorios',
            'delete_laboratories' => 'Eliminar laboratorios',
        ];

        foreach ($permissions as $key => $description) {
            Permission::firstOrCreate([
                'key'        => $key,
                'keyDescription'=> $description,
                'table_name' => 'laboratories',
                'tableDescription'=>'Laboratorios'
            ]);
        }

     



        
        
    }
}