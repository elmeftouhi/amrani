<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city_name_fr' => 'Agadir',
                'city_name_ar' => 'أكادير',
                'city_status' => 1,
                'is_default' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'city_name_fr' => 'Al Hoceïma',
                'city_name_ar' => 'الحسيمة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'city_name_fr' => 'Béni Mellal',
                'city_name_ar' => 'بني ملال',
                'city_status' => 1,
                'is_default' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'city_name_fr' => 'Casablanca',
                'city_name_ar' => 'الدار البيضاء',
                'city_status' => 1,
                'is_default' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'city_name_fr' => 'El Jadida',
                'city_name_ar' => 'الجديدة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'city_name_fr' => 'Errachidia',
                'city_name_ar' => 'الراشيدية',
                'city_status' => 1,
                'is_default' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'city_name_fr' => 'Fès',
                'city_name_ar' => 'فاس',
                'city_status' => 1,
                'is_default' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'city_name_fr' => 'Kénitra',
                'city_name_ar' => 'قنيطرة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'city_name_fr' => 'Khénifra',
                'city_name_ar' => 'خنيفرة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'city_name_fr' => 'Khouribga',
                'city_name_ar' => 'خريبكة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'city_name_fr' => 'Larache',
                'city_name_ar' => 'العرائش',
                'city_status' => 1,
                'is_default' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'city_name_fr' => 'Marrakech',
                'city_name_ar' => 'مراكش',
                'city_status' => 1,
                'is_default' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'city_name_fr' => 'Meknès',
                'city_name_ar' => 'مكناس',
                'city_status' => 1,
                'is_default' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'city_name_fr' => 'Nador',
                'city_name_ar' => 'ناضور',
                'city_status' => 1,
                'is_default' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'city_name_fr' => 'Ouarzazate',
                'city_name_ar' => 'ورزازات',
                'city_status' => 1,
                'is_default' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'city_name_fr' => 'Oujda',
                'city_name_ar' => 'وجدة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'city_name_fr' => 'Rabat',
                'city_name_ar' => 'الرباط',
                'city_status' => 1,
                'is_default' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'city_name_fr' => 'Safi',
                'city_name_ar' => 'اسفي',
                'city_status' => 1,
                'is_default' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'city_name_fr' => 'Settat',
                'city_name_ar' => 'سطات',
                'city_status' => 1,
                'is_default' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'city_name_fr' => 'Salé',
                'city_name_ar' => 'سلا',
                'city_status' => 1,
                'is_default' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'city_name_fr' => 'Tanger',
                'city_name_ar' => 'طنجة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'city_name_fr' => 'Taza',
                'city_name_ar' => 'تازة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'city_name_fr' => 'Tétouan',
                'city_name_ar' => 'تطوان',
                'city_status' => 1,
                'is_default' => 1,
            ),
            23 => 
            array (
                'id' => 25,
                'city_name_fr' => 'mellilia',
                'city_name_ar' => 'مليلية',
                'city_status' => 1,
                'is_default' => 0,
            ),
            24 => 
            array (
                'id' => 26,
                'city_name_fr' => 'Martil ',
                'city_name_ar' => 'مرتيل',
                'city_status' => 1,
                'is_default' => 0,
            ),
            25 => 
            array (
                'id' => 27,
                'city_name_fr' => 'Chefchaouen',
                'city_name_ar' => 'شفشاون',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            26 => 
            array (
                'id' => 28,
                'city_name_fr' => 'sebta',
                'city_name_ar' => 'سبتة',
                'city_status' => 1,
                'is_default' => 0,
            ),
            27 => 
            array (
                'id' => 29,
                'city_name_fr' => 'Tifelt',
                'city_name_ar' => 'تيفلت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            28 => 
            array (
                'id' => 30,
                'city_name_fr' => 'Midelt',
                'city_name_ar' => 'ميدلت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            29 => 
            array (
                'id' => 31,
                'city_name_fr' => 'Laayoune',
                'city_name_ar' => 'العيون',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            30 => 
            array (
                'id' => 32,
                'city_name_fr' => 'Ksar sgher',
                'city_name_ar' => 'القصر الصغير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            31 => 
            array (
                'id' => 33,
                'city_name_fr' => 'Afourar',
                'city_name_ar' => 'افورار',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            32 => 
            array (
                'id' => 34,
                'city_name_fr' => 'Aghbala',
                'city_name_ar' => 'اغبالة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            33 => 
            array (
                'id' => 35,
                'city_name_fr' => 'Aghbalou',
                'city_name_ar' => 'اغبالو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            34 => 
            array (
                'id' => 36,
                'city_name_fr' => 'Agdz',
                'city_name_ar' => 'اگدز',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            35 => 
            array (
                'id' => 37,
                'city_name_fr' => 'Agourai',
                'city_name_ar' => 'اگوراي',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            36 => 
            array (
                'id' => 38,
                'city_name_fr' => 'Aghelmous',
                'city_name_ar' => 'اگلموس',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            37 => 
            array (
                'id' => 39,
                'city_name_fr' => 'Ahfi',
                'city_name_ar' => 'احفير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            38 => 
            array (
                'id' => 40,
                'city_name_fr' => 'Ain leuj',
                'city_name_ar' => 'عين لوح',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            39 => 
            array (
                'id' => 41,
                'city_name_fr' => 'Ain bni mathar',
                'city_name_ar' => 'عين بني مطهر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            40 => 
            array (
                'id' => 42,
                'city_name_fr' => 'Ain bni mathar',
                'city_name_ar' => 'عين بني مطهر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            41 => 
            array (
                'id' => 43,
                'city_name_fr' => 'Ain cheggag',
                'city_name_ar' => 'عين شگاگ',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            42 => 
            array (
                'id' => 44,
                'city_name_fr' => 'Ain mathar',
                'city_name_ar' => 'عين مطهر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            43 => 
            array (
                'id' => 45,
                'city_name_fr' => 'Aïn dorij',
                'city_name_ar' => 'عين دريش',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            44 => 
            array (
                'id' => 46,
                'city_name_fr' => 'Ain el aouda',
                'city_name_ar' => 'عين العودة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            45 => 
            array (
                'id' => 47,
                'city_name_fr' => 'Aïn Erreggada',
                'city_name_ar' => 'عين الرگادة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            46 => 
            array (
                'id' => 48,
                'city_name_fr' => 'Aïn Harrouda',
                'city_name_ar' => 'عين حرودة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            47 => 
            array (
                'id' => 49,
                'city_name_fr' => 'Aïn jemaa',
                'city_name_ar' => 'عين جمعة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            48 => 
            array (
                'id' => 50,
                'city_name_fr' => 'Aïn Karma',
                'city_name_ar' => 'عين الكرمة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            49 => 
            array (
                'id' => 51,
                'city_name_fr' => 'Aïn Taoujdate',
                'city_name_ar' => 'عين توجدات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            50 => 
            array (
                'id' => 52,
                'city_name_fr' => 'Aït Laaza',
                'city_name_ar' => 'آيت ايعزة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            51 => 
            array (
                'id' => 53,
                'city_name_fr' => 'Aït baha',
                'city_name_ar' => 'ايت بها',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            52 => 
            array (
                'id' => 54,
                'city_name_fr' => 'Aït boubidmane',
                'city_name_ar' => 'آيت بوبيدمان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            53 => 
            array (
                'id' => 55,
                'city_name_fr' => 'Aït daoud',
                'city_name_ar' => 'ايت داوود',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            54 => 
            array (
                'id' => 56,
                'city_name_fr' => 'AÏt Ishaq',
                'city_name_ar' => 'ايت اسحاق',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            55 => 
            array (
                'id' => 57,
                'city_name_fr' => 'Aït Melloul',
                'city_name_ar' => 'ايت ملول',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            56 => 
            array (
                'id' => 58,
                'city_name_fr' => 'Aït Ourir',
                'city_name_ar' => 'ايت اورير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            57 => 
            array (
                'id' => 59,
                'city_name_fr' => 'Akka',
                'city_name_ar' => 'اقا',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            58 => 
            array (
                'id' => 60,
                'city_name_fr' => 'Aklim',
                'city_name_ar' => 'اكليم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            59 => 
            array (
                'id' => 61,
                'city_name_fr' => 'Aknoul',
                'city_name_ar' => 'اكنول',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            60 => 
            array (
                'id' => 62,
                'city_name_fr' => 'Ajdir',
                'city_name_ar' => 'اجدير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            61 => 
            array (
                'id' => 63,
                'city_name_fr' => 'El aaroui',
                'city_name_ar' => 'العروي',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            62 => 
            array (
                'id' => 64,
                'city_name_fr' => 'Alnif',
                'city_name_ar' => 'النيف',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            63 => 
            array (
                'id' => 65,
                'city_name_fr' => 'Amalou Ighriben',
                'city_name_ar' => 'املو إغريبن',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            64 => 
            array (
                'id' => 66,
                'city_name_fr' => 'Amizmiz',
                'city_name_ar' => 'امزميز',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            65 => 
            array (
                'id' => 67,
                'city_name_fr' => 'Aoufous',
                'city_name_ar' => 'أوفوس',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            66 => 
            array (
                'id' => 68,
                'city_name_fr' => 'Aoulouz',
                'city_name_ar' => 'اولوز',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            67 => 
            array (
                'id' => 69,
                'city_name_fr' => 'Aourir',
                'city_name_ar' => 'اورير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            68 => 
            array (
                'id' => 70,
                'city_name_fr' => 'Arbaoua',
                'city_name_ar' => 'عرباوة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            69 => 
            array (
                'id' => 71,
                'city_name_fr' => 'Arfoud',
                'city_name_ar' => 'ارفود',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            70 => 
            array (
                'id' => 72,
                'city_name_fr' => 'Assa',
                'city_name_ar' => 'آسا',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            71 => 
            array (
                'id' => 73,
                'city_name_fr' => 'Assahrij',
                'city_name_ar' => 'السهريج',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            72 => 
            array (
                'id' => 74,
                'city_name_fr' => 'Assilah',
                'city_name_ar' => 'أصيلة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            73 => 
            array (
                'id' => 75,
                'city_name_fr' => 'Azemmour',
                'city_name_ar' => 'أزمور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            74 => 
            array (
                'id' => 76,
                'city_name_fr' => 'Azilal',
                'city_name_ar' => 'أزيلال',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            75 => 
            array (
                'id' => 77,
                'city_name_fr' => 'Azrou',
                'city_name_ar' => 'أزرو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            76 => 
            array (
                'id' => 78,
                'city_name_fr' => 'Bab berred',
                'city_name_ar' => 'باب برد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            77 => 
            array (
                'id' => 79,
                'city_name_fr' => 'Bab taza',
                'city_name_ar' => 'باب تازة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            78 => 
            array (
                'id' => 80,
                'city_name_fr' => 'Bejaad',
                'city_name_ar' => 'ابو الجعد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            79 => 
            array (
                'id' => 81,
                'city_name_fr' => 'Ben ahmed',
                'city_name_ar' => 'بن احمد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            80 => 
            array (
                'id' => 82,
                'city_name_fr' => 'Ben guerir',
                'city_name_ar' => 'بن جرير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            81 => 
            array (
                'id' => 83,
                'city_name_fr' => 'Ben Taïeb',
                'city_name_ar' => 'بن الطيب',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            82 => 
            array (
                'id' => 84,
                'city_name_fr' => 'Ben Yakhlef',
                'city_name_ar' => 'بن يخلف',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            83 => 
            array (
                'id' => 85,
                'city_name_fr' => 'Ben Slimane',
                'city_name_ar' => 'بن سليمان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            84 => 
            array (
                'id' => 86,
                'city_name_fr' => 'Berkane',
                'city_name_ar' => 'بركان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            85 => 
            array (
                'id' => 87,
                'city_name_fr' => 'Berrechid',
                'city_name_ar' => 'برشيد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            86 => 
            array (
                'id' => 88,
                'city_name_fr' => 'Bhali',
                'city_name_ar' => 'البهاليل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            87 => 
            array (
                'id' => 89,
                'city_name_fr' => 'Biougra',
                'city_name_ar' => 'بيوكرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            88 => 
            array (
                'id' => 90,
                'city_name_fr' => 'Bni Ansar',
                'city_name_ar' => 'بني انصار',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            89 => 
            array (
                'id' => 91,
                'city_name_fr' => 'Bni bouayach',
                'city_name_ar' => 'بني بوعياش',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            90 => 
            array (
                'id' => 92,
                'city_name_fr' => 'Bni chiker',
                'city_name_ar' => 'بني شيكر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            91 => 
            array (
                'id' => 93,
                'city_name_fr' => 'Bni drar',
                'city_name_ar' => 'بني درار',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            92 => 
            array (
                'id' => 94,
                'city_name_fr' => 'Bni Hadifa',
                'city_name_ar' => 'بني حديفة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            93 => 
            array (
                'id' => 95,
                'city_name_fr' => 'Bni Tadjite',
                'city_name_ar' => 'بني تادجيت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            94 => 
            array (
                'id' => 96,
                'city_name_fr' => 'Bouarfa',
                'city_name_ar' => 'بوعرفة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            95 => 
            array (
                'id' => 97,
                'city_name_fr' => 'Boudnib',
                'city_name_ar' => 'بودنيب',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            96 => 
            array (
                'id' => 98,
                'city_name_fr' => 'Bouguedra',
                'city_name_ar' => 'بوگدرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            97 => 
            array (
                'id' => 99,
                'city_name_fr' => 'Boujdour',
                'city_name_ar' => 'بوجدور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            98 => 
            array (
                'id' => 100,
                'city_name_fr' => 'Boujniba',
                'city_name_ar' => 'بوجنيبة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            99 => 
            array (
                'id' => 101,
                'city_name_fr' => 'Boulemane',
                'city_name_ar' => 'بولمان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            100 => 
            array (
                'id' => 102,
                'city_name_fr' => 'Bouskoura',
                'city_name_ar' => 'بوسكورة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            101 => 
            array (
                'id' => 103,
                'city_name_fr' => 'Bouznika',
                'city_name_ar' => 'بوزنيقة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            102 => 
            array (
                'id' => 104,
                'city_name_fr' => 'Fequih ben Salah',
                'city_name_ar' => 'الفقيه بنصالح',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            103 => 
            array (
                'id' => 105,
                'city_name_fr' => 'Ouezzane',
                'city_name_ar' => 'وزان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            104 => 
            array (
                'id' => 106,
                'city_name_fr' => 'Chichaoua',
                'city_name_ar' => 'شيشاوة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            105 => 
            array (
                'id' => 107,
                'city_name_fr' => 'Dakhla',
                'city_name_ar' => 'الداخلة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            106 => 
            array (
                'id' => 108,
                'city_name_fr' => 'Dar El Gueddari',
                'city_name_ar' => 'دار الگداري',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            107 => 
            array (
                'id' => 109,
                'city_name_fr' => 'El Hajeb',
                'city_name_ar' => 'الحاجب',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            108 => 
            array (
                'id' => 110,
                'city_name_fr' => 'Dcheïra El Jihadia',
                'city_name_ar' => 'الدشيرة الجهادية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            109 => 
            array (
                'id' => 111,
                'city_name_fr' => 'Debdou',
                'city_name_ar' => 'دبدو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            110 => 
            array (
                'id' => 112,
                'city_name_fr' => 'Demnate',
                'city_name_ar' => 'دمنات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            111 => 
            array (
                'id' => 113,
                'city_name_fr' => 'Deroua',
                'city_name_ar' => 'الدروة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            112 => 
            array (
                'id' => 114,
                'city_name_fr' => 'Driouch',
                'city_name_ar' => 'الدريوش',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            113 => 
            array (
                'id' => 115,
                'city_name_fr' => 'Echemmaia',
                'city_name_ar' => 'الشماعية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            114 => 
            array (
                'id' => 116,
                'city_name_fr' => 'El Aïoun Sidi Mellouk',
                'city_name_ar' => 'العيون سيدي ملوك',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            115 => 
            array (
                'id' => 117,
                'city_name_fr' => 'Al bourouj',
                'city_name_ar' => 'البروج',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            116 => 
            array (
                'id' => 118,
                'city_name_fr' => 'El gara',
                'city_name_ar' => 'الكارة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            117 => 
            array (
                'id' => 119,
                'city_name_fr' => 'El hanchane',
                'city_name_ar' => 'الحنشان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            118 => 
            array (
                'id' => 120,
                'city_name_fr' => 'El kelaa des Sraghna',
                'city_name_ar' => 'قلعة السراغنة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            119 => 
            array (
                'id' => 121,
                'city_name_fr' => 'El ksiba',
                'city_name_ar' => 'القسيبة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            120 => 
            array (
                'id' => 122,
                'city_name_fr' => 'El mansouria',
                'city_name_ar' => 'المنصورية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            121 => 
            array (
                'id' => 123,
                'city_name_fr' => 'El marsa',
                'city_name_ar' => 'المرسى',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            122 => 
            array (
                'id' => 124,
                'city_name_fr' => 'El menzel',
                'city_name_ar' => 'المنزل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            123 => 
            array (
                'id' => 125,
                'city_name_fr' => 'El ouatia',
                'city_name_ar' => 'الوطية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            124 => 
            array (
                'id' => 217,
                'city_name_fr' => 'Sidi Bou Othamne',
                'city_name_ar' => 'سيدي بوعثمان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            125 => 
            array (
                'id' => 127,
                'city_name_fr' => 'Er-Rich',
                'city_name_ar' => 'الريش',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            126 => 
            array (
                'id' => 128,
                'city_name_fr' => 'Essaouira',
                'city_name_ar' => 'الصويرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            127 => 
            array (
                'id' => 129,
                'city_name_fr' => 'Es-Semara',
                'city_name_ar' => 'السمارة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            128 => 
            array (
                'id' => 130,
                'city_name_fr' => 'Ifrane',
                'city_name_ar' => 'افران',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            129 => 
            array (
                'id' => 131,
                'city_name_fr' => 'Guelmim',
                'city_name_ar' => 'گلميم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            130 => 
            array (
                'id' => 132,
                'city_name_fr' => 'Goulmima',
                'city_name_ar' => 'گلميمة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            131 => 
            array (
                'id' => 133,
                'city_name_fr' => 'Fam El hisn',
                'city_name_ar' => 'فم الحصن',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            132 => 
            array (
                'id' => 134,
                'city_name_fr' => 'Figuig',
                'city_name_ar' => 'فگيگ',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            133 => 
            array (
                'id' => 135,
                'city_name_fr' => 'Foum Zguid',
                'city_name_ar' => 'فم زگيد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            134 => 
            array (
                'id' => 136,
                'city_name_fr' => 'Ghafsaï',
                'city_name_ar' => 'غفساي',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            135 => 
            array (
                'id' => 137,
                'city_name_fr' => 'Ghmate',
                'city_name_ar' => 'غمات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            136 => 
            array (
                'id' => 138,
                'city_name_fr' => 'Guersif',
                'city_name_ar' => 'گرسيف',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            137 => 
            array (
                'id' => 139,
                'city_name_fr' => 'Had Kourt',
                'city_name_ar' => 'حد كورت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            138 => 
            array (
                'id' => 140,
                'city_name_fr' => 'Haj kaddour',
                'city_name_ar' => 'الحاج  قدور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            139 => 
            array (
                'id' => 141,
                'city_name_fr' => 'Houara',
                'city_name_ar' => 'هوارة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            140 => 
            array (
                'id' => 142,
                'city_name_fr' => 'Youssoufia',
                'city_name_ar' => 'اليوسفية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            141 => 
            array (
                'id' => 143,
                'city_name_fr' => 'Imouzzer Kandar',
                'city_name_ar' => 'ايموزار كندر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            142 => 
            array (
                'id' => 144,
                'city_name_fr' => 'Imouzzer Marmoucha',
                'city_name_ar' => 'اموزار مرموشة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            143 => 
            array (
                'id' => 145,
                'city_name_fr' => 'Imzouren',
                'city_name_ar' => 'امزورن',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            144 => 
            array (
                'id' => 146,
                'city_name_fr' => 'Inezgane',
                'city_name_ar' => 'انزگان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            145 => 
            array (
                'id' => 147,
                'city_name_fr' => 'Itzer',
                'city_name_ar' => 'ايتزار',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            146 => 
            array (
                'id' => 148,
                'city_name_fr' => 'Jamaat shaim',
                'city_name_ar' => 'جمعة سحيم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            147 => 
            array (
                'id' => 149,
                'city_name_fr' => 'Jebha',
                'city_name_ar' => 'الجبهة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            148 => 
            array (
                'id' => 150,
                'city_name_fr' => 'Jerada',
                'city_name_ar' => 'جرادة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            149 => 
            array (
                'id' => 151,
                'city_name_fr' => 'Jorf el melha',
                'city_name_ar' => 'جرف الملحة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            150 => 
            array (
                'id' => 152,
                'city_name_fr' => 'Kalaat m’Gouna',
                'city_name_ar' => 'قلعة مگونة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            151 => 
            array (
                'id' => 153,
                'city_name_fr' => 'Kariat Ba Mohamed',
                'city_name_ar' => 'قرية با محمد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            152 => 
            array (
                'id' => 154,
                'city_name_fr' => 'Kasba tadla',
                'city_name_ar' => 'قصبة تادلة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            153 => 
            array (
                'id' => 155,
                'city_name_fr' => 'Kattara',
                'city_name_ar' => 'قطارة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            154 => 
            array (
                'id' => 156,
                'city_name_fr' => 'Kahf nsour',
                'city_name_ar' => 'كهف النسور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            155 => 
            array (
                'id' => 157,
                'city_name_fr' => 'Tata',
                'city_name_ar' => 'طاطا',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            156 => 
            array (
                'id' => 158,
                'city_name_fr' => 'Tiznit',
                'city_name_ar' => 'تزنيت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            157 => 
            array (
                'id' => 159,
                'city_name_fr' => 'Témara',
                'city_name_ar' => 'تمارة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            158 => 
            array (
                'id' => 160,
                'city_name_fr' => 'Zaïo',
                'city_name_ar' => 'زيو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            159 => 
            array (
                'id' => 161,
                'city_name_fr' => 'Zagora',
                'city_name_ar' => 'زاگورة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            160 => 
            array (
                'id' => 162,
                'city_name_fr' => 'Sefrou',
                'city_name_ar' => 'صفرو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            161 => 
            array (
                'id' => 163,
                'city_name_fr' => 'Sidi allal Tazi',
                'city_name_ar' => 'سيدي علال التازي',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            162 => 
            array (
                'id' => 164,
                'city_name_fr' => 'Saïdia',
                'city_name_ar' => 'السعيدية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            163 => 
            array (
                'id' => 165,
                'city_name_fr' => 'Nouaceur',
                'city_name_ar' => 'النواصر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            164 => 
            array (
                'id' => 166,
                'city_name_fr' => 'Loualidia',
                'city_name_ar' => 'الوالدية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            165 => 
            array (
                'id' => 167,
                'city_name_fr' => 'Oued lao',
                'city_name_ar' => 'وادلاو',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            166 => 
            array (
                'id' => 168,
                'city_name_fr' => 'Mehdya',
                'city_name_ar' => 'مهدية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            167 => 
            array (
                'id' => 169,
                'city_name_fr' => 'Mohammédia',
                'city_name_ar' => 'المحمدية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            168 => 
            array (
                'id' => 170,
                'city_name_fr' => 'Moulay bousselham',
                'city_name_ar' => 'مولاي بوسلهام',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            169 => 
            array (
                'id' => 171,
                'city_name_fr' => 'Médiouna',
                'city_name_ar' => 'مديونة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            170 => 
            array (
                'id' => 172,
                'city_name_fr' => 'Khémisset',
                'city_name_ar' => 'الخميسات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            171 => 
            array (
                'id' => 173,
                'city_name_fr' => 'Temsamane',
                'city_name_ar' => 'تمسمان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            172 => 
            array (
                'id' => 174,
                'city_name_fr' => 'Sidi Allal El Bahraoui',
                'city_name_ar' => 'سيدي علال البحراوي',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            173 => 
            array (
                'id' => 175,
                'city_name_fr' => 'Sidi ifni',
                'city_name_ar' => 'سيدي افني',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            174 => 
            array (
                'id' => 176,
                'city_name_fr' => 'Taounate',
                'city_name_ar' => 'تاونات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            175 => 
            array (
                'id' => 177,
                'city_name_fr' => 'Tan-Tan',
                'city_name_ar' => 'طان طان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            176 => 
            array (
                'id' => 178,
                'city_name_fr' => 'Tafraout',
                'city_name_ar' => 'تافراوت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            177 => 
            array (
                'id' => 179,
                'city_name_fr' => 'Targuist',
                'city_name_ar' => 'تارجست',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            178 => 
            array (
                'id' => 180,
                'city_name_fr' => 'Tarfaya',
                'city_name_ar' => 'طرفاية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            179 => 
            array (
                'id' => 181,
                'city_name_fr' => 'Sidi yahya El Gharb',
                'city_name_ar' => 'سيدي يحيى الغرب',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            180 => 
            array (
                'id' => 182,
                'city_name_fr' => 'Skhirate',
                'city_name_ar' => 'الصخيرات',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            181 => 
            array (
                'id' => 183,
                'city_name_fr' => 'Souk El Arbaâ',
                'city_name_ar' => 'سوق الاربعاء',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            182 => 
            array (
                'id' => 184,
                'city_name_fr' => 'Taroudant',
                'city_name_ar' => 'تارودانت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            183 => 
            array (
                'id' => 185,
                'city_name_fr' => 'Taourirt',
                'city_name_ar' => 'تاوريرت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            184 => 
            array (
                'id' => 186,
                'city_name_fr' => 'Zemamra',
                'city_name_ar' => 'الزمامرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            185 => 
            array (
                'id' => 187,
                'city_name_fr' => 'Zrarda',
                'city_name_ar' => 'زراردة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            186 => 
            array (
                'id' => 188,
                'city_name_fr' => 'Ksar El kebir',
                'city_name_ar' => 'القصر الكبير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            187 => 
            array (
                'id' => 189,
                'city_name_fr' => 'Sidi bennour',
                'city_name_ar' => 'سيدي بنور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            188 => 
            array (
                'id' => 190,
                'city_name_fr' => 'Laakarta',
                'city_name_ar' => 'لاكارتا',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            189 => 
            array (
                'id' => 191,
                'city_name_fr' => 'Laataouia',
                'city_name_ar' => 'العطاوية',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            190 => 
            array (
                'id' => 192,
                'city_name_fr' => 'Lagouira',
                'city_name_ar' => 'الگويرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            191 => 
            array (
                'id' => 193,
                'city_name_fr' => 'Lakhsas',
                'city_name_ar' => 'لخصاص',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            192 => 
            array (
                'id' => 194,
                'city_name_fr' => 'Lahraouine',
                'city_name_ar' => 'الهراويين',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            193 => 
            array (
                'id' => 195,
                'city_name_fr' => 'Al haouz',
                'city_name_ar' => 'الحوز',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            194 => 
            array (
                'id' => 196,
                'city_name_fr' => 'Lqliaa',
                'city_name_ar' => 'القليعة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            195 => 
            array (
                'id' => 197,
                'city_name_fr' => 'Mechra Bel Ksiri',
                'city_name_ar' => 'مشرع بلقصيري',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            196 => 
            array (
                'id' => 198,
                'city_name_fr' => 'Missour',
                'city_name_ar' => 'ميسور',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            197 => 
            array (
                'id' => 199,
                'city_name_fr' => 'Ouislane',
                'city_name_ar' => 'ويسلان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            198 => 
            array (
                'id' => 200,
                'city_name_fr' => 'Oued Zem',
                'city_name_ar' => 'واد زم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            199 => 
            array (
                'id' => 201,
                'city_name_fr' => 'M’Rirt',
                'city_name_ar' => 'مريرت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            200 => 
            array (
                'id' => 202,
                'city_name_fr' => 'Oued amlil',
                'city_name_ar' => 'واد امليل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            201 => 
            array (
                'id' => 203,
                'city_name_fr' => 'Moulay Driss Zerhoun',
                'city_name_ar' => 'مولاي ادريس زرهون',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            202 => 
            array (
                'id' => 204,
                'city_name_fr' => 'Aoulad Ayad',
                'city_name_ar' => 'اولاد عياد',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            203 => 
            array (
                'id' => 205,
                'city_name_fr' => 'Aoulad Berhil',
                'city_name_ar' => 'اولاد برحيل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            204 => 
            array (
                'id' => 206,
                'city_name_fr' => 'Oulad Ghadbane',
                'city_name_ar' => 'اولاد غدبان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            205 => 
            array (
                'id' => 207,
                'city_name_fr' => 'Oulad M’Barek',
                'city_name_ar' => 'اولاد مبارك',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            206 => 
            array (
                'id' => 208,
                'city_name_fr' => 'Oulad Tayeb',
                'city_name_ar' => 'اولاد الطيب',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            207 => 
            array (
                'id' => 209,
                'city_name_fr' => 'Oulad teïma',
                'city_name_ar' => 'اولاد تايمة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            208 => 
            array (
                'id' => 210,
                'city_name_fr' => 'Oulmès',
                'city_name_ar' => 'اولماس',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            209 => 
            array (
                'id' => 211,
                'city_name_fr' => 'Outat El Haj',
                'city_name_ar' => 'الوطاط الحاج',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            210 => 
            array (
                'id' => 212,
                'city_name_fr' => 'Ras El Aïn',
                'city_name_ar' => 'راس العين',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            211 => 
            array (
                'id' => 213,
                'city_name_fr' => 'Ras El Ma',
                'city_name_ar' => 'راس الماء',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            212 => 
            array (
                'id' => 214,
                'city_name_fr' => 'Ribate El Kheïr',
                'city_name_ar' => 'رباط الخير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            213 => 
            array (
                'id' => 215,
                'city_name_fr' => 'Sabaa Aiyoun',
                'city_name_ar' => 'سبع العيون',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            214 => 
            array (
                'id' => 216,
                'city_name_fr' => 'Asfi',
                'city_name_ar' => 'آسفي',
                'city_status' => 1,
                'is_default' => 0,
            ),
            215 => 
            array (
                'id' => 218,
                'city_name_fr' => 'Sidi Boubker',
                'city_name_ar' => 'سيدي بوبكر',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            216 => 
            array (
                'id' => 219,
                'city_name_fr' => 'Sidi Bouknadel',
                'city_name_ar' => 'سيدي بوقنادل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            217 => 
            array (
                'id' => 220,
                'city_name_fr' => 'Sidi Kacem',
                'city_name_ar' => 'سيدي قاسم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            218 => 
            array (
                'id' => 221,
                'city_name_fr' => 'Sidi Lyamani',
                'city_name_ar' => 'سيدي اليمني',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            219 => 
            array (
                'id' => 222,
                'city_name_fr' => 'Sidi rahhal',
                'city_name_ar' => 'سيدي رحال',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            220 => 
            array (
                'id' => 227,
                'city_name_fr' => 'Souk Sebt Oulad Nemma',
                'city_name_ar' => 'سوق السبت اولاد النمة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            221 => 
            array (
                'id' => 224,
                'city_name_fr' => 'Rehamna',
                'city_name_ar' => 'الرحامنة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            222 => 
            array (
                'id' => 225,
                'city_name_fr' => 'Skoura',
                'city_name_ar' => 'سكورة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            223 => 
            array (
                'id' => 226,
                'city_name_fr' => 'Soualem',
                'city_name_ar' => 'السوالم',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            224 => 
            array (
                'id' => 228,
                'city_name_fr' => 'Tahannaout',
                'city_name_ar' => 'تحناوت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            225 => 
            array (
                'id' => 229,
                'city_name_fr' => 'Tahla',
                'city_name_ar' => 'تاهلة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            226 => 
            array (
                'id' => 230,
                'city_name_fr' => 'Tamallalt',
                'city_name_ar' => 'تملالت',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            227 => 
            array (
                'id' => 231,
                'city_name_fr' => 'Tinghir',
                'city_name_ar' => 'تنغير',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            228 => 
            array (
                'id' => 232,
                'city_name_fr' => 'Tissa',
                'city_name_ar' => 'تيسة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            229 => 
            array (
                'id' => 233,
                'city_name_fr' => 'Tit Mellil',
                'city_name_ar' => 'تيط مليل',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            230 => 
            array (
                'id' => 234,
                'city_name_fr' => 'Toulal',
                'city_name_ar' => 'تولال',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            231 => 
            array (
                'id' => 235,
                'city_name_fr' => 'Zag',
                'city_name_ar' => 'الزاك',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            232 => 
            array (
                'id' => 236,
                'city_name_fr' => 'M\'diq',
                'city_name_ar' => 'المضيق',
                'city_status' => 1,
                'is_default' => 0,
            ),
            233 => 
            array (
                'id' => 237,
                'city_name_fr' => 'Fnideq',
                'city_name_ar' => 'الفنيدق',
                'city_status' => 1,
                'is_default' => 0,
            ),
            234 => 
            array (
                'id' => 238,
                'city_name_fr' => 'Fahs anjra',
                'city_name_ar' => 'فحص انجرة',
                'city_status' => 1,
                'is_principal' => 0,
            ),
            235 => 
            array (
                'id' => 239,
                'city_name_fr' => 'ouazzane',
                'city_name_ar' => 'وزان',
                'city_status' => 1,
                'is_principal' => 0,
            ),
        ));
        
        
    }
}