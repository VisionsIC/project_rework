<?php

use Illuminate\Database\Seeder;

class SeatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert some data records
        DB::table('seating')->insert(array(
            array('seating_type'=>'Recliners','seating_type_id'=>'0',),
            array('seating_type'=>'Wheelchair Cushions','seating_type_id'=>'1',),
            array('seating_type'=>'Wheelchair Backs','seating_type_id'=>'2',),
        ));
    }
}
