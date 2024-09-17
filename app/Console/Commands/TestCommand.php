<?php

namespace App\Console\Commands;

use App\Models\Member;
use App\Models\Trainer;
use App\Models\FitnessClass;
use Illuminate\Console\Command;

class TestCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a test member record';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       
       /* $member = Member::create([
            'name' => 'Ahmad',
            'email' => 'ar5094528@gmail.com',
            'phone' => '71533628',
            'date_of_birth' => '2003-05-29', // Use Y-m-d format for dates
            'address' => 'Beirut',
            'membership_type' => '3months',
            'membership_start_date' => '2024-09-09', // Use Y-m-d format for dates
            'membership_end_date' => '2024-12-09', // Use Y-m-d format for dates
            'status' => 'Active',
            'profile_image' => 'sdasasdjsdfsd222',
        ]);
*/
       /* $trainer = Trainer::create([
            'name' => 'Dana',
            'email' => 'dr5094528@gmail.com',
            'phone' => '71532628',
            'date_of_birth' => '2003-05-12', // Use Y-m-d format for dates
            'specialization'=>'body builder',
            'certification'=>'dadasdas',
            'experience_years'=>'4',
            'profile_image' => 'sdasasddadajsdfsd',
            'status' => 'Active',
            'address' => 'Beirut',
            
        ]);*/





  /*  $FitnessClass = FitnessClass::create([
        'name' => 'Zumba',
        'description' => 'High intensity dance workout',
        'trainer_id' => 3,
        'category' => 'Dance', 
        'duration' => 2, 
        'frequency' => 'Once per week',
        'start_time' => '08:00:00',
        'end_time' => '10:00:00',
        'location' => 'Room 1',
        'status' => 'Active',
    ]);*/


}};
