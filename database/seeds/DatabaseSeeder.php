<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(CompaniesTableSeeder::class);
        $this->call(SalonsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(OptionsTableSeeder::class);
        $this->call(PrepaidsTableSeeder::class);
        $this->call(RegionsSeeder::class);
        Model::reguard();
    }
}
