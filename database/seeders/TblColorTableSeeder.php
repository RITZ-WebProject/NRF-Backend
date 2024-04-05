<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblColorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tbl_color')->delete();
        
        \DB::table('tbl_color')->insert(array (
            0 => 
            array (
                'id' => 1,
                'color' => 'Black',
                'color_mm' => 'BLACK MM',
                'created_at' => '2023-02-01 09:05:23',
                'updated_at' => '2023-02-01 09:05:23',
            ),
            1 => 
            array (
                'id' => 2,
                'color' => 'White',
                'color_mm' => 'WHITE MM',
                'created_at' => '2023-02-01 09:05:40',
                'updated_at' => '2023-02-01 09:05:40',
            ),
            2 => 
            array (
                'id' => 3,
                'color' => 'Grey',
                'color_mm' => 'GREY MM',
                'created_at' => '2023-02-01 09:05:50',
                'updated_at' => '2023-02-01 09:05:50',
            ),
            3 => 
            array (
                'id' => 4,
                'color' => 'Red',
                'color_mm' => 'RED MM',
                'created_at' => '2023-02-01 09:05:58',
                'updated_at' => '2023-02-01 09:05:58',
            ),
            4 => 
            array (
                'id' => 5,
                'color' => 'Blue',
                'color_mm' => 'BLUE MM',
                'created_at' => '2023-02-01 09:06:13',
                'updated_at' => '2023-02-01 09:06:13',
            ),
            5 => 
            array (
                'id' => 6,
                'color' => 'Yellow',
                'color_mm' => 'YELLOW MM',
                'created_at' => '2023-02-01 09:06:24',
                'updated_at' => '2023-02-01 09:06:24',
            ),
            6 => 
            array (
                'id' => 7,
                'color' => 'Navy Blue',
                'color_mm' => 'NAVY BLUE MM',
                'created_at' => '2023-02-01 09:06:51',
                'updated_at' => '2023-02-01 09:06:51',
            ),
            7 => 
            array (
                'id' => 8,
                'color' => 'Pink',
                'color_mm' => 'PINK MM',
                'created_at' => '2023-02-01 09:07:06',
                'updated_at' => '2023-02-01 09:07:06',
            ),
            8 => 
            array (
                'id' => 9,
                'color' => 'Marron',
                'color_mm' => 'MARRON MM',
                'created_at' => '2023-02-01 09:07:21',
                'updated_at' => '2023-02-01 09:07:21',
            ),
            9 => 
            array (
                'id' => 10,
                'color' => 'Dark Blue',
                'color_mm' => 'DARK BLUE MM',
                'created_at' => '2023-02-01 09:07:35',
                'updated_at' => '2023-02-01 09:07:35',
            ),
            10 => 
            array (
                'id' => 11,
                'color' => 'Multicolor',
                'color_mm' => 'MULICOLOR MM',
                'created_at' => '2023-02-01 09:07:54',
                'updated_at' => '2023-02-01 09:07:54',
            ),
            11 => 
            array (
                'id' => 12,
                'color' => 'Green',
                'color_mm' => 'GREEN MM',
                'created_at' => '2023-02-01 09:08:08',
                'updated_at' => '2023-02-01 09:08:08',
            ),
            12 => 
            array (
                'id' => 13,
                'color' => 'Purple',
                'color_mm' => 'PURPLE MM',
                'created_at' => '2023-02-01 09:08:20',
                'updated_at' => '2023-02-01 09:08:20',
            ),
            13 => 
            array (
                'id' => 14,
                'color' => 'Violet',
                'color_mm' => 'VIOLET MM',
                'created_at' => '2023-02-01 09:08:34',
                'updated_at' => '2023-02-01 09:08:34',
            ),
            14 => 
            array (
                'id' => 15,
                'color' => 'Dark Grey',
                'color_mm' => 'DARK GREY',
                'created_at' => '2023-02-01 09:08:53',
                'updated_at' => '2023-02-01 09:08:53',
            ),
            15 => 
            array (
                'id' => 16,
                'color' => 'Beige',
                'color_mm' => 'BEIGE MM',
                'created_at' => '2023-02-01 09:09:07',
                'updated_at' => '2023-02-01 09:09:07',
            ),
            16 => 
            array (
                'id' => 17,
                'color' => 'Light Blue',
                'color_mm' => 'LIGHT BLUE MM',
                'created_at' => '2023-02-01 09:09:34',
                'updated_at' => '2023-02-01 09:09:34',
            ),
            17 => 
            array (
                'id' => 18,
                'color' => 'Dark Green',
                'color_mm' => 'DARK GREEN MM',
                'created_at' => '2023-02-01 09:09:47',
                'updated_at' => '2023-02-01 09:09:47',
            ),
            18 => 
            array (
                'id' => 19,
                'color' => 'Brown',
                'color_mm' => 'BROWN MM',
                'created_at' => '2023-02-01 09:10:10',
                'updated_at' => '2023-02-01 09:10:10',
            ),
        ));
        
        
    }
}