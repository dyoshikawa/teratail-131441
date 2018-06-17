<?php

use Illuminate\Database\Seeder;

class DeptEmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Dept::class, 5)
            ->create()
            ->each(function ($dept) {
                for ($i = 0; $i < 3; $i++) {
                    $dept->employees()->save(factory(App\Employee::class)->make());
                }
            });
    }
}
