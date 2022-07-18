<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //branch
        $b = [
            ['branchNo'=>'B005','bAddress'=>'22 Deer Rd,London'],
            ['branchNo'=>'B003','bAddress'=>'163 Main St,Glasgow'],
            ['branchNo'=>'B003','bAddress'=>'163 Main St,Glasgow'],
            ['branchNo'=>'B007','bAddress'=>'16 Argyll St,Aberdeen'],
            ['branchNo'=>'B003','bAddress'=>'163 Main St, Glasgow'],
            ['branchNo'=>'B005','bAddress'=>'22 Deer Rd,London']
          
        ];
        DB::table('_branch')->insert($b);

    }
}
