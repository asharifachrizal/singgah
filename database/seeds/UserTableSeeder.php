<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createAdmin();
        $this->createDefaultVisitor();
    }

    public function createRoles()
    {
        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Admin',
                'slug'        => 'admin',
            ]
        );

        Sentinel::getRoleRepository()->createModel()->create
        (
			[
				'name'        => 'Visitor',
                'slug'        => 'visitor',
            ]
        );
    }

    public function createAdmin()
    {
        $credentials = [
			'email' => 'admin@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Admin',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('admin');
		$user->roles()->attach($role);
    }

    public function createDefaultVisitor()
    {   
        $credentials = [
			'email' => 'asharifachrizal@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Ashari',
            'last_name' => 'Fachrizal',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('visitor');
        $user->roles()->attach($role);

        $credentials = [
			'email' => 'januarelsan@mailinator.com',
            'password' => 'qwerty123',
            'first_name' => 'Januar',
            'last_name' => 'Elsan',
		];

        $user = Sentinel::registerAndActivate($credentials);
        $role = Sentinel::findRoleBySlug('visitor');
        $user->roles()->attach($role);
    }
}
