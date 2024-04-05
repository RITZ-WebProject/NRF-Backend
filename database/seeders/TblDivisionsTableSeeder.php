<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblDivisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tbl_divisions')->delete();

        \DB::table('tbl_divisions')->insert(array (
            0 =>
            array (
                'id' => 2,
                'division_name' => 'Kachin',
                'division_name_mm' => 'ကချင်ပြည်နယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            // 1 =>
            // array (
            //     'id' => 3,
            //     'division_name' => 'Kayah',
            //     'division_name_mm' => 'ကယားပြည်နယ်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:23:32',
            //     'updated_at' => '2022-09-29 09:23:32',
            // ),
            2 =>
            array (
                'id' => 4,
                'division_name' => 'Kayin',
                'division_name_mm' => 'ကရင်ပြည်နယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            // 3 =>
            // array (
            //     'id' => 5,
            //     'division_name' => 'Chin',
            //     'division_name_mm' => 'ချင်းပြည်နယ်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:23:32',
            //     'updated_at' => '2022-09-29 09:23:32',
            // ),
            4 =>
            array (
                'id' => 6,
                'division_name' => 'Sagaing',
                'division_name_mm' => 'စစ်ကိုင်းတိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            5 =>
            array (
                'id' => 7,
                'division_name' => 'Tanintharyi',
                'division_name_mm' => 'တနင်္သာရီတိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            6 =>
            array (
                'id' => 8,
            'division_name' => 'Bago (East)',
            'division_name_mm' => 'ပဲခူးတိုင်းဒေသကြီး (အရှေ့)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            7 =>
            array (
                'id' => 9,
            'division_name' => 'Bago (West)',
            'division_name_mm' => 'ပဲခူးတိုင်းဒေသကြီး (အနောက်)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            8 =>
            array (
                'id' => 10,
                'division_name' => 'Magway',
                'division_name_mm' => 'မကွေးတိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            9 =>
            array (
                'id' => 11,
                'division_name' => 'Mandalay',
                'division_name_mm' => 'မန္တလေးတိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            10 =>
            array (
                'id' => 12,
                'division_name' => 'Mon',
                'division_name_mm' => 'မွန်ပြည်နယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            // 11 =>
            // array (
            //     'id' => 13,
            //     'division_name' => 'Rakhine',
            //     'division_name_mm' => 'ရခိုင်ပြည်နယ်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:23:32',
            //     'updated_at' => '2022-09-29 09:23:32',
            // ),
            12 =>
            array (
                'id' => 14,
                'division_name' => 'Yangon',
                'division_name_mm' => 'ရန်ကုန်တိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            13 =>
            array (
                'id' => 15,
            'division_name' => 'Shan (South)',
            'division_name_mm' => 'ရှမ်းပြည်နယ် (တောင်)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            14 =>
            array (
                'id' => 16,
            'division_name' => 'Shan (North)',
            'division_name_mm' => 'ရှမ်းပြည်နယ် (မြောက်)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            15 =>
            array (
                'id' => 17,
            'division_name' => 'Shan (East)',
            'division_name_mm' => 'ရှမ်းပြည်နယ် (အရှေ့)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            16 =>
            array (
                'id' => 18,
                'division_name' => 'Ayeyarwady',
                'division_name_mm' => 'ဧရာဝတီတိုင်းဒေသကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            17 =>
            array (
                'id' => 19,
                'division_name' => 'Nay Pyi Taw',
                'division_name_mm' => 'နေပြည်တော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:23:32',
                'updated_at' => '2022-09-29 09:23:32',
            ),
            // 18 =>
            // array (
            //     'id' => 20,
            //     'division_name' => 'Bago',
            //     'division_name_mm' => 'ပဲခူးတိုင်းဒေသကြီး',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:23:32',
            //     'updated_at' => '2022-09-29 09:23:32',
            // ),
            // 19 =>
            // array (
            //     'id' => 21,
            //     'division_name' => 'Shan',
            //     'division_name_mm' => 'ရှမ်းပြည်နယ်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:23:33',
            //     'updated_at' => '2022-09-29 09:23:33',
            // ),
        //     20 =>
        //     array (
        //         'id' => 22,
        //         'division_name' => 'Naga Self-Administered Zone',
        //         'division_name_mm' => 'နာဂကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        //     21 =>
        //     array (
        //         'id' => 23,
        //         'division_name' => 'Danu Self-Administered Zone',
        //         'division_name_mm' => 'ဓနု ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        //     22 =>
        //     array (
        //         'id' => 24,
        //         'division_name' => 'Pa-O Self-Administered Zone',
        //         'division_name_mm' => 'ပအိုဝ်း ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        //     23 =>
        //     array (
        //         'id' => 25,
        //         'division_name' => 'Pa Laung Self-Administered Zone',
        //         'division_name_mm' => 'ပလောင် ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        //     24 =>
        //     array (
        //         'id' => 26,
        //         'division_name' => 'Kokang Self-Administered Zone',
        //         'division_name_mm' => 'ကိုးကန့် ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရဒေသ',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        //     25 =>
        //     array (
        //         'id' => 27,
        //         'division_name' => 'Wa Self-Administered Division',
        //         'division_name_mm' => 'ဝ ကိုယ်ပိုင်အုပ်ချုပ်ခွင့်ရတိုင်း',
        //         'del_status' => 'none',
        //         'created_at' => '2022-09-29 09:23:33',
        //         'updated_at' => '2022-09-29 09:23:33',
        //     ),
        ));


    }
}
