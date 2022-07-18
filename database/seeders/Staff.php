<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class Staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //staff
        $s = [
            ['staffNo'=>'SL21','sName'=>'john White','position'=>'Manager','salary'=>30000,'branchNo'=>'B005'],
            ['staffNo'=>'SG37','sName'=>'Ann Beech','position'=>'Assistant','salary'=>12000,'branchNo'=>'B003'],
            ['staffNo'=>'SG14','sName'=>'David Ford','position'=>'Supervisor','salary'=>18000,'branchNo'=>'B003'],
            ['staffNo'=>'SA9','sName'=>'Mary Howe','position'=>'Assistant','salary'=>9000,'branchNo'=>'B007'],
            ['staffNo'=>'SG5','sName'=>'Susan Brade','position'=>'Manager','salary'=>24000,'branchNo'=>'B003'],
            ['staffNo'=>'SL41','sName'=>'julie lee','position'=>'Assistant','salary'=>9000,'branchNo'=>'B005'],
          
        ];
        DB::table('_staff')->insert($s);
    }
}
