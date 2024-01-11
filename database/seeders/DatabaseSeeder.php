<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Role::create([ 'name' => 'Administrator' ]);
        \App\Models\Role::create([ 'name' => 'Editor' ]);
        \App\Models\Role::create([ 'name' => 'Author' ]);

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);
        $user->roles()->attach(1, ['approved' => 1]);
        $user->roles()->attach(2);
        $user->roles()->attach(3);

        // foreach ($user->roles as $role) {
        //     info('Role is: ' .$role->name . '( time: '.$role->pivot->created_at.', approved: '. $role->pivot->approved .")");
        // }

        foreach ($user->approvedRoles as $role) {
            info('Role is: ' .$role->name );
        }
    }
}
