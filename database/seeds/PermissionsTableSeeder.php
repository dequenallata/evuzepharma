<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $keys = [
            'browse_admin',
            'browse_database',
            'browse_media',
            'browse_settings',
        ];

        foreach ($keys as $key) {
            Permission::firstOrCreate([
                'key'        => $key,
                'table_name' => null,
            ]);
        }

        Permission::generateFor('menus');
        Permission::generateFor('roles');
        Permission::generateFor('users');
        Permission::generateFor('owners');
        Permission::generateFor('pharmacies');
        Permission::generateFor('employees');
        Permission::generateFor('drags');
        Permission::generateFor('drug_units');
        Permission::generateFor('drug_strengths');

    }
}
