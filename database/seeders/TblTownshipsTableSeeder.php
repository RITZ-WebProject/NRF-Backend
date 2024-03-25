<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TblTownshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('tbl_townships')->delete();

        \DB::table('tbl_townships')->insert(array (
            0 =>
            array (
                'id' => 110,
                'district_id' => 107,
                'township_name' => 'Bogale',
                'township_name_mm' => 'ဘိုကလေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            1 =>
            array (
                'id' => 111,
                'district_id' => 106,
                'township_name' => 'Danubyu',
                'township_name_mm' => 'ဓနုဖြူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            2 =>
            array (
                'id' => 112,
                'district_id' => 107,
                'township_name' => 'Dedaye',
                'township_name_mm' => 'ဒေးဒရဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            3 =>
            array (
                'id' => 113,
                'district_id' => 104,
                'township_name' => 'Einme',
                'township_name_mm' => 'အိမ်မဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            4 =>
            array (
                'id' => 114,
                'district_id' => 103,
                'township_name' => 'Hinthada',
                'township_name_mm' => 'ဟင်္သာတ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            5 =>
            array (
                'id' => 115,
                'district_id' => 103,
                'township_name' => 'Ingapu',
                'township_name_mm' => 'အင်္ဂပူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            6 =>
            array (
                'id' => 116,
                'district_id' => 102,
                'township_name' => 'Kangyidaunt',
                'township_name_mm' => 'ကန်ကြီးထောင့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            7 =>
            array (
                'id' => 117,
                'district_id' => 107,
                'township_name' => 'Kyaiklat',
                'township_name_mm' => 'ကျိုက်လတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            8 =>
            array (
                'id' => 118,
                'district_id' => 103,
                'township_name' => 'Kyangin',
                'township_name_mm' => 'ကြံခင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            9 =>
            array (
                'id' => 119,
                'district_id' => 102,
                'township_name' => 'Kyaunggon',
                'township_name_mm' => 'ကျောင်းကုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            10 =>
            array (
                'id' => 120,
                'district_id' => 102,
                'township_name' => 'Kyonpyaw',
                'township_name_mm' => 'ကျုံပျော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            11 =>
            array (
                'id' => 121,
                'district_id' => 105,
                'township_name' => 'Labutta',
                'township_name_mm' => 'လပွတ္တာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            12 =>
            array (
                'id' => 122,
                'district_id' => 103,
                'township_name' => 'Lemyethna',
                'township_name_mm' => 'လေးမျက်နှာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            13 =>
            array (
                'id' => 123,
                'district_id' => 106,
                'township_name' => 'Maubin',
                'township_name_mm' => 'မအူပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            14 =>
            array (
                'id' => 124,
                'district_id' => 105,
                'township_name' => 'Mawlamyinegyun',
                'township_name_mm' => 'မော်လမြိုင်ကျွန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            15 =>
            array (
                'id' => 125,
                'district_id' => 103,
                'township_name' => 'Myanaung',
                'township_name_mm' => 'မြန်အောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            16 =>
            array (
                'id' => 126,
                'district_id' => 104,
                'township_name' => 'Myaungmya',
                'township_name_mm' => 'မြောင်းမြ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            17 =>
            array (
                'id' => 127,
                'district_id' => 102,
                'township_name' => 'Ngapudaw',
                'township_name_mm' => 'ငပုတော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            18 =>
            array (
                'id' => 128,
                'district_id' => 106,
                'township_name' => 'Nyaungdon',
                'township_name_mm' => 'ညောင်တုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            19 =>
            array (
                'id' => 129,
                'district_id' => 106,
                'township_name' => 'Pantanaw',
                'township_name_mm' => 'ပန်းတနော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            20 =>
            array (
                'id' => 130,
                'district_id' => 102,
                'township_name' => 'Pathein',
                'township_name_mm' => 'ပုသိမ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            21 =>
            array (
                'id' => 131,
                'district_id' => 107,
                'township_name' => 'Pyapon',
                'township_name_mm' => 'ဖျာပုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            22 =>
            array (
                'id' => 132,
                'district_id' => 102,
                'township_name' => 'Thabaung',
                'township_name_mm' => 'သာပေါင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            23 =>
            array (
                'id' => 133,
                'district_id' => 104,
                'township_name' => 'Wakema',
                'township_name_mm' => 'ဝါးခယ်မ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            24 =>
            array (
                'id' => 134,
                'district_id' => 102,
                'township_name' => 'Yegyi',
                'township_name_mm' => 'ရေကြည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:49',
                'updated_at' => '2022-09-29 09:25:49',
            ),
            25 =>
            array (
                'id' => 135,
                'district_id' => 103,
                'township_name' => 'Zalun',
                'township_name_mm' => 'ဇလွန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            26 =>
            array (
                'id' => 136,
                'district_id' => 56,
                'township_name' => 'Bago',
                'township_name_mm' => 'ပဲခူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            27 =>
            array (
                'id' => 137,
                'district_id' => 56,
                'township_name' => 'Daik-U',
                'township_name_mm' => 'ဒိုက်ဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            28 =>
            array (
                'id' => 138,
                'district_id' => 57,
                'township_name' => 'Htantabin',
                'township_name_mm' => 'ထန်းတပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            29 =>
            array (
                'id' => 139,
                'district_id' => 56,
                'township_name' => 'Kawa',
                'township_name_mm' => 'ကဝ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            30 =>
            array (
                'id' => 140,
                'district_id' => 57,
                'township_name' => 'Kyaukkyi',
                'township_name_mm' => 'ကျောက်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            31 =>
            array (
                'id' => 141,
                'district_id' => 56,
                'township_name' => 'Kyauktaga',
                'township_name_mm' => 'ကျောက်တံခါး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            32 =>
            array (
                'id' => 142,
                'district_id' => 56,
                'township_name' => 'Nyaunglebin',
                'township_name_mm' => 'ညောင်လေးပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            33 =>
            array (
                'id' => 143,
                'district_id' => 57,
                'township_name' => 'Oktwin',
                'township_name_mm' => 'အုတ်တွင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            34 =>
            array (
                'id' => 144,
                'district_id' => 57,
                'township_name' => 'Phyu',
                'township_name_mm' => 'ဖြူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            35 =>
            array (
                'id' => 145,
                'district_id' => 56,
                'township_name' => 'Shwegyin',
                'township_name_mm' => 'ရွှေကျင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            36 =>
            array (
                'id' => 146,
                'district_id' => 57,
                'township_name' => 'Taungoo',
                'township_name_mm' => 'တောင်ငူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            37 =>
            array (
                'id' => 147,
                'district_id' => 56,
                'township_name' => 'Thanatpin',
                'township_name_mm' => 'သနပ်ပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            38 =>
            array (
                'id' => 148,
                'district_id' => 56,
                'township_name' => 'Waw',
                'township_name_mm' => 'ဝေါ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            39 =>
            array (
                'id' => 149,
                'district_id' => 57,
                'township_name' => 'Yedashe',
                'township_name_mm' => 'ရေတာရှည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            40 =>
            array (
                'id' => 150,
                'district_id' => 59,
                'township_name' => 'Gyobingauk',
                'township_name_mm' => 'ကြို့ပင်ကောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            41 =>
            array (
                'id' => 151,
                'district_id' => 59,
                'township_name' => 'Letpadan',
                'township_name_mm' => 'လက်ပံတန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            42 =>
            array (
                'id' => 152,
                'district_id' => 59,
                'township_name' => 'Minhla',
                'township_name_mm' => 'မင်းလှ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            43 =>
            array (
                'id' => 153,
                'district_id' => 59,
                'township_name' => 'Monyo',
                'township_name_mm' => 'မိုးညို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            44 =>
            array (
                'id' => 154,
                'district_id' => 59,
                'township_name' => 'Nattalin',
                'township_name_mm' => 'နတ်တလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            45 =>
            array (
                'id' => 155,
                'district_id' => 59,
                'township_name' => 'Okpho',
                'township_name_mm' => 'အုတ်ဖို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            46 =>
            array (
                'id' => 156,
                'district_id' => 58,
                'township_name' => 'Padaung',
                'township_name_mm' => 'ပန်းတောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            47 =>
            array (
                'id' => 157,
                'district_id' => 58,
                'township_name' => 'Paukkhaung',
                'township_name_mm' => 'ပေါက်ခေါင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            48 =>
            array (
                'id' => 158,
                'district_id' => 58,
                'township_name' => 'Paungde',
                'township_name_mm' => 'ပေါင်းတည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            49 =>
            array (
                'id' => 159,
                'district_id' => 58,
                'township_name' => 'Pyay',
                'township_name_mm' => 'ပြည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            50 =>
            array (
                'id' => 160,
                'district_id' => 58,
                'township_name' => 'Shwedaung',
                'township_name_mm' => 'ရွှေတောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            51 =>
            array (
                'id' => 161,
                'district_id' => 59,
                'township_name' => 'Thayarwady',
                'township_name_mm' => 'သာယာဝတီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            52 =>
            array (
                'id' => 162,
                'district_id' => 58,
                'township_name' => 'Thegon',
                'township_name_mm' => 'သဲကုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            53 =>
            array (
                'id' => 163,
                'district_id' => 59,
                'township_name' => 'Zigon',
                'township_name_mm' => 'ဇီးကုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            54 =>
            array (
                'id' => 164,
                'district_id' => 38,
                'township_name' => 'Falam',
                'township_name_mm' => 'ဖလမ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            55 =>
            array (
                'id' => 165,
                'district_id' => 40,
                'township_name' => 'Hakha',
                'township_name_mm' => 'ဟားခါး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            56 =>
            array (
                'id' => 166,
                'district_id' => 39,
                'township_name' => 'Kanpetlet',
                'township_name_mm' => 'ကန်ပက်လက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            57 =>
            array (
                'id' => 167,
                'district_id' => 41,
                'township_name' => 'Matupi',
                'township_name_mm' => 'မတူပီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            58 =>
            array (
                'id' => 168,
                'district_id' => 39,
                'township_name' => 'Mindat',
                'township_name_mm' => 'မင်းတပ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            59 =>
            array (
                'id' => 169,
                'district_id' => 41,
                'township_name' => 'Paletwa',
                'township_name_mm' => 'ပလက်ဝ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            60 =>
            array (
                'id' => 170,
                'district_id' => 38,
                'township_name' => 'Tedim',
                'township_name_mm' => 'တီးတိန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            61 =>
            array (
                'id' => 171,
                'district_id' => 40,
                'township_name' => 'Thantlang',
                'township_name_mm' => 'ထန်တလန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            62 =>
            array (
                'id' => 172,
                'district_id' => 38,
                'township_name' => 'Tonzang',
                'township_name_mm' => 'တွန်းဇန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            63 =>
            array (
                'id' => 173,
                'district_id' => 30,
                'township_name' => 'Bhamo',
                'township_name_mm' => 'ဗန်းမော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            64 =>
            array (
                'id' => 174,
                'district_id' => 28,
                'township_name' => 'Chipwi',
                'township_name_mm' => 'ချီ​ဖွေ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:34',
                'updated_at' => '2022-09-29 09:25:34',
            ),
            65 =>
            array (
                'id' => 175,
                'district_id' => 29,
                'township_name' => 'Hpakant',
                'township_name_mm' => 'ဖားကန့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            66 =>
            array (
                'id' => 176,
                'district_id' => 28,
                'township_name' => 'Injangyang',
                'township_name_mm' => 'အင်ဂျန်းယန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            67 =>
            array (
                'id' => 177,
                'district_id' => 31,
                'township_name' => 'Khaunglanhpu',
                'township_name_mm' => 'ခေါင်လန်ဖူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            68 =>
            array (
                'id' => 178,
                'district_id' => 31,
                'township_name' => 'Machanbaw',
                'township_name_mm' => 'မချမ်းဘော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            69 =>
            array (
                'id' => 179,
                'district_id' => 30,
                'township_name' => 'Mansi',
                'township_name_mm' => 'မံစီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            70 =>
            array (
                'id' => 180,
                'district_id' => 29,
                'township_name' => 'Mogaung',
                'township_name_mm' => 'မိုးကောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            71 =>
            array (
                'id' => 181,
                'district_id' => 29,
                'township_name' => 'Mohnyin',
                'township_name_mm' => 'မိုးညှင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            72 =>
            array (
                'id' => 182,
                'district_id' => 30,
                'township_name' => 'Momauk',
                'township_name_mm' => 'မိုးမောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            73 =>
            array (
                'id' => 183,
                'district_id' => 28,
                'township_name' => 'Myitkyina',
                'township_name_mm' => 'မြစ်ကြီးနား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            74 =>
            array (
                'id' => 184,
                'district_id' => 31,
                'township_name' => 'Nawngmun',
                'township_name_mm' => 'နောင်မွန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            75 =>
            array (
                'id' => 185,
                'district_id' => 31,
                'township_name' => 'Puta-O',
                'township_name_mm' => 'ပူတာအို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            76 =>
            array (
                'id' => 186,
                'district_id' => 30,
                'township_name' => 'Shwegu',
                'township_name_mm' => 'ရွှေကူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            77 =>
            array (
                'id' => 187,
                'district_id' => 31,
                'township_name' => 'Sumprabum',
                'township_name_mm' => 'ဆွမ်ပရာဘွမ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            78 =>
            array (
                'id' => 188,
                'district_id' => 28,
                'township_name' => 'Tanai',
                'township_name_mm' => 'တနိုင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            79 =>
            array (
                'id' => 189,
                'district_id' => 28,
                'township_name' => 'Tsawlaw',
                'township_name_mm' => 'ဆော့လော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            80 =>
            array (
                'id' => 190,
                'district_id' => 28,
                'township_name' => 'Waingmaw',
                'township_name_mm' => 'ဝိုင်းမော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            81 =>
            array (
                'id' => 191,
                'district_id' => 33,
                'township_name' => 'Bawlake',
                'township_name_mm' => 'ဘောလခဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            82 =>
            array (
                'id' => 192,
                'district_id' => 32,
                'township_name' => 'Demoso',
                'township_name_mm' => 'ဒီးမော့ဆို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            83 =>
            array (
                'id' => 193,
                'district_id' => 33,
                'township_name' => 'Hpasawng',
                'township_name_mm' => 'ဖားဆောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            84 =>
            array (
                'id' => 194,
                'district_id' => 32,
                'township_name' => 'Hpruso',
                'township_name_mm' => 'ဖရူဆို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:35',
                'updated_at' => '2022-09-29 09:25:35',
            ),
            85 =>
            array (
                'id' => 195,
                'district_id' => 32,
                'township_name' => 'Loikaw',
                'township_name_mm' => 'လွိုင်ကော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            86 =>
            array (
                'id' => 196,
                'district_id' => 33,
                'township_name' => 'Mese',
                'township_name_mm' => 'မယ်စဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            87 =>
            array (
                'id' => 197,
                'district_id' => 32,
                'township_name' => 'Shadaw',
                'township_name_mm' => 'ရှားတော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            88 =>
            array (
                'id' => 198,
                'district_id' => 34,
                'township_name' => 'Hlaingbwe',
                'township_name_mm' => 'လှိုင်းဘွဲ့',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            89 =>
            array (
                'id' => 199,
                'district_id' => 34,
                'township_name' => 'Hpa-An',
                'township_name_mm' => 'ဘားအံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            90 =>
            array (
                'id' => 200,
                'district_id' => 37,
                'township_name' => 'Hpapun',
                'township_name_mm' => 'ဖာပွန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            91 =>
            array (
                'id' => 201,
                'district_id' => 36,
                'township_name' => 'Kawkareik',
                'township_name_mm' => 'ကော့ကရိတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            92 =>
            array (
                'id' => 202,
                'district_id' => 36,
                'township_name' => 'Kyainseikgyi',
                'township_name_mm' => 'ကြာအင်းဆိပ်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            93 =>
            array (
                'id' => 203,
                'district_id' => 35,
                'township_name' => 'Myawaddy',
                'township_name_mm' => 'မြဝတီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            94 =>
            array (
                'id' => 204,
                'district_id' => 34,
                'township_name' => 'Thandaunggyi',
                'township_name_mm' => 'သံတောင်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
            95 =>
            array (
                'id' => 205,
                'district_id' => 62,
                'township_name' => 'Aunglan',
                'township_name_mm' => 'အောင်လံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            96 =>
            array (
                'id' => 206,
                'district_id' => 60,
                'township_name' => 'Chauk',
                'township_name_mm' => 'ချောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            97 =>
            array (
                'id' => 207,
                'district_id' => 64,
                'township_name' => 'Gangaw',
                'township_name_mm' => 'ဂန့်ဂေါ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            98 =>
            array (
                'id' => 208,
                'district_id' => 62,
                'township_name' => 'Kamma',
                'township_name_mm' => 'ကံမ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            99 =>
            array (
                'id' => 209,
                'district_id' => 60,
                'township_name' => 'Magway',
                'township_name_mm' => 'မကွေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            100 =>
            array (
                'id' => 210,
                'district_id' => 61,
                'township_name' => 'Minbu',
                'township_name_mm' => 'မင်းဘူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            101 =>
            array (
                'id' => 211,
                'district_id' => 62,
                'township_name' => 'Mindon',
                'township_name_mm' => 'မင်းတုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            102 =>
            array (
                'id' => 212,
                'district_id' => 62,
                'township_name' => 'Minhla',
                'township_name_mm' => 'မင်းလှ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            103 =>
            array (
                'id' => 213,
                'district_id' => 63,
                'township_name' => 'Myaing',
                'township_name_mm' => 'မြိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            104 =>
            array (
                'id' => 214,
                'district_id' => 60,
                'township_name' => 'Myothit',
                'township_name_mm' => 'မြို့သစ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            105 =>
            array (
                'id' => 215,
                'district_id' => 60,
                'township_name' => 'Natmauk',
                'township_name_mm' => 'နတ်မောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            106 =>
            array (
                'id' => 216,
                'district_id' => 61,
                'township_name' => 'Ngape',
                'township_name_mm' => 'ငဖဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            107 =>
            array (
                'id' => 217,
                'district_id' => 63,
                'township_name' => 'Pakokku',
                'township_name_mm' => 'ပခုက္ကူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            108 =>
            array (
                'id' => 218,
                'district_id' => 63,
                'township_name' => 'Pauk',
                'township_name_mm' => 'ပေါက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            109 =>
            array (
                'id' => 219,
                'district_id' => 61,
                'township_name' => 'Pwintbyu',
                'township_name_mm' => 'ပွင့်ဖြူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            110 =>
            array (
                'id' => 220,
                'district_id' => 61,
                'township_name' => 'Salin',
                'township_name_mm' => 'စလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            111 =>
            array (
                'id' => 221,
                'district_id' => 64,
                'township_name' => 'Saw',
                'township_name_mm' => 'ဆော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            112 =>
            array (
                'id' => 222,
                'district_id' => 63,
                'township_name' => 'Seikphyu',
                'township_name_mm' => 'ဆိပ်ဖြူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            113 =>
            array (
                'id' => 223,
                'district_id' => 61,
                'township_name' => 'Sidoktaya',
                'township_name_mm' => 'စေတုတ္ထရာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            114 =>
            array (
                'id' => 224,
                'district_id' => 62,
                'township_name' => 'Sinbaungwe',
                'township_name_mm' => 'ဆင်ပေါင်ဝဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            115 =>
            array (
                'id' => 225,
                'district_id' => 60,
                'township_name' => 'Taungdwingyi',
                'township_name_mm' => 'တောင်တွင်းကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            116 =>
            array (
                'id' => 226,
                'district_id' => 62,
                'township_name' => 'Thayet',
                'township_name_mm' => 'သရက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            117 =>
            array (
                'id' => 227,
                'district_id' => 64,
                'township_name' => 'Tilin',
                'township_name_mm' => 'ထီးလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            118 =>
            array (
                'id' => 228,
                'district_id' => 60,
                'township_name' => 'Yenangyaung',
                'township_name_mm' => 'ရေနံချောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:39',
                'updated_at' => '2022-09-29 09:25:39',
            ),
            119 =>
            array (
                'id' => 229,
                'district_id' => 63,
                'township_name' => 'Yesagyo',
                'township_name_mm' => 'ရေစကြို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            120 =>
            array (
                'id' => 230,
                'district_id' => 65,
                'township_name' => 'Amarapura',
                'township_name_mm' => 'အမရပူရ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            121 =>
            array (
                'id' => 231,
                'district_id' => 65,
                'township_name' => 'Aungmyaythazan',
                'township_name_mm' => 'အောင်မြေသာစံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            122 =>
            array (
                'id' => 232,
                'district_id' => 65,
                'township_name' => 'Chanayethazan',
                'township_name_mm' => 'ချမ်းအေးသာစံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            123 =>
            array (
                'id' => 233,
                'district_id' => 65,
                'township_name' => 'Chanmyathazi',
                'township_name_mm' => 'ချမ်းမြသာစည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            124 =>
            array (
                'id' => 234,
                'district_id' => 69,
                'township_name' => 'Kyaukpadaung',
                'township_name_mm' => 'ကျောက်ပန်းတောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            125 =>
            array (
                'id' => 235,
                'district_id' => 67,
                'township_name' => 'Kyaukse',
                'township_name_mm' => 'ကျောက်ဆည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            126 =>
            array (
                'id' => 236,
                'district_id' => 66,
                'township_name' => 'Madaya',
                'township_name_mm' => 'မတ္တရာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            127 =>
            array (
                'id' => 237,
                'district_id' => 65,
                'township_name' => 'Mahaaungmyay',
                'township_name_mm' => 'မဟာအောင်မြေ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            128 =>
            array (
                'id' => 238,
                'district_id' => 71,
                'township_name' => 'Mahlaing',
                'township_name_mm' => 'မလှိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            129 =>
            array (
                'id' => 239,
                'district_id' => 71,
                'township_name' => 'Meiktila',
                'township_name_mm' => 'မိတ္ထီလာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            130 =>
            array (
                'id' => 240,
                'district_id' => 66,
                'township_name' => 'Mogoke',
                'township_name_mm' => 'မိုးကုတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            131 =>
            array (
                'id' => 241,
                'district_id' => 68,
                'township_name' => 'Myingyan',
                'township_name_mm' => 'မြင်းခြံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            132 =>
            array (
                'id' => 242,
                'district_id' => 67,
                'township_name' => 'Myittha',
                'township_name_mm' => 'မြစ်သား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            133 =>
            array (
                'id' => 243,
                'district_id' => 68,
                'township_name' => 'Natogyi',
                'township_name_mm' => 'နွားထိုးကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            134 =>
            array (
                'id' => 244,
                'district_id' => 68,
                'township_name' => 'Ngazun',
                'township_name_mm' => 'ငါန်းဇွန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            135 =>
            array (
                'id' => 245,
                'district_id' => 69,
                'township_name' => 'Nyaung-U',
                'township_name_mm' => 'ညောင်ဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            136 =>
            array (
                'id' => 246,
                'district_id' => 65,
                'township_name' => 'Patheingyi',
                'township_name_mm' => 'ပုသိမ်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            137 =>
            array (
                'id' => 247,
                'district_id' => 70,
                'township_name' => 'Pyawbwe',
                'township_name_mm' => 'ပျော်ဘွယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            138 =>
            array (
                'id' => 248,
                'district_id' => 65,
                'township_name' => 'Pyigyitagon',
                'township_name_mm' => 'ပြည်ကြီးတံခွန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:40',
                'updated_at' => '2022-09-29 09:25:40',
            ),
            139 =>
            array (
                'id' => 249,
                'district_id' => 66,
                'township_name' => 'Pyinoolwin',
                'township_name_mm' => 'ပြင်ဦးလွင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            140 =>
            array (
                'id' => 250,
                'district_id' => 66,
                'township_name' => 'Singu',
                'township_name_mm' => 'စဉ့်ကူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            141 =>
            array (
                'id' => 251,
                'district_id' => 67,
                'township_name' => 'Sintgaing',
                'township_name_mm' => 'စဉ့်ကိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            142 =>
            array (
                'id' => 252,
                'district_id' => 67,
                'township_name' => 'Tada-U',
                'township_name_mm' => 'တံတားဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            143 =>
            array (
                'id' => 253,
                'district_id' => 68,
                'township_name' => 'Taungtha',
                'township_name_mm' => 'တောင်သာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            144 =>
            array (
                'id' => 254,
                'district_id' => 66,
                'township_name' => 'Thabeikkyin',
                'township_name_mm' => 'သပိတ်ကျင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:41',
                'updated_at' => '2022-09-29 09:25:41',
            ),
            145 =>
            array (
                'id' => 255,
                'district_id' => 71,
                'township_name' => 'Thazi',
                'township_name_mm' => 'သာစည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            146 =>
            array (
                'id' => 256,
                'district_id' => 71,
                'township_name' => 'Wundwin',
                'township_name_mm' => 'ဝမ်းတွင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            147 =>
            array (
                'id' => 257,
                'district_id' => 70,
                'township_name' => 'Yamethin',
                'township_name_mm' => 'ရမည်းသင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            148 =>
            array (
                'id' => 258,
                'district_id' => 73,
                'township_name' => 'Bilin',
                'township_name_mm' => 'ဘီးလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            149 =>
            array (
                'id' => 259,
                'district_id' => 72,
                'township_name' => 'Chaungzon',
                'township_name_mm' => 'ချောင်းဆုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            150 =>
            array (
                'id' => 260,
                'district_id' => 72,
                'township_name' => 'Kyaikmaraw',
                'township_name_mm' => 'ကျိုက်မရော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            151 =>
            array (
                'id' => 261,
                'district_id' => 73,
                'township_name' => 'Kyaikto',
                'township_name_mm' => 'ကျိုက်ထို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            152 =>
            array (
                'id' => 262,
                'district_id' => 72,
                'township_name' => 'Mawlamyine',
                'township_name_mm' => 'မော်လမြိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            153 =>
            array (
                'id' => 263,
                'district_id' => 72,
                'township_name' => 'Mudon',
                'township_name_mm' => 'မုဒုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            154 =>
            array (
                'id' => 264,
                'district_id' => 73,
                'township_name' => 'Paung',
                'township_name_mm' => 'ပေါင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            155 =>
            array (
                'id' => 265,
                'district_id' => 72,
                'township_name' => 'Thanbyuzayat',
                'township_name_mm' => 'သံဖြူဇရပ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            156 =>
            array (
                'id' => 266,
                'district_id' => 73,
                'township_name' => 'Thaton',
                'township_name_mm' => 'သထုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            157 =>
            array (
                'id' => 267,
                'district_id' => 72,
                'township_name' => 'Ye',
                'township_name_mm' => 'ရေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:42',
                'updated_at' => '2022-09-29 09:25:42',
            ),
            158 =>
            array (
                'id' => 268,
                'district_id' => 109,
                'township_name' => 'Det Khi Na Thi Ri',
                'township_name_mm' => 'ဒက္ခိဏသီရိ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            159 =>
            array (
                'id' => 269,
                'district_id' => 109,
                'township_name' => 'Lewe',
                'township_name_mm' => 'လယ်ဝေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            160 =>
            array (
                'id' => 270,
                'district_id' => 108,
                'township_name' => 'Oke Ta Ra Thi Ri',
                'township_name_mm' => 'ဥတ္တရသီရိ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:50',
                'updated_at' => '2022-09-29 09:25:50',
            ),
            161 =>
            array (
                'id' => 271,
                'district_id' => 108,
                'township_name' => 'Poke Ba Thi Ri',
                'township_name_mm' => 'ပုဗ္ဗသီရိ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            162 =>
            array (
                'id' => 272,
                'district_id' => 109,
                'township_name' => 'Pyinmana',
                'township_name_mm' => 'ပျဉ်းမနား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            163 =>
            array (
                'id' => 273,
                'district_id' => 108,
                'township_name' => 'Tatkon',
                'township_name_mm' => 'တပ်ကုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            164 =>
            array (
                'id' => 274,
                'district_id' => 109,
                'township_name' => 'Za Bu Thi Ri',
                'township_name_mm' => 'ဇမ္ဗူသီရိ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            165 =>
            array (
                'id' => 275,
                'district_id' => 108,
                'township_name' => 'Zay Yar Thi Ri',
                'township_name_mm' => 'ဇေယျာသီရိ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:51',
                'updated_at' => '2022-09-29 09:25:51',
            ),
            166 =>
            array (
                'id' => 276,
                'district_id' => 76,
                'township_name' => 'Ann',
                'township_name_mm' => 'အမ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            167 =>
            array (
                'id' => 277,
                'district_id' => 75,
                'township_name' => 'Buthidaung',
                'township_name_mm' => 'ဘူးသီးတောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            168 =>
            array (
                'id' => 278,
                'district_id' => 77,
                'township_name' => 'Gwa',
                'township_name_mm' => 'ဂွ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            169 =>
            array (
                'id' => 279,
                'district_id' => 76,
                'township_name' => 'Kyaukpyu',
                'township_name_mm' => 'ကျောက်ဖြူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            170 =>
            array (
                'id' => 280,
                'district_id' => 78,
                'township_name' => 'Kyauktaw',
                'township_name_mm' => 'ကျောက်တော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            171 =>
            array (
                'id' => 281,
                'district_id' => 75,
                'township_name' => 'Maungdaw',
                'township_name_mm' => 'မောင်တော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            172 =>
            array (
                'id' => 282,
                'district_id' => 78,
                'township_name' => 'Minbya',
                'township_name_mm' => 'မင်းပြား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            173 =>
            array (
                'id' => 283,
                'district_id' => 78,
                'township_name' => 'Mrauk-U',
                'township_name_mm' => 'မြောက်ဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            174 =>
            array (
                'id' => 284,
                'district_id' => 76,
                'township_name' => 'Munaung',
                'township_name_mm' => 'မာန်အောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            175 =>
            array (
                'id' => 285,
                'district_id' => 78,
                'township_name' => 'Myebon',
                'township_name_mm' => 'မြေပုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            176 =>
            array (
                'id' => 286,
                'district_id' => 74,
                'township_name' => 'Pauktaw',
                'township_name_mm' => 'ပေါက်တော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            177 =>
            array (
                'id' => 287,
                'district_id' => 74,
                'township_name' => 'Ponnagyun',
                'township_name_mm' => 'ပုဏ္ဏားကျွန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            178 =>
            array (
                'id' => 288,
                'district_id' => 76,
                'township_name' => 'Ramree',
                'township_name_mm' => 'ရမ်းဗြဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            179 =>
            array (
                'id' => 289,
                'district_id' => 74,
                'township_name' => 'Rathedaung',
                'township_name_mm' => 'ရသေ့တောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            180 =>
            array (
                'id' => 290,
                'district_id' => 74,
                'township_name' => 'Sittwe',
                'township_name_mm' => 'စစ်တွေ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            181 =>
            array (
                'id' => 291,
                'district_id' => 77,
                'township_name' => 'Thandwe',
                'township_name_mm' => 'သံတွဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            182 =>
            array (
                'id' => 292,
                'district_id' => 77,
                'township_name' => 'Toungup',
                'township_name_mm' => 'တောင်ကုတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            183 =>
            array (
                'id' => 293,
                'district_id' => 44,
                'township_name' => 'Ayadaw',
                'township_name_mm' => 'အရာတော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            184 =>
            array (
                'id' => 294,
                'district_id' => 45,
                'township_name' => 'Banmauk',
                'township_name_mm' => 'ဗန်းမောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            185 =>
            array (
                'id' => 295,
                'district_id' => 44,
                'township_name' => 'Budalin',
                'township_name_mm' => 'ဘုတလင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            186 =>
            array (
                'id' => 296,
                'district_id' => 44,
                'township_name' => 'Chaung-U',
                'township_name_mm' => 'ချောင်းဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            187 =>
            array (
                'id' => 297,
                'district_id' => 49,
                'township_name' => 'Hkamti',
                'township_name_mm' => 'ခန္တီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            188 =>
            array (
                'id' => 298,
                'district_id' => 49,
                'township_name' => 'Homalin',
                'township_name_mm' => 'ဟုမ္မလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            189 =>
            array (
                'id' => 299,
                'district_id' => 45,
                'township_name' => 'Indaw',
                'township_name_mm' => 'အင်းတော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            190 =>
            array (
                'id' => 300,
                'district_id' => 46,
                'township_name' => 'Kale',
                'township_name_mm' => 'ကလေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            191 =>
            array (
                'id' => 301,
                'district_id' => 46,
                'township_name' => 'Kalewa',
                'township_name_mm' => 'ကလေးဝ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            192 =>
            array (
                'id' => 302,
                'district_id' => 51,
                'township_name' => 'Kanbalu',
                'township_name_mm' => 'ကန့်ဘလူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            193 =>
            array (
                'id' => 303,
                'district_id' => 50,
                'township_name' => 'Kani',
                'township_name_mm' => 'ကနီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            194 =>
            array (
                'id' => 304,
                'district_id' => 45,
                'township_name' => 'Katha',
                'township_name_mm' => 'ကသာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            195 =>
            array (
                'id' => 305,
                'district_id' => 52,
                'township_name' => 'Kawlin',
                'township_name_mm' => 'ကောလင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            196 =>
            array (
                'id' => 306,
                'district_id' => 43,
                'township_name' => 'Khin-U',
                'township_name_mm' => 'ခင်ဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            197 =>
            array (
                'id' => 307,
                'district_id' => 51,
                'township_name' => 'Kyunhla',
                'township_name_mm' => 'ကျွန်းလှ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            198 =>
            array (
                'id' => 310,
                'district_id' => 48,
                'township_name' => 'Mawlaik',
                'township_name_mm' => 'မော်လိုက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            199 =>
            array (
                'id' => 311,
                'district_id' => 46,
                'township_name' => 'Mingin',
                'township_name_mm' => 'မင်းကင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            200 =>
            array (
                'id' => 312,
                'district_id' => 44,
                'township_name' => 'Monywa',
                'township_name_mm' => 'မုံရွာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            201 =>
            array (
                'id' => 313,
                'district_id' => 42,
                'township_name' => 'Myaung',
                'township_name_mm' => 'မြောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            202 =>
            array (
                'id' => 314,
                'district_id' => 42,
                'township_name' => 'Myinmu',
                'township_name_mm' => 'မြင်းမူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            203 =>
            array (
                'id' => 316,
                'district_id' => 50,
                'township_name' => 'Pale',
                'township_name_mm' => 'ပုလဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            204 =>
            array (
                'id' => 317,
                'district_id' => 48,
                'township_name' => 'Paungbyin',
                'township_name_mm' => 'ဖောင်းပြင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            205 =>
            array (
                'id' => 318,
                'district_id' => 52,
                'township_name' => 'Pinlebu',
                'township_name_mm' => 'ပင်လည်ဘူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            206 =>
            array (
                'id' => 319,
                'district_id' => 42,
                'township_name' => 'Sagaing',
                'township_name_mm' => 'စစ်ကိုင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            207 =>
            array (
                'id' => 320,
                'district_id' => 50,
                'township_name' => 'Salingyi',
                'township_name_mm' => 'ဆားလင်းကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            208 =>
            array (
                'id' => 321,
                'district_id' => 43,
                'township_name' => 'Shwebo',
                'township_name_mm' => 'ရွှေဘို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            209 =>
            array (
                'id' => 322,
                'district_id' => 43,
                'township_name' => 'Tabayin',
                'township_name_mm' => 'ဒီပဲယင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            210 =>
            array (
                'id' => 323,
                'district_id' => 47,
                'township_name' => 'Tamu',
                'township_name_mm' => 'တမူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            211 =>
            array (
                'id' => 324,
                'district_id' => 43,
                'township_name' => 'Taze',
                'township_name_mm' => 'တန့်ဆည်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            212 =>
            array (
                'id' => 325,
                'district_id' => 45,
                'township_name' => 'Tigyaing',
                'township_name_mm' => 'ထီးချိုင့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            213 =>
            array (
                'id' => 326,
                'district_id' => 43,
                'township_name' => 'Wetlet',
                'township_name_mm' => 'ဝက်လက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            214 =>
            array (
                'id' => 327,
                'district_id' => 52,
                'township_name' => 'Wuntho',
                'township_name_mm' => 'ဝန်းသို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            215 =>
            array (
                'id' => 328,
                'district_id' => 43,
                'township_name' => 'Ye-U',
                'township_name_mm' => 'ရေဦး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:37',
                'updated_at' => '2022-09-29 09:25:37',
            ),
            216 =>
            array (
                'id' => 329,
                'district_id' => 50,
                'township_name' => 'Yinmarbin',
                'township_name_mm' => 'ယင်းမာပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            217 =>
            array (
                'id' => 330,
                'district_id' => 101,
            'township_name' => 'Ho Tawng (Ho Tao)',
                'township_name_mm' => 'ဟိုတောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            218 =>
            array (
                'id' => 331,
                'district_id' => 97,
                'township_name' => 'Kengtung',
                'township_name_mm' => 'ကျိုင်းတုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            219 =>
            array (
                'id' => 332,
                'district_id' => 101,
                'township_name' => 'Mong Hpen',
                'township_name_mm' => 'မိုင်းဖျန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            220 =>
            array (
                'id' => 333,
                'district_id' => 101,
                'township_name' => 'Mong Kar',
                'township_name_mm' => 'မိုင်းကာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            221 =>
            array (
                'id' => 334,
                'district_id' => 101,
                'township_name' => 'Mong Pawk',
                'township_name_mm' => 'မိုင်းပေါက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            222 =>
            array (
                'id' => 335,
                'district_id' => 99,
                'township_name' => 'Monghpyak',
                'township_name_mm' => 'မိုင်းဖြတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            223 =>
            array (
                'id' => 336,
                'district_id' => 98,
                'township_name' => 'Monghsat',
                'township_name_mm' => 'မိုင်းဆတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            224 =>
            array (
                'id' => 337,
                'district_id' => 97,
                'township_name' => 'Mongkhet',
                'township_name_mm' => 'မိုင်းခတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            225 =>
            array (
                'id' => 338,
                'district_id' => 97,
                'township_name' => 'Mongla',
                'township_name_mm' => 'မိုင်းလား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            226 =>
            array (
                'id' => 339,
                'district_id' => 97,
                'township_name' => 'Mongping',
                'township_name_mm' => 'မိုင်းပျဉ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            227 =>
            array (
                'id' => 340,
                'district_id' => 98,
                'township_name' => 'Mongton',
                'township_name_mm' => 'မိုင်းတုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            228 =>
            array (
                'id' => 341,
                'district_id' => 97,
                'township_name' => 'Mongyang',
                'township_name_mm' => 'မိုင်းယန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            229 =>
            array (
                'id' => 342,
                'district_id' => 99,
                'township_name' => 'Mongyawng',
                'township_name_mm' => 'မိုင်းယောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            230 =>
            array (
                'id' => 343,
                'district_id' => 101,
                'township_name' => 'Nam Hpai',
                'township_name_mm' => 'နမ့်ဖိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            231 =>
            array (
                'id' => 344,
                'district_id' => 99,
                'township_name' => 'Tachileik',
                'township_name_mm' => 'တာချီလိတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            232 =>
            array (
                'id' => 345,
                'district_id' => 95,
            'township_name' => 'Aik Chan (Ai\' Chun)',
                'township_name_mm' => 'အိုက်ချန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            233 =>
            array (
                'id' => 346,
                'district_id' => 94,
            'township_name' => 'Chinshwehaw Sub-township (Kokang SAZ)',
            'township_name_mm' => 'ချင်းရွှေဟော်မြို့နယ်ခွဲ (အထူးဒေသ ၁)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            234 =>
            array (
                'id' => 347,
                'district_id' => 95,
            'township_name' => 'Hkun Mar (Hkwin Ma)',
                'township_name_mm' => 'ခွန်းမား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            235 =>
            array (
                'id' => 348,
                'district_id' => 91,
                'township_name' => 'Hopang',
                'township_name_mm' => 'ဟိုပန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            236 =>
            array (
                'id' => 349,
                'district_id' => 95,
            'township_name' => 'Hsawng Hpa (Saun Pha)',
                'township_name_mm' => 'ဆောင်ဖ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            237 =>
            array (
                'id' => 350,
                'district_id' => 86,
                'township_name' => 'Hseni',
                'township_name_mm' => 'သိန္နီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            238 =>
            array (
                'id' => 351,
                'district_id' => 88,
                'township_name' => 'Hsipaw',
                'township_name_mm' => 'သီပေါ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            239 =>
            array (
                'id' => 352,
                'district_id' => 95,
                'township_name' => 'Ka Lawng Hpar',
                'township_name_mm' => 'ကလောင်ဖါ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            240 =>
            array (
                'id' => 353,
                'district_id' => 95,
                'township_name' => 'Kawng Min Hsang',
                'township_name_mm' => 'ကောင်မင်ဆန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            241 =>
            array (
                'id' => 355,
                'district_id' => 94,
            'township_name' => 'Konkyan (Kokang SAZ)',
            'township_name_mm' => 'ကုန်းကြမ်း (အထူးဒေသ ၁)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            242 =>
            array (
                'id' => 356,
                'district_id' => 86,
                'township_name' => 'Kunlong',
                'township_name_mm' => 'ကွမ်းလုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            243 =>
            array (
                'id' => 357,
                'district_id' => 87,
                'township_name' => 'Kutkai',
                'township_name_mm' => 'ကွတ်ခိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            244 =>
            array (
                'id' => 358,
                'district_id' => 88,
                'township_name' => 'Kyaukme',
                'township_name_mm' => 'ကျောက်မဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            245 =>
            array (
                'id' => 359,
                'district_id' => 86,
                'township_name' => 'Lashio',
                'township_name_mm' => 'လားရှိုး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            246 =>
            array (
                'id' => 361,
                'district_id' => 94,
            'township_name' => 'Laukkaing (Kokang SAZ)',
            'township_name_mm' => 'လောက်ကိုင် (အထူးဒေသ ၁)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            247 =>
            array (
                'id' => 362,
                'district_id' => 95,
                'township_name' => 'Lin Haw',
                'township_name_mm' => 'လင်ဟော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            248 =>
            array (
                'id' => 363,
                'district_id' => 95,
                'township_name' => 'Long Htan',
                'township_name_mm' => 'လုံထန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            249 =>
            array (
                'id' => 364,
                'district_id' => 93,
                'township_name' => 'Mabein',
                'township_name_mm' => 'မဘိမ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            250 =>
            array (
                'id' => 365,
                'district_id' => 96,
                'township_name' => 'Man Man Hseng',
                'township_name_mm' => 'မန်မန်ဆိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            251 =>
            array (
                'id' => 366,
                'district_id' => 95,
                'township_name' => 'Man Tun',
                'township_name_mm' => 'မန်တွန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            252 =>
            array (
                'id' => 368,
                'district_id' => 92,
                'township_name' => 'Matman',
                'township_name_mm' => 'မက်မန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            253 =>
            array (
                'id' => 369,
                'district_id' => 91,
                'township_name' => 'Mongmao',
                'township_name_mm' => 'မိုင်းမော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            254 =>
            array (
                'id' => 370,
                'district_id' => 93,
                'township_name' => 'Mongmit',
                'township_name_mm' => 'မိုးမိတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            255 =>
            array (
                'id' => 371,
                'district_id' => 86,
                'township_name' => 'Mongyai',
                'township_name_mm' => 'မိုင်းရယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            256 =>
            array (
                'id' => 372,
                'district_id' => 87,
                'township_name' => 'Muse',
                'township_name_mm' => 'မူဆယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            257 =>
            array (
                'id' => 373,
                'district_id' => 96,
                'township_name' => 'Nam Hkam Wu',
                'township_name_mm' => 'နမ်ခမ်းဝူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            258 =>
            array (
                'id' => 374,
                'district_id' => 95,
                'township_name' => 'Nam Tit',
                'township_name_mm' => 'နမ့် တစ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            259 =>
            array (
                'id' => 375,
                'district_id' => 87,
                'township_name' => 'Namhkan',
                'township_name_mm' => 'နမ့်ခမ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            260 =>
            array (
                'id' => 377,
                'district_id' => 88,
                'township_name' => 'Namtu',
                'township_name_mm' => 'နမ္မတူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            261 =>
            array (
                'id' => 378,
                'district_id' => 96,
                'township_name' => 'Nar Kawng',
                'township_name_mm' => 'နားကောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            262 =>
            array (
                'id' => 379,
                'district_id' => 95,
            'township_name' => 'Nar Wee (Na Wi)',
                'township_name_mm' => 'နာဝီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            263 =>
            array (
                'id' => 380,
                'district_id' => 92,
                'township_name' => 'Narphan',
                'township_name_mm' => 'နားဖန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            264 =>
            array (
                'id' => 381,
                'district_id' => 96,
                'township_name' => 'Nawng Hkit',
                'township_name_mm' => 'နောင်ခစ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            265 =>
            array (
                'id' => 382,
                'district_id' => 88,
                'township_name' => 'Nawnghkio',
                'township_name_mm' => 'နောင်ချို',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            266 =>
            array (
                'id' => 383,
                'district_id' => 96,
                'township_name' => 'Pang Hkam',
                'township_name_mm' => 'ပန်ခမ့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            267 =>
            array (
                'id' => 384,
                'district_id' => 96,
                'township_name' => 'Pang Yang',
                'township_name_mm' => 'ပန်ယန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            268 =>
            array (
                'id' => 385,
                'district_id' => 92,
            'township_name' => 'Pangsang (Panghkam)',
            'township_name_mm' => 'ပန်ဆန်း (ပန်ခမ်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            269 =>
            array (
                'id' => 386,
                'district_id' => 91,
                'township_name' => 'Pangwaun',
                'township_name_mm' => 'ပန်ဝိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            270 =>
            array (
                'id' => 387,
                'district_id' => 86,
                'township_name' => 'Tangyan',
                'township_name_mm' => 'တန့်ယန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            271 =>
            array (
                'id' => 388,
                'district_id' => 95,
                'township_name' => 'Yawng Lin',
                'township_name_mm' => 'ယောင်လင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:47',
                'updated_at' => '2022-09-29 09:25:47',
            ),
            272 =>
            array (
                'id' => 389,
                'district_id' => 95,
                'township_name' => 'Yin Pang',
                'township_name_mm' => 'ရင်ဖန့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:48',
                'updated_at' => '2022-09-29 09:25:48',
            ),
            273 =>
            array (
                'id' => 392,
                'district_id' => 83,
                'township_name' => 'Kalaw',
                'township_name_mm' => 'ကလော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            274 =>
            array (
                'id' => 393,
                'district_id' => 84,
                'township_name' => 'Kunhing',
                'township_name_mm' => 'ကွန်ဟိန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            275 =>
            array (
                'id' => 394,
                'district_id' => 84,
                'township_name' => 'Kyethi',
                'township_name_mm' => 'ကျေးသီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            276 =>
            array (
                'id' => 395,
                'district_id' => 84,
                'township_name' => 'Laihka',
                'township_name_mm' => 'လဲချား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            277 =>
            array (
                'id' => 396,
                'district_id' => 85,
                'township_name' => 'Langkho',
                'township_name_mm' => 'လင်းခေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            278 =>
            array (
                'id' => 397,
                'district_id' => 83,
                'township_name' => 'Lawksawk',
                'township_name_mm' => 'ရပ်စောက်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            279 =>
            array (
                'id' => 398,
                'district_id' => 84,
                'township_name' => 'Loilen',
                'township_name_mm' => 'လွိုင်လင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            280 =>
            array (
                'id' => 399,
                'district_id' => 85,
                'township_name' => 'Mawkmai',
                'township_name_mm' => 'မောက်မယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            281 =>
            array (
                'id' => 400,
                'district_id' => 84,
                'township_name' => 'Monghsu',
                'township_name_mm' => 'မိုင်းရှူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            282 =>
            array (
                'id' => 401,
                'district_id' => 84,
                'township_name' => 'Mongkaing',
                'township_name_mm' => 'မိုင်းကိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            283 =>
            array (
                'id' => 402,
                'district_id' => 85,
                'township_name' => 'Mongnai',
                'township_name_mm' => 'မိုးနဲ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            284 =>
            array (
                'id' => 403,
                'district_id' => 85,
                'township_name' => 'Mongpan',
                'township_name_mm' => 'မိုင်းပန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            285 =>
            array (
                'id' => 404,
                'district_id' => 84,
                'township_name' => 'Nansang',
                'township_name_mm' => 'နမ့်စန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:46',
                'updated_at' => '2022-09-29 09:25:46',
            ),
            286 =>
            array (
                'id' => 405,
                'district_id' => 83,
                'township_name' => 'Nyaungshwe',
                'township_name_mm' => 'ညောင်ရွှေ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            287 =>
            array (
                'id' => 406,
                'district_id' => 83,
                'township_name' => 'Pekon',
                'township_name_mm' => 'ဖယ်ခုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            288 =>
            array (
                'id' => 409,
                'district_id' => 83,
                'township_name' => 'Taunggyi',
                'township_name_mm' => 'တောင်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            289 =>
            array (
                'id' => 411,
                'district_id' => 55,
                'township_name' => 'Bokpyin',
                'township_name_mm' => 'ဘုတ်ပြင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            290 =>
            array (
                'id' => 412,
                'district_id' => 53,
                'township_name' => 'Dawei',
                'township_name_mm' => 'ထားဝယ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            291 =>
            array (
                'id' => 413,
                'district_id' => 55,
                'township_name' => 'Kawthoung',
                'township_name_mm' => 'ကော့သောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            292 =>
            array (
                'id' => 414,
                'district_id' => 54,
                'township_name' => 'Kyunsu',
                'township_name_mm' => 'ကျွန်းစု',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            293 =>
            array (
                'id' => 415,
                'district_id' => 53,
                'township_name' => 'Launglon',
                'township_name_mm' => 'လောင်းလုံး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            294 =>
            array (
                'id' => 416,
                'district_id' => 54,
                'township_name' => 'Myeik',
                'township_name_mm' => 'မြိတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            295 =>
            array (
                'id' => 417,
                'district_id' => 54,
                'township_name' => 'Palaw',
                'township_name_mm' => 'ပုလော',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            296 =>
            array (
                'id' => 418,
                'district_id' => 54,
                'township_name' => 'Tanintharyi',
                'township_name_mm' => 'တနင်္သာရီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            297 =>
            array (
                'id' => 419,
                'district_id' => 53,
                'township_name' => 'Thayetchaung',
                'township_name_mm' => 'သရက်ချောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            298 =>
            array (
                'id' => 420,
                'district_id' => 53,
                'township_name' => 'Yebyu',
                'township_name_mm' => 'ရေဖြူ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:38',
                'updated_at' => '2022-09-29 09:25:38',
            ),
            299 =>
            array (
                'id' => 421,
                'district_id' => 82,
                'township_name' => 'Ahlone',
                'township_name_mm' => 'အလုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            300 =>
            array (
                'id' => 422,
                'district_id' => 82,
                'township_name' => 'Bahan',
                'township_name_mm' => 'ဗဟန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            301 =>
            array (
                'id' => 423,
                'district_id' => 80,
                'township_name' => 'Botahtaung',
                'township_name_mm' => 'ဗိုလ်တထောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            // 302 =>
            // array (
            //     'id' => 424,
            //     'district_id' => 81,
            //     'township_name' => 'Cocokyun',
            //     'township_name_mm' => 'ကိုကိုးကျွန်း',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:44',
            //     'updated_at' => '2022-09-29 09:25:44',
            // ),
            303 =>
            array (
                'id' => 425,
                'district_id' => 82,
                'township_name' => 'Dagon',
                'township_name_mm' => 'ဒဂုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            304 =>
            array (
                'id' => 426,
                'district_id' => 80,
            'township_name' => 'Dagon Myothit (East)',
            'township_name_mm' => 'ဒဂုံမြို့သစ် (အရှေ့ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            305 =>
            array (
                'id' => 427,
                'district_id' => 80,
            'township_name' => 'Dagon Myothit (North)',
            'township_name_mm' => 'ဒဂုံမြို့သစ် (မြောက်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            306 =>
            array (
                'id' => 428,
                'district_id' => 80,
            'township_name' => 'Dagon Myothit (Seikkan)',
            'township_name_mm' => 'ဒဂုံမြို့သစ် (ဆိပ်ကမ်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            307 =>
            array (
                'id' => 429,
                'district_id' => 80,
            'township_name' => 'Dagon Myothit (South)',
            'township_name_mm' => 'ဒဂုံမြို့သစ် (တောင်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            // 308 =>
            // array (
            //     'id' => 430,
            //     'district_id' => 81,
            //     'township_name' => 'Dala',
            //     'township_name_mm' => 'ဒလ',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:44',
            //     'updated_at' => '2022-09-29 09:25:44',
            // ),
            309 =>
            array (
                'id' => 431,
                'district_id' => 80,
                'township_name' => 'Dawbon',
                'township_name_mm' => 'ဒေါပုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            310 =>
            array (
                'id' => 432,
                'district_id' => 82,
                'township_name' => 'Hlaing',
                'township_name_mm' => 'လှိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            311 =>
            array (
                'id' => 433,
                'district_id' => 79,
                'township_name' => 'Hlaingtharya',
                'township_name_mm' => 'လှိုင်သာယာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            312 =>
            array (
                'id' => 434,
                'district_id' => 79,
                'township_name' => 'Hlegu',
                'township_name_mm' => 'လှည်းကူး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            313 =>
            array (
                'id' => 435,
                'district_id' => 79,
                'township_name' => 'Hmawbi',
                'township_name_mm' => 'မှော်ဘီ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:43',
                'updated_at' => '2022-09-29 09:25:43',
            ),
            314 =>
            array (
                'id' => 436,
                'district_id' => 79,
                'township_name' => 'Htantabin',
                'township_name_mm' => 'ထန်းတပင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            315 =>
            array (
                'id' => 437,
                'district_id' => 79,
                'township_name' => 'Insein',
                'township_name_mm' => 'အင်းစိန်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            316 =>
            array (
                'id' => 438,
                'district_id' => 82,
                'township_name' => 'Kamaryut',
                'township_name_mm' => 'ကမာရွတ်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            // 317 =>
            // array (
            //     'id' => 439,
            //     'district_id' => 81,
            //     'township_name' => 'Kawhmu',
            //     'township_name_mm' => 'ကော့မှူး',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:44',
            //     'updated_at' => '2022-09-29 09:25:44',
            // ),
            // 318 =>
            // array (
            //     'id' => 440,
            //     'district_id' => 81,
            //     'township_name' => 'Kayan',
            //     'township_name_mm' => 'ခရမ်း',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:44',
            //     'updated_at' => '2022-09-29 09:25:44',
            // ),
            // 319 =>
            // array (
            //     'id' => 441,
            //     'district_id' => 81,
            //     'township_name' => 'Kungyangon',
            //     'township_name_mm' => 'ကွမ်းခြံကုန်း',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:45',
            //     'updated_at' => '2022-09-29 09:25:45',
            // ),
            320 =>
            array (
                'id' => 442,
                'district_id' => 82,
                'township_name' => 'Kyauktada',
                'township_name_mm' => 'ကျောက်တံတား',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            // 321 =>
            // array (
            //     'id' => 443,
            //     'district_id' => 81,
            //     'township_name' => 'Kyauktan',
            //     'township_name_mm' => 'ကျောက်တန်း',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:45',
            //     'updated_at' => '2022-09-29 09:25:45',
            // ),
            322 =>
            array (
                'id' => 444,
                'district_id' => 82,
                'township_name' => 'Kyeemyindaing',
                'township_name_mm' => 'ကြည့်မြင်တိုင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            323 =>
            array (
                'id' => 445,
                'district_id' => 82,
                'township_name' => 'Lanmadaw',
                'township_name_mm' => 'လမ်းမတော်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            324 =>
            array (
                'id' => 446,
                'district_id' => 82,
                'township_name' => 'Latha',
                'township_name_mm' => 'လသာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            325 =>
            array (
                'id' => 447,
                'district_id' => 82,
                'township_name' => 'Mayangone',
                'township_name_mm' => 'မရမ်းကုန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            326 =>
            array (
                'id' => 448,
                'district_id' => 79,
                'township_name' => 'Mingaladon',
                'township_name_mm' => 'မင်္ဂလာဒုံ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            327 =>
            array (
                'id' => 449,
                'district_id' => 80,
                'township_name' => 'Mingalartaungnyunt',
                'township_name_mm' => 'မင်္ဂလာတောင်ညွန့်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            328 =>
            array (
                'id' => 450,
                'district_id' => 80,
                'township_name' => 'North Okkalapa',
                'township_name_mm' => 'မြောက်ဥက္ကလာပ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            329 =>
            array (
                'id' => 451,
                'district_id' => 82,
                'township_name' => 'Pabedan',
                'township_name_mm' => 'ပန်းဘဲတန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            330 =>
            array (
                'id' => 452,
                'district_id' => 80,
                'township_name' => 'Pazundaung',
                'township_name_mm' => 'ပုဇွန်တောင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            331 =>
            array (
                'id' => 453,
                'district_id' => 82,
                'township_name' => 'Sanchaung',
                'township_name_mm' => 'စမ်းချောင်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            // 332 =>
            // array (
            //     'id' => 454,
            //     'district_id' => 81,
            //     'township_name' => 'Seikgyikanaungto',
            //     'township_name_mm' => 'ဆိပ်ကြီး/ခနောင်တို',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:45',
            //     'updated_at' => '2022-09-29 09:25:45',
            // ),
            333 =>
            array (
                'id' => 455,
                'district_id' => 82,
                'township_name' => 'Seikkan',
                'township_name_mm' => 'ဆိပ်ကမ်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            334 =>
            array (
                'id' => 456,
                'district_id' => 79,
                'township_name' => 'Shwepyithar',
                'township_name_mm' => 'ရွှေပြည်သာ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            335 =>
            array (
                'id' => 457,
                'district_id' => 80,
                'township_name' => 'South Okkalapa',
                'township_name_mm' => 'တောင်ဥက္ကလာပ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            336 =>
            array (
                'id' => 458,
                'district_id' => 79,
                'township_name' => 'Taikkyi',
                'township_name_mm' => 'တိုက်ကြီး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            337 =>
            array (
                'id' => 459,
                'district_id' => 80,
                'township_name' => 'Tamwe',
                'township_name_mm' => 'တာမွေ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            338 =>
            array (
                'id' => 460,
                'district_id' => 80,
                'township_name' => 'Thaketa',
                'township_name_mm' => 'သာကေတ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            339 =>
            array (
                'id' => 461,
                'district_id' => 81,
                'township_name' => 'Thanlyin',
                'township_name_mm' => 'သန်လျင်',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            340 =>
            array (
                'id' => 462,
                'district_id' => 80,
                'township_name' => 'Thingangyun',
                'township_name_mm' => 'သင်္ဃန်းကျွန်း',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            341 =>
            array (
                'id' => 463,
                'district_id' => 81,
                'township_name' => 'Thongwa',
                'township_name_mm' => 'သုံးခွ',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            342 =>
            array (
                'id' => 464,
                'district_id' => 81,
                'township_name' => 'Twantay',
                'township_name_mm' => 'တွံတေး',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:45',
                'updated_at' => '2022-09-29 09:25:45',
            ),
            // 343 =>
            // array (
            //     'id' => 465,
            //     'district_id' => 80,
            //     'township_name' => 'Yankin',
            //     'township_name_mm' => 'ရန်ကင်း',
            //     'del_status' => 'none',
            //     'created_at' => '2022-09-29 09:25:44',
            //     'updated_at' => '2022-09-29 09:25:44',
            // ),
            344 =>
            array (
                'id' => 466,
                'district_id' => 79,
            'township_name' => 'Hlaingtharya (East)',
            'township_name_mm' => 'လှိုင်သာယာ (အရှေ့ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            345 =>
            array (
                'id' => 467,
                'district_id' => 79,
            'township_name' => 'Hlaingtharya (West)',
            'township_name_mm' => 'လှိုင်သာယာ (အနောက်ပိုင်း)',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:44',
                'updated_at' => '2022-09-29 09:25:44',
            ),
            346 =>
            array (
                'id' => 18575,
                'district_id' => 32,
                'township_name' => 'ကကက',
                'township_name_mm' => 'ကကက',
                'del_status' => 'none',
                'created_at' => '2022-09-29 09:25:36',
                'updated_at' => '2022-09-29 09:25:36',
            ),
        ));


    }
}
