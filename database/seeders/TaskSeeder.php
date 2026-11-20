<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Seed the tasks table.
     */
    public function run(): void
    {
        $tasks = [
            ['title' => 'Complete project proposal', 'description' => 'Write and submit the project proposal document.', 'status' => 'pending', 'is_archived' => false],
            ['title' => 'Review team members', 'description' => 'Review and assign roles to team members.', 'status' => 'in_progress', 'is_archived' => false],
            ['title' => 'Prepare presentation slides', 'description' => 'Create slides for the final presentation.', 'status' => 'pending', 'is_archived' => false],
            ['title' => 'Test application features', 'description' => 'Test all features of the application.', 'status' => 'completed', 'is_archived' => false],
            ['title' => 'Fix bugs', 'description' => 'Fix any bugs reported during testing.', 'status' => 'pending', 'is_archived' => false],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(
                ['title' => $task['title']],
                $task
            );
        }
    }
}
