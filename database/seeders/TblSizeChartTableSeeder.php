<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblSizeChartTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_size_chart')->delete();
        
        \DB::table('tbl_size_chart')->insert(array (
            0 => 
            array (
                'id' => 2,
                'size_chart' => 'S',
                'size_chart_long' => 'Small',
                'created_at' => '2023-02-13 15:07:29',
                'updated_at' => '2023-02-13 15:07:29',
            ),
            1 => 
            array (
                'id' => 3,
                'size_chart' => 'M',
                'size_chart_long' => 'Medium',
                'created_at' => '2023-02-13 15:08:06',
                'updated_at' => '2023-02-13 15:08:06',
            ),
            2 => 
            array (
                'id' => 4,
                'size_chart' => 'L',
                'size_chart_long' => 'Large',
                'created_at' => '2023-02-13 15:08:26',
                'updated_at' => '2023-02-13 15:08:26',
            ),
            3 => 
            array (
                'id' => 5,
                'size_chart' => 'XL',
                'size_chart_long' => 'Extra Large',
                'created_at' => '2023-02-13 15:08:45',
                'updated_at' => '2023-02-13 15:08:45',
            ),
            4 => 
            array (
                'id' => 6,
                'size_chart' => 'XXL',
                'size_chart_long' => 'Extra Extra Large',
                'created_at' => '2023-02-13 15:09:07',
                'updated_at' => '2023-02-13 15:09:07',
            ),
        ));
        
        
    }
}