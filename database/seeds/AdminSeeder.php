<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User;
        $user->name = "jim";
        $user->username = "admins";
        $user->email = "jimjim@gmail.com";
        $user->level = "admin";
        $user->password = bcrypt("123");
        $user->save();
        $this->command->info("Admin ditambahkan");

        $user1 = new \App\User;
        $user1->name = "dinda";
        $user1->username = "admin";
        $user1->email = "dinda@gmail.com";
        $user1->level = "pelanggan";
        $user1->password = bcrypt("123");
        $user1->save();
        $this->command->info("Pelanggan ditambahkan");


        $user2 = new \App\User;
        $user2->name = "queen petshop";
        $user2->username = "company";
        $user2->email = "queen@gmail.com";
        $user2->level = "shop";
        $user2->password = bcrypt("123");
        $user2->save();
        $this->command->info("Shop ditambahkan");
    }
}
