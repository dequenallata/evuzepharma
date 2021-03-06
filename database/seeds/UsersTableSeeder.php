<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Role;
use App\User;
use App\Owner;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            /*
             *   Administrator Default Account
             */
            $role = Role::where('name', 'admin')->firstOrFail();
            User::create([
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => str_random(60),
                'role_id'        => $role->id,
            ]);

            /*
             *   Pharmacy Owner Placeholder Account
             */

            Owner::create([
                'name'           => 'John Doe',
                'email'          => 'john.doe@admin.com',
                'password'       => bcrypt('password'),
            ]);

//            $role = Role::where('name', 'owner')->firstOrFail();
//            User::create([
//                'name'           => 'John Doe',
//                'email'          => 'john.doe@admin.com',
//                'password'       => bcrypt('password'),
//                'remember_token' => str_random(60),
//                'role_id'        => $role->id,
//            ]);



        }
    }
}
