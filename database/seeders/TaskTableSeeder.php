<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Task;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use database\factories\TaskFactory;

class TaskTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    // Run the database seeds.   
    // @return void
    public function run(): void
    {
        Task::factory()->times(50)->create();//we will generate 50 records
    }
}