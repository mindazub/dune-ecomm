<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();

        $this->call(CategoryTableSeeder::class);
        $this->command->info('Categories table seeded!');

        $this->call(UsersTableSeeder::class);
        // $this->call('UsersTableSeeder');
	    $this->command->info('Users table seeded!');

        // $this->call(BooksTableSeeder::class);
        // $this->command->info('Books table seeded!');


	    $this->call(AuthorsTableSeeder::class);
		$this->command->info('Authors table seeded!');

	    $this->call(BooksTableSeeder::class);
		$this->command->info('Books table seeded!');


    }
}
