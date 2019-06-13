<?php

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
        // $this->call(UsersTableSeeder::class);

        // php artisan migrate --seed // Migrates Tables AND seeds database... (Runs this file)
        // php artisan db:seed // Just runs this file...

        // Also One thing I forgot... seeders should clear data first before seeding...

        $this->call(SettingSeederTable::class); // Seed Default Settings
        $this->call(UserTableSeeder::class); // Seed Default Users
        $this->call(CategoryTableSeeder::class); // Seed Default Categories

    }
}
