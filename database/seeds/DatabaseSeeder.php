<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $mul_rows_member= [
                [ 
                'title'=>'Mr',
                'category'=>'Student',
                'name'=>'Shanuka Alahkoon',
                'Address1'=>'Kegalle',
                'Address2'=>'Sri lanka',
                'nic'=>'910000000V',
                'Mobile'=>'0710000000',
                'birthday'=>'1991-01-01',
                'gender'=>'Male',
                'Description'=>'',
                'regdate'=>'2019-01-01',
                ],
                
                [  
                'title'=>'Mr',
                'category'=>'Student',
                'name'=>'Malaka Madushan',
                'Address1'=>'Ambalanyhota',
                'Address2'=>'Sri lanka',
                'nic'=>'930000000V',
                'Mobile'=>'0770000000',
                'birthday'=>'1993-01-01',
                'gender'=>'Male',
                'Description'=>'',
                'regdate'=>'2019-01-01',
                ]
        ];
        $insert= DB::table('members')->insert($mul_rows_member);
        // foreach ($mul_rows as $rows) {
           
        // }

        $mul_rows_user= [
            [  
            'name'=>'codeaider',
            'email'=>'info@codeaider.com',
            'email_verified_at'=>'2019-12-12',
            'password'=>'ca',
           
            ]
    ];
    $insert= DB::table('users')->insert($mul_rows_user);
    }
}
