<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->insert([
            'name' => 'Rhea May Ardiente',
            'email' => 'rhea.ardiente@mlhuillier.com',
            'password' => Hash::make('rhea2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Quency Atacador',
            'email' => 'quency.atacador@mlhuillier.com',
            'password' => Hash::make('quency2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Jonalyn Mobilla',
            'email' => 'jonalyn.mobilla@mlhuillier.com',
            'password' => Hash::make('jonalyn2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Shenna Cañeda',
            'email' => 'shenna.caneda@mlhuillier.com',
            'password' => Hash::make('shenna2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Reina Mates',
            'email' => 'reina.mates@mlhuillier.com',
            'password' => Hash::make('reina2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Jenie Joy Tomalon',
            'email' => 'jenie.tomalon@mlhuillier.com',
            'password' => Hash::make('jenie2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Jose Morilla Jr.',
            'email' => 'jose.morilla@mlhuillier.com',
            'password' => Hash::make('jose2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Jasper Malubay',
            'email' => 'jasper.malubay@mlhuillier.com',
            'password' => Hash::make('jasper2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Norberto Daño',
            'email' => 'norberto.dano@mlhuillier.com',
            'password' => Hash::make('norberto2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Rolando Justo Jr.',
            'email' => 'rolando.justo@mlhuillier.com',
            'password' => Hash::make('rolando2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Mark Andrew Celestial',
            'email' => 'mark.celestial@mlhuillier.com',
            'password' => Hash::make('mark2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Ma. Judelyn Cabalhao',
            'email' => 'judelyn.cabalhao@mlhuillier.com',
            'password' => Hash::make('judelyn2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Merry Cris Ajoc',
            'email' => 'merry.ajoc@mlhuillier.com',
            'password' => Hash::make('merry2021'),
            'is_admin' => '0'
        ]);

        DB::table('users')->insert([
            'name' => 'Roselyn Amoc',
            'email' => 'roselyn.amoc@mlhuillier.com',
            'password' => Hash::make('roselyn2021'),
            'is_admin' => '0'
        ]);
        DB::table('users')->insert([
            'name' => 'Jhon Adrian Tigusan',
            'email' => 'jhon.tigusan@mlhuillier.com',
            'password' => Hash::make('jhon2021'),
            'is_admin' => '0'
        ]);
        DB::table('users')->insert([
            'name' => 'Rochelle Balansag',
            'email' => 'rochelle.balansag@mlhuillier.com',
            'password' => Hash::make('rochelle2021'),
            'is_admin' => '0'
        ]);
        DB::table('users')->insert([
            'name' => 'Jersene Sanchez',
            'email' => 'jersene.sanchez@mlhuillier.com',
            'password' => Hash::make('jersene2021'),
            'is_admin' => '1'
        ]);
        DB::table('users')->insert([
            'name' => 'Romeo Rodemio',
            'email' => 'romeo.rodemio@gmail.com',
            'password' => Hash::make('romeo2021'),
            'is_admin' => '0'
        ]);
        DB::table('users')->insert([
            'name' => 'Shania Lee',
            'email' => 'rhea0951@gmail.com',
            'password' => Hash::make('shania2021'),
            'is_admin' => '0'
        ]);
    }


}
