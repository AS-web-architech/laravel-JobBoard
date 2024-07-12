<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\User;
use Faker\Test\Provider\LocalizationTest;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Queue\Jobs\FakeJob;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JOb>
 */
class JObFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'user_id'=>User::factory(),
            'job_title'=>fake()->jobTitle(),
            'job_description'=>fake()->paragraph(),
            'job_Location'=>fake()->address(),  
            'job_type'=>'Full Time',  
            
            

        ];
        
    }
    
}
