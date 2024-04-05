<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblDistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tbl_districts')->delete();

        \DB::table('tbl_districts')->insert(array (
            0 =>
            array (
                'id' => 28,
                'division_id' => 2,
                'district_name' => 'Myitkyina',
                'district_name_mm' => 'မြစ်ကြီးနားခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            // 1 =>
            // array (
            //     'id' => 29,
            //     'division_id' => 2,
            //     'district_name' => 'Mohnyin',
            //     'district_name_mm' => 'မိုးညှင်းခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            // 2 =>
            // array (
            //     'id' => 30,
            //     'division_id' => 2,
            //     'district_name' => 'Bhamo',
            //     'district_name_mm' => 'ဗန်းမော်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            // 3 =>
            // array (
            //     'id' => 31,
            //     'division_id' => 2,
            //     'district_name' => 'Puta-O',
            //     'district_name_mm' => 'ပူတာအိုခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            4 =>
            array (
                'id' => 32,
                'division_id' => 3,
                'district_name' => 'Loikaw',
                'district_name_mm' => 'လွိုင်ကော်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            5 =>
            array (
                'id' => 33,
                'division_id' => 3,
                'district_name' => 'Bawlake',
                'district_name_mm' => 'ဘောလခဲခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            6 =>
            array (
                'id' => 34,
                'division_id' => 4,
                'district_name' => 'Hpa-An',
                'district_name_mm' => 'ဘားအံခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            // 7 =>
            // array (
            //     'id' => 35,
            //     'division_id' => 4,
            //     'district_name' => 'Myawaddy',
            //     'district_name_mm' => 'မြဝတီခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            // 8 =>
            // array (
            //     'id' => 36,
            //     'division_id' => 4,
            //     'district_name' => 'Kawkareik',
            //     'district_name_mm' => 'ကော့ကရိတ်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            // 9 =>
            // array (
            //     'id' => 37,
            //     'division_id' => 4,
            //     'district_name' => 'Hpapun',
            //     'district_name_mm' => 'ဖာပွန်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:18',
            //     'updated_at' => '2022-09-29 09:25:18',
            // ),
            10 =>
            array (
                'id' => 38,
                'division_id' => 5,
                'district_name' => 'Falam',
                'district_name_mm' => 'ဖလမ်းခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            11 =>
            array (
                'id' => 39,
                'division_id' => 5,
                'district_name' => 'Mindat',
                'district_name_mm' => 'မင်းတပ်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:18',
                'updated_at' => '2022-09-29 09:25:18',
            ),
            12 =>
            array (
                'id' => 40,
                'division_id' => 5,
                'district_name' => 'Hakha',
                'district_name_mm' => 'ဟားခါးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            13 =>
            array (
                'id' => 41,
                'division_id' => 5,
                'district_name' => 'Matupi',
                'district_name_mm' => 'မတူပီခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            14 =>
            array (
                'id' => 42,
                'division_id' => 6,
                'district_name' => 'Sagaing',
                'district_name_mm' => 'စစ်ကိုင်းခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 15 =>
            // array (
            //     'id' => 43,
            //     'division_id' => 6,
            //     'district_name' => 'Shwebo',
            //     'district_name_mm' => 'ရွှေဘိုခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            16 =>
            array (
                'id' => 44,
                'division_id' => 6,
                'district_name' => 'Monywa',
                'district_name_mm' => 'မုံရွာခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 17 =>
            // array (
            //     'id' => 45,
            //     'division_id' => 6,
            //     'district_name' => 'Katha',
            //     'district_name_mm' => 'ကသာခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 18 =>
            // array (
            //     'id' => 46,
            //     'division_id' => 6,
            //     'district_name' => 'Kale',
            //     'district_name_mm' => 'ကလေးခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 19 =>
            // array (
            //     'id' => 47,
            //     'division_id' => 6,
            //     'district_name' => 'Tamu',
            //     'district_name_mm' => 'တမူးခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 20 =>
            // array (
            //     'id' => 48,
            //     'division_id' => 6,
            //     'district_name' => 'Mawlaik',
            //     'district_name_mm' => 'မော်လိုက်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 21 =>
            // array (
            //     'id' => 49,
            //     'division_id' => 6,
            //     'district_name' => 'Hkamti',
            //     'district_name_mm' => 'ခန္တီးခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 22 =>
            // array (
            //     'id' => 50,
            //     'division_id' => 6,
            //     'district_name' => 'Yinmarbin',
            //     'district_name_mm' => 'ယင်းမာပင်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 23 =>
            // array (
            //     'id' => 51,
            //     'division_id' => 6,
            //     'district_name' => 'Kanbalu',
            //     'district_name_mm' => 'ကန့်ဘလူခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 24 =>
            // array (
            //     'id' => 52,
            //     'division_id' => 6,
            //     'district_name' => 'Kawlin',
            //     'district_name_mm' => 'ကောလင်းခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            25 =>
            array (
                'id' => 53,
                'division_id' => 7,
                'district_name' => 'Dawei',
                'district_name_mm' => 'ထားဝယ်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            26 =>
            array (
                'id' => 54,
                'division_id' => 7,
                'district_name' => 'Myeik',
                'district_name_mm' => 'မြိတ်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 27 =>
            // array (
            //     'id' => 55,
            //     'division_id' => 7,
            //     'district_name' => 'Kawthoung',
            //     'district_name_mm' => 'ကော့သောင်းခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            28 =>
            array (
                'id' => 56,
                'division_id' => 8,
                'district_name' => 'Bago',
                'district_name_mm' => 'ပဲခူးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 29 =>
            // array (
            //     'id' => 57,
            //     'division_id' => 8,
            //     'district_name' => 'Taungoo',
            //     'district_name_mm' => 'တောင်ငူခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            30 =>
            array (
                'id' => 58,
                'division_id' => 9,
                'district_name' => 'Pyay',
                'district_name_mm' => 'ပြည်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 31 =>
            // array (
            //     'id' => 59,
            //     'division_id' => 9,
            //     'district_name' => 'Thayarwady',
            //     'district_name_mm' => 'သာယာဝတီခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            32 =>
            array (
                'id' => 60,
                'division_id' => 10,
                'district_name' => 'Magway',
                'district_name_mm' => 'မကွေးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            33 =>
            array (
                'id' => 61,
                'division_id' => 10,
                'district_name' => 'Minbu',
                'district_name_mm' => 'မင်းဘူးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:19',
                'updated_at' => '2022-09-29 09:25:19',
            ),
            // 34 =>
            // array (
            //     'id' => 62,
            //     'division_id' => 10,
            //     'district_name' => 'Thayet',
            //     'district_name_mm' => 'သရက်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 35 =>
            // array (
            //     'id' => 63,
            //     'division_id' => 10,
            //     'district_name' => 'Pakokku',
            //     'district_name_mm' => 'ပခုက္ကူခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:19',
            //     'updated_at' => '2022-09-29 09:25:19',
            // ),
            // 36 =>
            // array (
            //     'id' => 64,
            //     'division_id' => 10,
            //     'district_name' => 'Gangaw',
            //     'district_name_mm' => 'ဂန့်ဂေါခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            37 =>
            array (
                'id' => 65,
                'division_id' => 11,
                'district_name' => 'Mandalay',
                'district_name_mm' => 'မန္တလေးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            38 =>
            array (
                'id' => 66,
                'division_id' => 11,
                'district_name' => 'Pyinoolwin',
                'district_name_mm' => 'ပြင်ဦးလွင်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            // 39 =>
            // array (
            //     'id' => 67,
            //     'division_id' => 11,
            //     'district_name' => 'Kyaukse',
            //     'district_name_mm' => 'ကျောက်ဆည်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 40 =>
            // array (
            //     'id' => 68,
            //     'division_id' => 11,
            //     'district_name' => 'Myingyan',
            //     'district_name_mm' => 'မြင်းခြံခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 41 =>
            // array (
            //     'id' => 69,
            //     'division_id' => 11,
            //     'district_name' => 'Nyaung-U',
            //     'district_name_mm' => 'ညောင်ဦးခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 42 =>
            // array (
            //     'id' => 70,
            //     'division_id' => 11,
            //     'district_name' => 'Yamethin',
            //     'district_name_mm' => 'ရမည်းသင်းခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            43 =>
            array (
                'id' => 71,
                'division_id' => 11,
                'district_name' => 'Meiktila',
                'district_name_mm' => 'မိတ္ထီလာခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            44 =>
            array (
                'id' => 72,
                'division_id' => 12,
                'district_name' => 'Mawlamyine',
                'district_name_mm' => 'မော်လမြိုင်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            45 =>
            array (
                'id' => 73,
                'division_id' => 12,
                'district_name' => 'Thaton',
                'district_name_mm' => 'သထုံခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            46 =>
            array (
                'id' => 74,
                'division_id' => 13,
                'district_name' => 'Sittwe',
                'district_name_mm' => 'စစ်တွေခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            47 =>
            array (
                'id' => 75,
                'division_id' => 13,
                'district_name' => 'Maungdaw',
                'district_name_mm' => 'မောင်တောခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            48 =>
            array (
                'id' => 76,
                'division_id' => 13,
                'district_name' => 'Kyaukpyu',
                'district_name_mm' => 'ကျောက်ဖြူခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            49 =>
            array (
                'id' => 77,
                'division_id' => 13,
                'district_name' => 'Thandwe',
                'district_name_mm' => 'သံတွဲခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            50 =>
            array (
                'id' => 78,
                'division_id' => 13,
                'district_name' => 'Mrauk-U',
                'district_name_mm' => 'မြောက်ဦးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            51 =>
            array (
                'id' => 79,
                'division_id' => 14,
            'district_name' => 'Yangon (North)',
            'district_name_mm' => 'ရန်ကုန်(မြောက်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            52 =>
            array (
                'id' => 80,
                'division_id' => 14,
            'district_name' => 'Yangon (East)',
            'district_name_mm' => 'ရန်ကုန်(အရှေ့ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            53 =>
            array (
                'id' => 81,
                'division_id' => 14,
            'district_name' => 'Yangon (South)',
            'district_name_mm' => 'ရန်ကုန်(တောင်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            54 =>
            array (
                'id' => 82,
                'division_id' => 14,
            'district_name' => 'Yangon (West)',
            'district_name_mm' => 'ရန်ကုန်(အနောက်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            55 =>
            array (
                'id' => 83,
                'division_id' => 15,
                'district_name' => 'Taunggyi',
                'district_name_mm' => 'တောင်ကြီးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            // 56 =>
            // array (
            //     'id' => 84,
            //     'division_id' => 15,
            //     'district_name' => 'Loilen',
            //     'district_name_mm' => 'လွိုင်လင်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 57 =>
            // array (
            //     'id' => 85,
            //     'division_id' => 15,
            //     'district_name' => 'Langkho',
            //     'district_name_mm' => 'လင်းခေးခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            58 =>
            array (
                'id' => 86,
                'division_id' => 16,
                'district_name' => 'Lashio',
                'district_name_mm' => 'လားရှိုးခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            59 =>
            array (
                'id' => 87,
                'division_id' => 16,
                'district_name' => 'Muse',
                'district_name_mm' => 'မူဆယ်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:20',
                'updated_at' => '2022-09-29 09:25:20',
            ),
            // 60 =>
            // array (
            //     'id' => 88,
            //     'division_id' => 16,
            //     'district_name' => 'Kyaukme',
            //     'district_name_mm' => 'ကျောက်မဲခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 61 =>
            // array (
            //     'id' => 89,
            //     'division_id' => 16,
            //     'district_name' => 'Kunlong',
            //     'district_name_mm' => 'ကွမ်းလုံခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 62 =>
            // array (
            //     'id' => 90,
            //     'division_id' => 16,
            //     'district_name' => 'Laukkaing',
            //     'district_name_mm' => 'လောက်ကိုင်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 63 =>
            // array (
            //     'id' => 91,
            //     'division_id' => 16,
            //     'district_name' => 'Hopang',
            //     'district_name_mm' => 'ဟိုပန်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 64 =>
            // array (
            //     'id' => 92,
            //     'division_id' => 16,
            //     'district_name' => 'Matman',
            //     'district_name_mm' => 'မက်မန်းခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 65 =>
            // array (
            //     'id' => 93,
            //     'division_id' => 16,
            //     'district_name' => 'Mongmit',
            //     'district_name_mm' => 'မိုးမိတ်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:20',
            //     'updated_at' => '2022-09-29 09:25:20',
            // ),
            // 66 =>
            // array (
            //     'id' => 94,
            //     'division_id' => 16,
            // 'district_name' => 'Laukkaing (Kokang SAZ)',
            // 'district_name_mm' => 'လောက်ကိုင်-ကိုးကန့်အထူးဒေသ (၁)',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 67 =>
            // array (
            //     'id' => 95,
            //     'division_id' => 16,
            // 'district_name' => 'Mong Maw (Wa SAD)',
            // 'district_name_mm' => 'မိုင်းမော-ဝအထူးဒေသ (၂)',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 68 =>
            // array (
            //     'id' => 96,
            //     'division_id' => 16,
            // 'district_name' => 'Wein Kawng (Wein Kao) (Wa SAD)',
            // 'district_name_mm' => 'ဝိန်းကောင်-ဝအထူးဒေသ (၂)',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 69 =>
            // array (
            //     'id' => 97,
            //     'division_id' => 17,
            //     'district_name' => 'Kengtung',
            //     'district_name_mm' => 'ကျိုင်းတုံခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 70 =>
            // array (
            //     'id' => 98,
            //     'division_id' => 17,
            //     'district_name' => 'Monghsat',
            //     'district_name_mm' => 'မိုင်းဆတ်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            71 =>
            array (
                'id' => 99,
                'division_id' => 17,
                'district_name' => 'Tachileik',
                'district_name_mm' => 'တာချီလိတ်ခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:21',
                'updated_at' => '2022-09-29 09:25:21',
            ),
            // 72 =>
            // array (
            //     'id' => 100,
            //     'division_id' => 17,
            //     'district_name' => 'Monghpyak',
            //     'district_name_mm' => 'မိုင်းဖြတ်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 73 =>
            // array (
            //     'id' => 101,
            //     'division_id' => 17,
            // 'district_name' => 'Mong Pawk (Wa SAD)',
            // 'district_name_mm' => 'မိုင်းပေါက်-ဝအထူးဒေသ (၂)',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 74 =>
            // array (
            //     'id' => 102,
            //     'division_id' => 18,
            //     'district_name' => 'Pathein',
            //     'district_name_mm' => 'ပုသိမ်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 75 =>
            // array (
            //     'id' => 103,
            //     'division_id' => 18,
            //     'district_name' => 'Hinthada',
            //     'district_name_mm' => 'ဟင်္သာတခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 76 =>
            // array (
            //     'id' => 104,
            //     'division_id' => 18,
            //     'district_name' => 'Myaungmya',
            //     'district_name_mm' => 'မြောင်းမြခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 77 =>
            // array (
            //     'id' => 105,
            //     'division_id' => 18,
            //     'district_name' => 'Labutta',
            //     'district_name_mm' => 'လပွတ္တာခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            // 78 =>
            // array (
            //     'id' => 106,
            //     'division_id' => 18,
            //     'district_name' => 'Maubin',
            //     'district_name_mm' => 'မအူပင်ခရိုင်',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:21',
            //     'updated_at' => '2022-09-29 09:25:21',
            // ),
            79 =>
            array (
                'id' => 107,
                'division_id' => 18,
                'district_name' => 'Pyapon',
                'district_name_mm' => 'ဖျာပုံခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:21',
                'updated_at' => '2022-09-29 09:25:21',
            ),
            80 =>
            array (
                'id' => 108,
                'division_id' => 19,
                'district_name' => 'Oke Ta Ra',
                'district_name_mm' => 'ဥတ္တရခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:21',
                'updated_at' => '2022-09-29 09:25:21',
            ),
            81 =>
            array (
                'id' => 109,
                'division_id' => 19,
                'district_name' => 'Det Khi Na',
                'district_name_mm' => 'ဒက္ခိဏခရိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:21',
                'updated_at' => '2022-09-29 09:25:21',
            ),
        ));


    }
}
