<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Client;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\RoleTableSeeder;
use Database\Seeders\PermissionTableSeeder;
use Database\Seeders\TypeArticleTableSeeder;
use Database\Seeders\DureeLocationTableSeeder;
use Database\Seeders\StatutLocationTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(TypeArticleTableSeeder::class);

        Article::factory(10)->create();
        Client::factory(10)->create();
        User::factory(10)->create();

        $this->call(RoleTableSeeder::class);
        $this->call(StatutLocationTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(DureeLocationTableSeeder::class);


        //Autre methodes
        // $user = User::find(1);
        // $role = Role::find(1);
        // DB::table('user_role')->insert([
        //     'user_id' => $user->id,
        //     'role_id' => $role->id,
        // ]);

        //Attacher un role a un utilisateur dans seeder
        User::find(1)->roles()->attach(1);
        User::find(2)->roles()->attach(2);
        User::find(3)->roles()->attach(3);
        User::find(4)->roles()->attach(4);
    }
}
