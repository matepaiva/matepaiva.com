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
        $this->call('JobTableSeeder');
        $this->call('ImageTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('ListingTableSeeder');
        $this->call('CourseTableSeeder');
    }
}
