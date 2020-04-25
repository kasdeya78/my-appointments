<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Eduardo Chávez',
	        'email' => 'eduardochavezv@gmail.com',
	        'password' => bcrypt('12345678'), // password
	        'dni'=> '40160915',
	        'address'=> 'Av. Prado Alto 1013',
	        'phone'=> '983707845' ,
	        'role'=> 'admin'

        ]);

        factory(User::class,50)->create();
    }
}
