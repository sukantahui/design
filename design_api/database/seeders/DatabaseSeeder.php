<?php

namespace Database\Seeders;




use App\Models\FeesModeType;
use App\Models\Ledger;
use App\Models\LedgerGroup;
use App\Models\Subject;
use App\Models\TransactionType;
use App\Models\VoucherType;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;
use App\Models\State;
use App\Models\Course;
use App\Models\DurationType;
use App\Models\StudentCourseRegistration;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //person_types table data
        UserType::create(['user_type_name' => 'Owner']);            #1
        UserType::create(['user_type_name' => 'Developer']);        #2
        UserType::create(['user_type_name' => 'Admin']);            #3
        UserType::create(['user_type_name' => 'Manager']);          #4
        UserType::create(['user_type_name' => 'Worker']);           #5
        UserType::create(['user_type_name' => 'Accountant']);       #6
        UserType::create(['user_type_name' => 'Office Staff']);     #7
        UserType::create(['user_type_name' => 'Student']);          #8

        //owner
        User::create(['user_name'=>'Tanusree Hui','mobile1'=>'9836444999','mobile2'=>'100'
        ,'email'=>'owner','password'=>"81dc9bdb52d04dc20036dbd8313ed055",'user_type_id'=>1]);

        //developer
        User::create(['user_name'=>'Sukanta Hui','mobile1'=>'9836444999','mobile2'=>'101'
            ,'email'=>'developer','password'=>"81dc9bdb52d04dc20036dbd8313ed055",'user_type_id'=>2]);

        //admin
        User::create(['user_name'=>'Sreeparna Das','mobile1'=>'9836444999','mobile2'=>'102'
            ,'email'=>'admin','password'=>"81dc9bdb52d04dc20036dbd8313ed055",'user_type_id'=>3]);

        //student
        User::create(['user_name'=>'Coder Student','mobile1'=>'9836444999','mobile2'=>'108'
            ,'email'=>'student','password'=>"81dc9bdb52d04dc20036dbd8313ed055",'user_type_id'=>8]);

    }
}
