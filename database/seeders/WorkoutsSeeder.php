<?php

namespace Database\Seeders;

use App\Models\Goal;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Database\Seeder;

class WorkoutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $duration = fake()->numberBetween(2, 5);
        $assigned = Workout::create([
            'name' => 'Workout A',
            'user_id' => User::role('personal-trainer')->first()->id,
            'athlete_id' => User::role('athlete')->first()->id,
            'duration' => $duration,
            'start_date' => now(),
            'goal_id' => Goal::all()->shuffle()->first()->id
        ]);

        foreach (range(1, $duration) as $week) {
            $assigned->workout_weeks()->create([
                'week' => $week
            ]);
        }

        $duration = fake()->numberBetween(2, 5);
        $not_assigned = Workout::create([
            'name' => 'Workout B',
            'user_id' => User::role('personal-trainer')->first()->id,
            'duration' => $duration,
            'start_date' => now(),
            'goal_id' => Goal::all()->shuffle()->first()->id
        ]);
        foreach (range(1, $duration) as $week) {
            $not_assigned->workout_weeks()->create([
                'week' => $week
            ]);
        }
    }
}
