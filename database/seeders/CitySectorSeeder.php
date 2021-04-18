<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CitySectorSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city_sectors')->delete();
        
        \DB::table('city_sectors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'id_city' => 4,
                'city_sector_name_fr' => 'Aïn chock',
                'city_sector_name_ar' => 'عين الشق',
                'city_sector_status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'id_city' => 4,
                'city_sector_name_fr' => 'aïn sebaâ',
                'city_sector_name_ar' => 'عين السباع',
                'city_sector_status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'id_city' => 4,
                'city_sector_name_fr' => 'Anfa',
                'city_sector_name_ar' => 'انفا',
                'city_sector_status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'id_city' => 4,
                'city_sector_name_fr' => 'Al Fida',
                'city_sector_name_ar' => 'الفيدة',
                'city_sector_status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'id_city' => 4,
                'city_sector_name_fr' => 'Ben M sick',
                'city_sector_name_ar' => 'بن مسيك',
                'city_sector_status' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sidi Bernoussi',
                'city_sector_name_ar' => 'سيدي البرنوسي',
                'city_sector_status' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay hassani',
                'city_sector_name_ar' => 'حي الحسني',
                'city_sector_status' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid',
                'city_sector_name_ar' => 'حي مولاي رشيد',
                'city_sector_status' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'id_city' => 4,
                'city_sector_name_fr' => '02-mars',
                'city_sector_name_ar' => ' 2 مارس   ',
                'city_sector_status' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'id_city' => 4,
                'city_sector_name_fr' => 'Aïn Borja',
                'city_sector_name_ar' => 'عين برجة',
                'city_sector_status' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'id_city' => 4,
                'city_sector_name_fr' => 'Aïn Diab',
                'city_sector_name_ar' => 'عين الدياب',
                'city_sector_status' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'id_city' => 4,
                'city_sector_name_fr' => 'Al batha',
                'city_sector_name_ar' => 'البطحة',
                'city_sector_status' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'id_city' => 4,
                'city_sector_name_fr' => 'Alsace Lorraine',
                'city_sector_name_ar' => 'الزاس لورين',
                'city_sector_status' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'id_city' => 4,
                'city_sector_name_fr' => 'Beauséjour',
                'city_sector_name_ar' => 'بوسيجور',
                'city_sector_status' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'id_city' => 4,
                'city_sector_name_fr' => 'Bélvédère',
                'city_sector_name_ar' => 'البلفيدير',
                'city_sector_status' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'id_city' => 4,
                'city_sector_name_fr' => 'Ben Ejdia',
                'city_sector_name_ar' => 'بن اجديا',
                'city_sector_status' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'id_city' => 4,
                'city_sector_name_fr' => 'Benmsik',
                'city_sector_name_ar' => 'بن مسيك',
                'city_sector_status' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'id_city' => 4,
                'city_sector_name_fr' => 'Bourgogne',
                'city_sector_name_ar' => 'بوركون',
                'city_sector_status' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'id_city' => 4,
                'city_sector_name_fr' => 'Californie',
                'city_sector_name_ar' => 'كاليفورنيا',
                'city_sector_status' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'id_city' => 4,
                'city_sector_name_fr' => 'Centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'id_city' => 4,
                'city_sector_name_fr' => 'C.I.L',
                'city_sector_name_ar' => 'س.ا.ل',
                'city_sector_status' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'id_city' => 4,
                'city_sector_name_fr' => 'Derb Ghallef',
                'city_sector_name_ar' => 'درب غلاف',
                'city_sector_status' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'id_city' => 4,
                'city_sector_name_fr' => 'Derb Omar',
                'city_sector_name_ar' => 'درب عمر',
                'city_sector_status' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'id_city' => 4,
                'city_sector_name_fr' => 'El manar El hank',
                'city_sector_name_ar' => 'المنار الحنك',
                'city_sector_status' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'id_city' => 4,
                'city_sector_name_fr' => 'Ferme Bretone',
                'city_sector_name_ar' => 'فيرم بريطون',
                'city_sector_status' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'id_city' => 4,
                'city_sector_name_fr' => 'Florida',
                'city_sector_name_ar' => 'فلوريدا',
                'city_sector_status' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'id_city' => 4,
                'city_sector_name_fr' => 'Foncière',
                'city_sector_name_ar' => 'فوسياغ',
                'city_sector_status' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'id_city' => 4,
                'city_sector_name_fr' => 'Gauthier',
                'city_sector_name_ar' => 'غوتيي',
                'city_sector_status' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'id_city' => 4,
                'city_sector_name_fr' => 'Habous',
                'city_sector_name_ar' => 'حبوس',
                'city_sector_status' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Mohammadi',
                'city_sector_name_ar' => 'حي المحمدي',
                'city_sector_status' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay hana',
                'city_sector_name_ar' => 'حي هانة',
                'city_sector_status' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay inara',
                'city_sector_name_ar' => 'حي الانارة',
                'city_sector_status' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Laymouna',
                'city_sector_name_ar' => 'حي ليمونة',
                'city_sector_status' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hermitage',
                'city_sector_name_ar' => 'ارميتاج',
                'city_sector_status' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hippodrome',
                'city_sector_name_ar' => 'ايبودروم',
                'city_sector_status' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hôrloge',
                'city_sector_name_ar' => 'اوغلوج',
                'city_sector_status' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'id_city' => 4,
                'city_sector_name_fr' => 'Industriel Nord',
                'city_sector_name_ar' => 'الصناعية الشمال',
                'city_sector_status' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'id_city' => 4,
                'city_sector_name_fr' => 'La gare',
                'city_sector_name_ar' => 'المحطة',
                'city_sector_status' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'id_city' => 4,
                'city_sector_name_fr' => 'La gironde',
                'city_sector_name_ar' => 'لا جيرود',
                'city_sector_status' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'id_city' => 4,
                'city_sector_name_fr' => 'Laimoune',
                'city_sector_name_ar' => 'ليمون',
                'city_sector_status' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'id_city' => 4,
                'city_sector_name_fr' => 'Les camps',
                'city_sector_name_ar' => 'ليكامب',
                'city_sector_status' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'id_city' => 4,
                'city_sector_name_fr' => 'Les cretes',
                'city_sector_name_ar' => 'لي كريط',
                'city_sector_status' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'id_city' => 4,
                'city_sector_name_fr' => 'Les Princesses',
                'city_sector_name_ar' => 'الاميرات',
                'city_sector_status' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'id_city' => 4,
                'city_sector_name_fr' => 'Lissasfa',
                'city_sector_name_ar' => 'ليساسفة',
                'city_sector_status' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'id_city' => 4,
                'city_sector_name_fr' => 'Longchamps',
                'city_sector_name_ar' => 'لونغ شون',
                'city_sector_status' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'id_city' => 4,
                'city_sector_name_fr' => 'Lusitania',
                'city_sector_name_ar' => 'لوسيطانيا',
                'city_sector_status' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'id_city' => 4,
                'city_sector_name_fr' => 'Maarif',
                'city_sector_name_ar' => 'المعارف',
                'city_sector_status' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'id_city' => 4,
                'city_sector_name_fr' => 'Mers sultan',
                'city_sector_name_ar' => 'مرس السلطان',
                'city_sector_status' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'id_city' => 4,
                'city_sector_name_fr' => 'Oasis',
                'city_sector_name_ar' => 'اواسيس',
                'city_sector_status' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'id_city' => 4,
                'city_sector_name_fr' => 'Oulfa',
                'city_sector_name_ar' => 'الولفا',
                'city_sector_status' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'id_city' => 4,
                'city_sector_name_fr' => 'Palmier',
                'city_sector_name_ar' => 'بالميي',
                'city_sector_status' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'id_city' => 4,
                'city_sector_name_fr' => 'Parc',
                'city_sector_name_ar' => 'بارك',
                'city_sector_status' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'id_city' => 4,
                'city_sector_name_fr' => 'Polo',
                'city_sector_name_ar' => 'بولو',
                'city_sector_status' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'id_city' => 4,
                'city_sector_name_fr' => 'Quartier des hôpitaux',
                'city_sector_name_ar' => 'حي المستشفيات',
                'city_sector_status' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'id_city' => 4,
                'city_sector_name_fr' => 'Racine',
                'city_sector_name_ar' => 'راسين',
                'city_sector_status' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'id_city' => 4,
                'city_sector_name_fr' => 'Riviera',
                'city_sector_name_ar' => 'ريفيرا',
                'city_sector_status' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'id_city' => 4,
                'city_sector_name_fr' => 'Roches Noires',
                'city_sector_name_ar' => 'الصخور السوداء',
                'city_sector_status' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'id_city' => 4,
                'city_sector_name_fr' => 'Routes d Azzemour',
                'city_sector_name_ar' => 'طريق ازمور',
                'city_sector_status' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'id_city' => 4,
                'city_sector_name_fr' => 'Route d El jadida',
                'city_sector_name_ar' => 'طريق الجديدة',
                'city_sector_status' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sbata',
                'city_sector_name_ar' => 'سباتة',
                'city_sector_status' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sidi Belyout',
                'city_sector_name_ar' => 'سيدي بليوت',
                'city_sector_status' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sidi Maarouf',
                'city_sector_name_ar' => 'سيدي معروف',
                'city_sector_status' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sidi Moumen',
                'city_sector_name_ar' => 'سيدي مومن',
                'city_sector_status' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sidi Othmane',
                'city_sector_name_ar' => 'سيدي عتمان',
                'city_sector_status' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'id_city' => 4,
                'city_sector_name_fr' => 'Sour Jdid',
                'city_sector_name_ar' => 'السور الجديد',
                'city_sector_status' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'id_city' => 4,
                'city_sector_name_fr' => 'Tantonville',
                'city_sector_name_ar' => 'تانتون فيل',
                'city_sector_status' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'id_city' => 4,
                'city_sector_name_fr' => 'Triangle d Or',
                'city_sector_name_ar' => 'المثلث الدهبي',
                'city_sector_status' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'id_city' => 4,
                'city_sector_name_fr' => 'Val d Anfa',
                'city_sector_name_ar' => 'فال انفا',
                'city_sector_status' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'id_city' => 4,
                'city_sector_name_fr' => 'Val Fleuri',
                'city_sector_name_ar' => 'فال فلوري',
                'city_sector_status' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'id_city' => 4,
                'city_sector_name_fr' => 'Alqods',
                'city_sector_name_ar' => 'القدس',
                'city_sector_status' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'id_city' => 4,
                'city_sector_name_fr' => 'Bernoussi',
                'city_sector_name_ar' => 'البرنوسي',
                'city_sector_status' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Al amal',
                'city_sector_name_ar' => 'حي الامال',
                'city_sector_status' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'id_city' => 4,
                'city_sector_name_fr' => 'hay Mbarka',
                'city_sector_name_ar' => 'حي مباركة',
                'city_sector_status' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Mansour',
                'city_sector_name_ar' => 'حي المنصور',
                'city_sector_status' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay tarik',
                'city_sector_name_ar' => 'حي طارق',
                'city_sector_status' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'id_city' => 4,
                'city_sector_name_fr' => 'Zone Industrielle',
                'city_sector_name_ar' => 'المنطقة الصناعية',
                'city_sector_status' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'id_city' => 4,
                'city_sector_name_fr' => 'Al madina El jadida',
                'city_sector_name_ar' => 'المدينة الجديدة',
                'city_sector_status' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'id_city' => 4,
                'city_sector_name_fr' => 'Boumazil',
                'city_sector_name_ar' => 'بومازل',
                'city_sector_status' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Albaraka',
                'city_sector_name_ar' => 'حي البركة',
                'city_sector_status' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Afalah',
                'city_sector_name_ar' => 'حي الفلاح',
                'city_sector_status' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Almassira1',
                'city_sector_name_ar' => 'حي المسيرة 1',
                'city_sector_status' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Almassira2',
                'city_sector_name_ar' => 'حي المسيرة 2',
                'city_sector_status' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay Almassira 3',
                'city_sector_name_ar' => 'حي المسيرة 3',
                'city_sector_status' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 1',
                'city_sector_name_ar' => 'حي مولاي رشيد 1',
                'city_sector_status' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 2',
                'city_sector_name_ar' => 'حي مولاي رشيد 2',
                'city_sector_status' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 3',
                'city_sector_name_ar' => 'حي مولاي رشيد3',
                'city_sector_status' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 4',
                'city_sector_name_ar' => ' 4حي مولاي رشيد',
                'city_sector_status' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 5',
                'city_sector_name_ar' => 'حي مولاي رشيد5',
                'city_sector_status' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay moulay rachid 6',
                'city_sector_name_ar' => 'حي مولاي رشيد6',
                'city_sector_status' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay rajaa',
                'city_sector_name_ar' => 'حي رجاء',
                'city_sector_status' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'id_city' => 4,
                'city_sector_name_fr' => 'Hay sadri',
                'city_sector_name_ar' => 'حي صدري',
                'city_sector_status' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'id_city' => 4,
                'city_sector_name_fr' => 'Zone industrielle Moulay Rachid',
                'city_sector_name_ar' => 'المنطقة الصناعية مولاي رشيد',
                'city_sector_status' => 1,
            ),
            92 => 
            array (
                'id' => 100,
                'id_city' => 1,
                'city_sector_name_fr' => 'Bouargane',
                'city_sector_name_ar' => 'بووارغان',
                'city_sector_status' => 1,
            ),
            93 => 
            array (
                'id' => 101,
                'id_city' => 1,
                'city_sector_name_fr' => 'Charaff',
                'city_sector_name_ar' => 'شرف',
                'city_sector_status' => 1,
            ),
            94 => 
            array (
                'id' => 102,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay dakhla',
                'city_sector_name_ar' => 'حي الداخلة',
                'city_sector_status' => 1,
            ),
            95 => 
            array (
                'id' => 103,
                'id_city' => 1,
                'city_sector_name_fr' => 'El houda',
                'city_sector_name_ar' => 'الهودى',
                'city_sector_status' => 1,
            ),
            96 => 
            array (
                'id' => 104,
                'id_city' => 1,
                'city_sector_name_fr' => 'Founty',
                'city_sector_name_ar' => 'فونتي',
                'city_sector_status' => 1,
            ),
            97 => 
            array (
                'id' => 105,
                'id_city' => 1,
                'city_sector_name_fr' => 'Haut-Founty',
                'city_sector_name_ar' => 'هوت فونتي',
                'city_sector_status' => 1,
            ),
            98 => 
            array (
                'id' => 106,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay mohammadi',
                'city_sector_name_ar' => 'حي المحمدي',
                'city_sector_status' => 1,
            ),
            99 => 
            array (
                'id' => 107,
                'id_city' => 1,
                'city_sector_name_fr' => 'Lligh',
                'city_sector_name_ar' => 'الليغ',
                'city_sector_status' => 1,
            ),
            100 => 
            array (
                'id' => 108,
                'id_city' => 1,
                'city_sector_name_fr' => 'Lkhiam',
                'city_sector_name_ar' => 'الخيام',
                'city_sector_status' => 1,
            ),
            101 => 
            array (
                'id' => 109,
                'id_city' => 1,
                'city_sector_name_fr' => 'le bord de mer ',
                'city_sector_name_ar' => 'شاطئ البحر',
                'city_sector_status' => 1,
            ),
            102 => 
            array (
                'id' => 110,
                'id_city' => 1,
                'city_sector_name_fr' => ' centre  ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            103 => 
            array (
                'id' => 111,
                'id_city' => 1,
                'city_sector_name_fr' => 'Les amicales ',
                'city_sector_name_ar' => 'اميكال',
                'city_sector_status' => 1,
            ),
            104 => 
            array (
                'id' => 112,
                'id_city' => 1,
                'city_sector_name_fr' => 'Najah',
                'city_sector_name_ar' => 'النجاح',
                'city_sector_status' => 1,
            ),
            105 => 
            array (
                'id' => 113,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay Qods',
                'city_sector_name_ar' => 'حي القدس',
                'city_sector_status' => 1,
            ),
            106 => 
            array (
                'id' => 114,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay salam',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            107 => 
            array (
                'id' => 115,
                'id_city' => 1,
                'city_sector_name_fr' => 'Suisse ',
                'city_sector_name_ar' => 'سويسرا',
                'city_sector_status' => 1,
            ),
            108 => 
            array (
                'id' => 116,
                'id_city' => 1,
                'city_sector_name_fr' => 'Talborjt',
                'city_sector_name_ar' => 'تلبرجت',
                'city_sector_status' => 1,
            ),
            109 => 
            array (
                'id' => 117,
                'id_city' => 1,
                'city_sector_name_fr' => 'Wafaa',
                'city_sector_name_ar' => 'الوفاء',
                'city_sector_status' => 1,
            ),
            110 => 
            array (
                'id' => 118,
                'id_city' => 1,
                'city_sector_name_fr' => 'Arghoud',
                'city_sector_name_ar' => 'ارغود',
                'city_sector_status' => 1,
            ),
            111 => 
            array (
                'id' => 119,
                'id_city' => 1,
                'city_sector_name_fr' => 'Alwifaq',
                'city_sector_name_ar' => 'الوفاق',
                'city_sector_status' => 1,
            ),
            112 => 
            array (
                'id' => 120,
                'id_city' => 1,
                'city_sector_name_fr' => 'Anoual Souss ',
                'city_sector_name_ar' => 'انوال سوس',
                'city_sector_status' => 1,
            ),
            113 => 
            array (
                'id' => 121,
                'id_city' => 1,
                'city_sector_name_fr' => 'Av des FAR',
                'city_sector_name_ar' => 'شارع الجيش الملكي',
                'city_sector_status' => 1,
            ),
            114 => 
            array (
                'id' => 122,
                'id_city' => 1,
                'city_sector_name_fr' => 'Av Mokawama',
                'city_sector_name_ar' => 'شارع المقاومة',
                'city_sector_status' => 1,
            ),
            115 => 
            array (
                'id' => 123,
                'id_city' => 1,
                'city_sector_name_fr' => 'Ben serguaou',
                'city_sector_name_ar' => 'بن سرغايو',
                'city_sector_status' => 1,
            ),
            116 => 
            array (
                'id' => 124,
                'id_city' => 1,
                'city_sector_name_fr' => 'Centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            117 => 
            array (
                'id' => 125,
                'id_city' => 1,
                'city_sector_name_fr' => 'Ennahda',
                'city_sector_name_ar' => 'النهضة',
                'city_sector_status' => 1,
            ),
            118 => 
            array (
                'id' => 126,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay Massira',
                'city_sector_name_ar' => 'حي المسيرة',
                'city_sector_status' => 1,
            ),
            119 => 
            array (
                'id' => 127,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay najah ',
                'city_sector_name_ar' => 'حي النجاح',
                'city_sector_status' => 1,
            ),
            120 => 
            array (
                'id' => 128,
                'id_city' => 1,
                'city_sector_name_fr' => 'Marina',
                'city_sector_name_ar' => 'مرينا',
                'city_sector_status' => 1,
            ),
            121 => 
            array (
                'id' => 129,
                'id_city' => 1,
                'city_sector_name_fr' => 'Riad salam',
                'city_sector_name_ar' => 'رياض السلام',
                'city_sector_status' => 1,
            ),
            122 => 
            array (
                'id' => 130,
                'id_city' => 1,
                'city_sector_name_fr' => 'Sonaba',
                'city_sector_name_ar' => 'صونابا',
                'city_sector_status' => 1,
            ),
            123 => 
            array (
                'id' => 131,
                'id_city' => 1,
                'city_sector_name_fr' => 'Tamaraght',
                'city_sector_name_ar' => 'تمارغت',
                'city_sector_status' => 1,
            ),
            124 => 
            array (
                'id' => 132,
                'id_city' => 1,
                'city_sector_name_fr' => 'Tilila',
                'city_sector_name_ar' => 'تيليلا',
                'city_sector_status' => 1,
            ),
            125 => 
            array (
                'id' => 133,
                'id_city' => 1,
                'city_sector_name_fr' => 'Ville nouvelle',
                'city_sector_name_ar' => 'المدينة الجديدة',
                'city_sector_status' => 1,
            ),
            126 => 
            array (
                'id' => 134,
                'id_city' => 1,
                'city_sector_name_fr' => 'Wifaq',
                'city_sector_name_ar' => 'وفاق',
                'city_sector_status' => 1,
            ),
            127 => 
            array (
                'id' => 135,
                'id_city' => 1,
                'city_sector_name_fr' => 'Abbattoirs',
                'city_sector_name_ar' => 'اباطوار',
                'city_sector_status' => 1,
            ),
            128 => 
            array (
                'id' => 136,
                'id_city' => 1,
                'city_sector_name_fr' => 'Agadir Oufella',
                'city_sector_name_ar' => 'اكادير ولفا',
                'city_sector_status' => 1,
            ),
            129 => 
            array (
                'id' => 137,
                'id_city' => 1,
                'city_sector_name_fr' => 'Amicales',
                'city_sector_name_ar' => 'اميكال',
                'city_sector_status' => 1,
            ),
            130 => 
            array (
                'id' => 138,
                'id_city' => 1,
                'city_sector_name_fr' => 'Amsemate',
                'city_sector_name_ar' => 'امسيماط',
                'city_sector_status' => 1,
            ),
            131 => 
            array (
                'id' => 139,
                'id_city' => 1,
                'city_sector_name_fr' => 'Anahda',
                'city_sector_name_ar' => 'النهضة',
                'city_sector_status' => 1,
            ),
            132 => 
            array (
                'id' => 140,
                'id_city' => 1,
                'city_sector_name_fr' => 'Anza',
                'city_sector_name_ar' => 'انزا',
                'city_sector_status' => 1,
            ),
            133 => 
            array (
                'id' => 141,
                'id_city' => 1,
                'city_sector_name_fr' => 'Assaka',
                'city_sector_name_ar' => 'اساكا',
                'city_sector_status' => 1,
            ),
            134 => 
            array (
                'id' => 142,
                'id_city' => 1,
                'city_sector_name_fr' => 'Boutchakat',
                'city_sector_name_ar' => 'بوتشكات',
                'city_sector_status' => 1,
            ),
            135 => 
            array (
                'id' => 143,
                'id_city' => 1,
                'city_sector_name_fr' => 'Charaf',
                'city_sector_name_ar' => 'شرف',
                'city_sector_status' => 1,
            ),
            136 => 
            array (
                'id' => 144,
                'id_city' => 1,
                'city_sector_name_fr' => 'Cité Adrar ',
                'city_sector_name_ar' => 'سيتي ادرار',
                'city_sector_status' => 1,
            ),
            137 => 
            array (
                'id' => 145,
                'id_city' => 1,
                'city_sector_name_fr' => 'Extension dakhla',
                'city_sector_name_ar' => 'وسعة الدخلة',
                'city_sector_status' => 1,
            ),
            138 => 
            array (
                'id' => 146,
                'id_city' => 1,
                'city_sector_name_fr' => 'Founti',
                'city_sector_name_ar' => 'فونتي',
                'city_sector_status' => 1,
            ),
            139 => 
            array (
                'id' => 147,
                'id_city' => 1,
                'city_sector_name_fr' => 'Haut anza',
                'city_sector_name_ar' => 'اوت انزا',
                'city_sector_status' => 1,
            ),
            140 => 
            array (
                'id' => 148,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay Al farah ',
                'city_sector_name_ar' => 'حي الفرح',
                'city_sector_status' => 1,
            ),
            141 => 
            array (
                'id' => 149,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay Al wafaa',
                'city_sector_name_ar' => 'حي الوفاء',
                'city_sector_status' => 1,
            ),
            142 => 
            array (
                'id' => 150,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay Hassani ',
                'city_sector_name_ar' => 'حي الحسني',
                'city_sector_status' => 1,
            ),
            143 => 
            array (
                'id' => 151,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay houda',
                'city_sector_name_ar' => 'عين عودة',
                'city_sector_status' => 1,
            ),
            144 => 
            array (
                'id' => 152,
                'id_city' => 1,
                'city_sector_name_fr' => 'Hay zaytoun',
                'city_sector_name_ar' => 'حي زيتون',
                'city_sector_status' => 1,
            ),
            145 => 
            array (
                'id' => 153,
                'id_city' => 1,
                'city_sector_name_fr' => 'Lhchach',
                'city_sector_name_ar' => 'لهشاش',
                'city_sector_status' => 1,
            ),
            146 => 
            array (
                'id' => 154,
                'id_city' => 1,
                'city_sector_name_fr' => 'Lligh',
                'city_sector_name_ar' => 'لايت',
                'city_sector_status' => 1,
            ),
            147 => 
            array (
                'id' => 155,
                'id_city' => 1,
                'city_sector_name_fr' => 'Laazib',
                'city_sector_name_ar' => 'العزيب',
                'city_sector_status' => 1,
            ),
            148 => 
            array (
                'id' => 156,
                'id_city' => 1,
                'city_sector_name_fr' => 'Lekhiam',
                'city_sector_name_ar' => 'لخيام',
                'city_sector_status' => 1,
            ),
            149 => 
            array (
                'id' => 157,
                'id_city' => 1,
                'city_sector_name_fr' => 'Port',
                'city_sector_name_ar' => 'الميناء',
                'city_sector_status' => 1,
            ),
            150 => 
            array (
                'id' => 158,
                'id_city' => 1,
                'city_sector_name_fr' => 'Secteur touristique',
                'city_sector_name_ar' => 'المنطقة السياحية',
                'city_sector_status' => 1,
            ),
            151 => 
            array (
                'id' => 159,
                'id_city' => 1,
                'city_sector_name_fr' => 'Suisse',
                'city_sector_name_ar' => 'السويس',
                'city_sector_status' => 1,
            ),
            152 => 
            array (
                'id' => 160,
                'id_city' => 1,
                'city_sector_name_fr' => 'Taddart',
                'city_sector_name_ar' => 'تادرت',
                'city_sector_status' => 1,
            ),
            153 => 
            array (
                'id' => 161,
                'id_city' => 1,
                'city_sector_name_fr' => 'Taddart Anza',
                'city_sector_name_ar' => 'تدارت انزا',
                'city_sector_status' => 1,
            ),
            154 => 
            array (
                'id' => 162,
                'id_city' => 1,
                'city_sector_name_fr' => 'Zone industrielle Agadir',
                'city_sector_name_ar' => 'المنطقة الصناعية اكادير',
                'city_sector_status' => 1,
            ),
            155 => 
            array (
                'id' => 200,
                'id_city' => 5,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط  المدينة',
                'city_sector_status' => 1,
            ),
            156 => 
            array (
                'id' => 201,
                'id_city' => 5,
                'city_sector_name_fr' => 'Alaouiyine',
                'city_sector_name_ar' => 'العلويين',
                'city_sector_status' => 1,
            ),
            157 => 
            array (
                'id' => 202,
                'id_city' => 5,
                'city_sector_name_fr' => 'Amal',
                'city_sector_name_ar' => 'الامل',
                'city_sector_status' => 1,
            ),
            158 => 
            array (
                'id' => 203,
                'id_city' => 5,
                'city_sector_name_fr' => 'Najd',
                'city_sector_name_ar' => 'النجد',
                'city_sector_status' => 1,
            ),
            159 => 
            array (
                'id' => 204,
                'id_city' => 5,
                'city_sector_name_fr' => 'Saada',
                'city_sector_name_ar' => 'السعادة',
                'city_sector_status' => 1,
            ),
            160 => 
            array (
                'id' => 205,
                'id_city' => 5,
                'city_sector_name_fr' => 'Salama',
                'city_sector_name_ar' => 'سلامة',
                'city_sector_status' => 1,
            ),
            161 => 
            array (
                'id' => 206,
                'id_city' => 5,
                'city_sector_name_fr' => 'Al boustane',
                'city_sector_name_ar' => 'البستان',
                'city_sector_status' => 1,
            ),
            162 => 
            array (
                'id' => 207,
                'id_city' => 5,
                'city_sector_name_fr' => 'Alkalaa',
                'city_sector_name_ar' => 'القلعة',
                'city_sector_status' => 1,
            ),
            163 => 
            array (
                'id' => 208,
                'id_city' => 5,
                'city_sector_name_fr' => 'Alkodia',
                'city_sector_name_ar' => 'الكدية',
                'city_sector_status' => 1,
            ),
            164 => 
            array (
                'id' => 209,
                'id_city' => 5,
                'city_sector_name_fr' => 'Al Qods',
                'city_sector_name_ar' => 'القدس',
                'city_sector_status' => 1,
            ),
            165 => 
            array (
                'id' => 210,
                'id_city' => 5,
                'city_sector_name_fr' => 'Biranzarane',
                'city_sector_name_ar' => 'بيرانزاران',
                'city_sector_status' => 1,
            ),
            166 => 
            array (
                'id' => 211,
                'id_city' => 5,
                'city_sector_name_fr' => 'Cheminoits',
                'city_sector_name_ar' => 'شمينوة',
                'city_sector_status' => 1,
            ),
            167 => 
            array (
                'id' => 212,
                'id_city' => 5,
                'city_sector_name_fr' => 'Cité des cadres',
                'city_sector_name_ar' => 'سيتي الأطر',
                'city_sector_status' => 1,
            ),
            168 => 
            array (
                'id' => 213,
                'id_city' => 5,
                'city_sector_name_fr' => 'Cité Portugaise ',
                'city_sector_name_ar' => 'حي البرتغال',
                'city_sector_status' => 1,
            ),
            169 => 
            array (
                'id' => 214,
                'id_city' => 5,
                'city_sector_name_fr' => 'Corniche ',
                'city_sector_name_ar' => 'الكورنيش',
                'city_sector_status' => 1,
            ),
            170 => 
            array (
                'id' => 215,
                'id_city' => 5,
                'city_sector_name_fr' => 'Dar essalam',
                'city_sector_name_ar' => 'درب السلام',
                'city_sector_status' => 1,
            ),
            171 => 
            array (
                'id' => 216,
                'id_city' => 5,
                'city_sector_name_fr' => 'Derb Al hajjar ',
                'city_sector_name_ar' => 'درب الحجار',
                'city_sector_status' => 1,
            ),
            172 => 
            array (
                'id' => 217,
                'id_city' => 5,
                'city_sector_name_fr' => 'Derb ghalef',
                'city_sector_name_ar' => 'درب غلاف',
                'city_sector_status' => 1,
            ),
            173 => 
            array (
                'id' => 218,
                'id_city' => 5,
                'city_sector_name_fr' => 'Derb lahona',
                'city_sector_name_ar' => 'درب لاهونا',
                'city_sector_status' => 1,
            ),
            174 => 
            array (
                'id' => 219,
                'id_city' => 5,
                'city_sector_name_fr' => 'Derb sidi daoui',
                'city_sector_name_ar' => 'درب سيدي الداوي',
                'city_sector_status' => 1,
            ),
            175 => 
            array (
                'id' => 220,
                'id_city' => 5,
                'city_sector_name_fr' => 'Ezzohor',
                'city_sector_name_ar' => 'الزهور',
                'city_sector_status' => 1,
            ),
            176 => 
            array (
                'id' => 221,
                'id_city' => 5,
                'city_sector_name_fr' => 'Hay el amal',
                'city_sector_name_ar' => 'حي الامل',
                'city_sector_status' => 1,
            ),
            177 => 
            array (
                'id' => 222,
                'id_city' => 5,
                'city_sector_name_fr' => 'Hay essalam ',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            178 => 
            array (
                'id' => 223,
                'id_city' => 5,
                'city_sector_name_fr' => 'Hay nassim ',
                'city_sector_name_ar' => 'حي نسيم',
                'city_sector_status' => 1,
            ),
            179 => 
            array (
                'id' => 224,
                'id_city' => 5,
                'city_sector_name_fr' => 'Hay riad ',
                'city_sector_name_ar' => 'حي الرياض',
                'city_sector_status' => 1,
            ),
            180 => 
            array (
                'id' => 225,
                'id_city' => 5,
                'city_sector_name_fr' => 'Jawhara',
                'city_sector_name_ar' => 'جوهرة',
                'city_sector_status' => 1,
            ),
            181 => 
            array (
                'id' => 226,
                'id_city' => 5,
                'city_sector_name_fr' => 'Lalla zahra',
                'city_sector_name_ar' => 'لالة زهرة',
                'city_sector_status' => 1,
            ),
            182 => 
            array (
                'id' => 227,
                'id_city' => 5,
                'city_sector_name_fr' => 'Lot rida',
                'city_sector_name_ar' => 'لو رضا',
                'city_sector_status' => 1,
            ),
            183 => 
            array (
                'id' => 228,
                'id_city' => 5,
                'city_sector_name_fr' => 'Mouilha',
                'city_sector_name_ar' => 'مويلحة',
                'city_sector_status' => 1,
            ),
            184 => 
            array (
                'id' => 229,
                'id_city' => 5,
                'city_sector_name_fr' => 'Najmat al janoub',
                'city_sector_name_ar' => 'نجمة الجنوب',
                'city_sector_status' => 1,
            ),
            185 => 
            array (
                'id' => 230,
                'id_city' => 5,
                'city_sector_name_fr' => 'Narjis',
                'city_sector_name_ar' => 'نرجس',
                'city_sector_status' => 1,
            ),
            186 => 
            array (
                'id' => 231,
                'id_city' => 5,
                'city_sector_name_fr' => 'Plateau',
                'city_sector_name_ar' => 'بلاطو',
                'city_sector_status' => 1,
            ),
            187 => 
            array (
                'id' => 232,
                'id_city' => 5,
                'city_sector_name_fr' => 'Port ',
                'city_sector_name_ar' => 'الميناء',
                'city_sector_status' => 1,
            ),
            188 => 
            array (
                'id' => 233,
                'id_city' => 5,
                'city_sector_name_fr' => 'Quartier Aérodrome',
                'city_sector_name_ar' => 'حي المطار',
                'city_sector_status' => 1,
            ),
            189 => 
            array (
                'id' => 234,
                'id_city' => 5,
                'city_sector_name_fr' => 'Autres secteurs.',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            190 => 
            array (
                'id' => 300,
                'id_city' => 7,
                'city_sector_name_fr' => 'Agdal',
                'city_sector_name_ar' => 'اكدال',
                'city_sector_status' => 1,
            ),
            191 => 
            array (
                'id' => 301,
                'id_city' => 7,
                'city_sector_name_fr' => 'Fes medina',
                'city_sector_name_ar' => 'فاس المدينة',
                'city_sector_status' => 1,
            ),
            192 => 
            array (
                'id' => 302,
                'id_city' => 7,
                'city_sector_name_fr' => 'Jnan el ward',
                'city_sector_name_ar' => 'جنان الورد',
                'city_sector_status' => 1,
            ),
            193 => 
            array (
                'id' => 303,
                'id_city' => 7,
                'city_sector_name_fr' => 'Les merinides',
                'city_sector_name_ar' => 'لي مرينيد',
                'city_sector_status' => 1,
            ),
            194 => 
            array (
                'id' => 304,
                'id_city' => 7,
                'city_sector_name_fr' => 'Saies',
                'city_sector_name_ar' => 'سايس',
                'city_sector_status' => 1,
            ),
            195 => 
            array (
                'id' => 305,
                'id_city' => 7,
                'city_sector_name_fr' => 'Zouagha',
                'city_sector_name_ar' => 'الزواغة',
                'city_sector_status' => 1,
            ),
            196 => 
            array (
                'id' => 306,
                'id_city' => 7,
                'city_sector_name_fr' => 'Ain haroun',
                'city_sector_name_ar' => 'عين هارون',
                'city_sector_status' => 1,
            ),
            197 => 
            array (
                'id' => 307,
                'id_city' => 7,
                'city_sector_name_fr' => 'Ancienne Medina',
                'city_sector_name_ar' => 'المدينة العتيقة',
                'city_sector_status' => 1,
            ),
            198 => 
            array (
                'id' => 308,
                'id_city' => 7,
                'city_sector_name_fr' => 'Ben souda',
                'city_sector_name_ar' => 'بن سودة',
                'city_sector_status' => 1,
            ),
            199 => 
            array (
                'id' => 309,
                'id_city' => 7,
                'city_sector_name_fr' => 'Dar dbibagh',
                'city_sector_name_ar' => 'دار دبيباغ',
                'city_sector_status' => 1,
            ),
            200 => 
            array (
                'id' => 310,
                'id_city' => 7,
                'city_sector_name_fr' => 'Dar meherez',
                'city_sector_name_ar' => 'دار المهراز',
                'city_sector_status' => 1,
            ),
            201 => 
            array (
                'id' => 311,
                'id_city' => 7,
                'city_sector_name_fr' => 'Hay saada',
                'city_sector_name_ar' => 'حي السعادة',
                'city_sector_status' => 1,
            ),
            202 => 
            array (
                'id' => 312,
                'id_city' => 7,
                'city_sector_name_fr' => 'Lyrac',
                'city_sector_name_ar' => 'ليراك',
                'city_sector_status' => 1,
            ),
            203 => 
            array (
                'id' => 313,
                'id_city' => 7,
                'city_sector_name_fr' => 'Mellah',
                'city_sector_name_ar' => 'الملاح',
                'city_sector_status' => 1,
            ),
            204 => 
            array (
                'id' => 314,
                'id_city' => 7,
                'city_sector_name_fr' => 'Mont fleuri',
                'city_sector_name_ar' => 'مون فلوري',
                'city_sector_status' => 1,
            ),
            205 => 
            array (
                'id' => 315,
                'id_city' => 7,
                'city_sector_name_fr' => 'Moulay Abdllah',
                'city_sector_name_ar' => 'مولاي عبد الله',
                'city_sector_status' => 1,
            ),
            206 => 
            array (
                'id' => 316,
                'id_city' => 7,
                'city_sector_name_fr' => 'Oued fes',
                'city_sector_name_ar' => 'واد فاس',
                'city_sector_status' => 1,
            ),
            207 => 
            array (
                'id' => 317,
                'id_city' => 7,
                'city_sector_name_fr' => 'Place Alaouine',
                'city_sector_name_ar' => 'ساحة العلويين',
                'city_sector_status' => 1,
            ),
            208 => 
            array (
                'id' => 318,
                'id_city' => 7,
                'city_sector_name_fr' => 'Talaa',
                'city_sector_name_ar' => 'طالعة',
                'city_sector_status' => 1,
            ),
            209 => 
            array (
                'id' => 319,
                'id_city' => 7,
                'city_sector_name_fr' => 'Route d Imouzzare',
                'city_sector_name_ar' => 'طريق المزار',
                'city_sector_status' => 1,
            ),
            210 => 
            array (
                'id' => 320,
                'id_city' => 7,
                'city_sector_name_fr' => 'Mont fleuri2 ',
                'city_sector_name_ar' => 'مون فلوري 2',
                'city_sector_status' => 1,
            ),
            211 => 
            array (
                'id' => 321,
                'id_city' => 7,
                'city_sector_name_fr' => 'Route d Aeroport',
                'city_sector_name_ar' => 'طريق المطار',
                'city_sector_status' => 1,
            ),
            212 => 
            array (
                'id' => 322,
                'id_city' => 7,
                'city_sector_name_fr' => 'Ouled Tayeb',
                'city_sector_name_ar' => 'ولاد طيب',
                'city_sector_status' => 1,
            ),
            213 => 
            array (
                'id' => 323,
                'id_city' => 7,
                'city_sector_name_fr' => 'Route de sefrou',
                'city_sector_name_ar' => 'طريق صفرو',
                'city_sector_status' => 1,
            ),
            214 => 
            array (
                'id' => 324,
                'id_city' => 7,
                'city_sector_name_fr' => 'Route ain chkaf',
                'city_sector_name_ar' => 'طريق عين الشقاف',
                'city_sector_status' => 1,
            ),
            215 => 
            array (
                'id' => 325,
                'id_city' => 7,
                'city_sector_name_fr' => 'Narjis',
                'city_sector_name_ar' => 'نرجس',
                'city_sector_status' => 1,
            ),
            216 => 
            array (
                'id' => 326,
                'id_city' => 7,
                'city_sector_name_fr' => 'boutaaa',
                'city_sector_name_ar' => 'بوتعى',
                'city_sector_status' => 1,
            ),
            217 => 
            array (
                'id' => 327,
                'id_city' => 7,
                'city_sector_name_fr' => 'El keddan',
                'city_sector_name_ar' => 'الكدان',
                'city_sector_status' => 1,
            ),
            218 => 
            array (
                'id' => 328,
                'id_city' => 7,
                'city_sector_name_fr' => 'El mokhfia',
                'city_sector_name_ar' => 'المخفية',
                'city_sector_status' => 1,
            ),
            219 => 
            array (
                'id' => 329,
                'id_city' => 7,
                'city_sector_name_fr' => 'Laayoune',
                'city_sector_name_ar' => 'العيون',
                'city_sector_status' => 1,
            ),
            220 => 
            array (
                'id' => 330,
                'id_city' => 7,
                'city_sector_name_fr' => 'kasbat Ennouar',
                'city_sector_name_ar' => 'قاصبة النوار',
                'city_sector_status' => 1,
            ),
            221 => 
            array (
                'id' => 331,
                'id_city' => 7,
                'city_sector_name_fr' => 'Rahebet zbib',
                'city_sector_name_ar' => 'رحبة الزبيب',
                'city_sector_status' => 1,
            ),
            222 => 
            array (
                'id' => 332,
                'id_city' => 7,
                'city_sector_name_fr' => 'Zekak Erroumane',
                'city_sector_name_ar' => 'زقاق الرمان',
                'city_sector_status' => 1,
            ),
            223 => 
            array (
                'id' => 333,
                'id_city' => 7,
                'city_sector_name_fr' => 'Bab boujloud',
                'city_sector_name_ar' => 'باب بوجلود',
                'city_sector_status' => 1,
            ),
            224 => 
            array (
                'id' => 334,
                'id_city' => 7,
                'city_sector_name_fr' => 'Batha',
                'city_sector_name_ar' => 'باطحة',
                'city_sector_status' => 1,
            ),
            225 => 
            array (
                'id' => 335,
                'id_city' => 7,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط  المدينة',
                'city_sector_status' => 1,
            ),
            226 => 
            array (
                'id' => 336,
                'id_city' => 7,
                'city_sector_name_fr' => 'douh',
                'city_sector_name_ar' => 'دوح',
                'city_sector_status' => 1,
            ),
            227 => 
            array (
                'id' => 337,
                'id_city' => 7,
                'city_sector_name_fr' => 'hamria',
                'city_sector_name_ar' => 'الحمرية',
                'city_sector_status' => 1,
            ),
            228 => 
            array (
                'id' => 338,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay atlas',
                'city_sector_name_ar' => 'حي الاطلس',
                'city_sector_status' => 1,
            ),
            229 => 
            array (
                'id' => 339,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay fadela',
                'city_sector_name_ar' => 'حي فضيلة',
                'city_sector_status' => 1,
            ),
            230 => 
            array (
                'id' => 340,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay palestine',
                'city_sector_name_ar' => 'حي فلسطين',
                'city_sector_status' => 1,
            ),
            231 => 
            array (
                'id' => 341,
                'id_city' => 7,
                'city_sector_name_fr' => 'route de meknes',
                'city_sector_name_ar' => 'طريق مكناس',
                'city_sector_status' => 1,
            ),
            232 => 
            array (
                'id' => 342,
                'id_city' => 7,
                'city_sector_name_fr' => 'sidi brahim',
                'city_sector_name_ar' => 'سيدي ابراهيم',
                'city_sector_status' => 1,
            ),
            233 => 
            array (
                'id' => 343,
                'id_city' => 7,
                'city_sector_name_fr' => 'ain noqbi',
                'city_sector_name_ar' => 'عين نوقبي',
                'city_sector_status' => 1,
            ),
            234 => 
            array (
                'id' => 344,
                'id_city' => 7,
                'city_sector_name_fr' => 'jnan eddar ',
                'city_sector_name_ar' => 'جنان الدار',
                'city_sector_status' => 1,
            ),
            235 => 
            array (
                'id' => 345,
                'id_city' => 7,
                'city_sector_name_fr' => 'ouad bou fekhane',
                'city_sector_name_ar' => 'واد بوفخان',
                'city_sector_status' => 1,
            ),
            236 => 
            array (
                'id' => 346,
                'id_city' => 7,
                'city_sector_name_fr' => 'sehb el ward',
                'city_sector_name_ar' => 'سحب الورد',
                'city_sector_status' => 1,
            ),
            237 => 
            array (
                'id' => 347,
                'id_city' => 7,
                'city_sector_name_fr' => 'sehrij gnawa',
                'city_sector_name_ar' => 'سهريج كناوة',
                'city_sector_status' => 1,
            ),
            238 => 
            array (
                'id' => 348,
                'id_city' => 7,
                'city_sector_name_fr' => 'ain kadous',
                'city_sector_name_ar' => 'عين قادوس',
                'city_sector_status' => 1,
            ),
            239 => 
            array (
                'id' => 349,
                'id_city' => 7,
                'city_sector_name_fr' => 'al hadiqa',
                'city_sector_name_ar' => 'الحديقة',
                'city_sector_status' => 1,
            ),
            240 => 
            array (
                'id' => 350,
                'id_city' => 7,
                'city_sector_name_fr' => 'belkhiat',
                'city_sector_name_ar' => 'بلخياط',
                'city_sector_status' => 1,
            ),
            241 => 
            array (
                'id' => 351,
                'id_city' => 7,
                'city_sector_name_fr' => 'ben debbab ',
                'city_sector_name_ar' => 'بندباد',
                'city_sector_status' => 1,
            ),
            242 => 
            array (
                'id' => 352,
                'id_city' => 7,
                'city_sector_name_fr' => 'ben zakour',
                'city_sector_name_ar' => 'بن زكور',
                'city_sector_status' => 1,
            ),
            243 => 
            array (
                'id' => 353,
                'id_city' => 7,
                'city_sector_name_fr' => 'dher lkhmiss',
                'city_sector_name_ar' => 'دهير الخميس',
                'city_sector_status' => 1,
            ),
            244 => 
            array (
                'id' => 354,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay agadir',
                'city_sector_name_ar' => 'حي اكادير',
                'city_sector_status' => 1,
            ),
            245 => 
            array (
                'id' => 355,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay hassani',
                'city_sector_name_ar' => 'حي الحسني',
                'city_sector_status' => 1,
            ),
            246 => 
            array (
                'id' => 356,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay mohamadi',
                'city_sector_name_ar' => 'حي المحمدي',
                'city_sector_status' => 1,
            ),
            247 => 
            array (
                'id' => 357,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay ouifak',
                'city_sector_name_ar' => 'حي الوفاق',
                'city_sector_status' => 1,
            ),
            248 => 
            array (
                'id' => 358,
                'id_city' => 7,
                'city_sector_name_fr' => 'quartier benslimane ',
                'city_sector_name_ar' => 'حي بنسليمان',
                'city_sector_status' => 1,
            ),
            249 => 
            array (
                'id' => 359,
                'id_city' => 7,
                'city_sector_name_fr' => 'tghat',
                'city_sector_name_ar' => 'تغات',
                'city_sector_status' => 1,
            ),
            250 => 
            array (
                'id' => 360,
                'id_city' => 7,
                'city_sector_name_fr' => 'fes jdida',
                'city_sector_name_ar' => 'فاس الجديدة',
                'city_sector_status' => 1,
            ),
            251 => 
            array (
                'id' => 361,
                'id_city' => 7,
                'city_sector_name_fr' => 'hay moulay abdellah',
                'city_sector_name_ar' => 'حي مولاي عبد الله',
                'city_sector_status' => 1,
            ),
            252 => 
            array (
                'id' => 362,
                'id_city' => 7,
                'city_sector_name_fr' => 'mechouar',
                'city_sector_name_ar' => 'المشوار',
                'city_sector_status' => 1,
            ),
            253 => 
            array (
                'id' => 363,
                'id_city' => 7,
                'city_sector_name_fr' => 'aaouinat hajjaj ',
                'city_sector_name_ar' => 'عوينات حجاد',
                'city_sector_status' => 1,
            ),
            254 => 
            array (
                'id' => 364,
                'id_city' => 7,
                'city_sector_name_fr' => 'ain amiyer ',
                'city_sector_name_ar' => 'عين احميير',
                'city_sector_status' => 1,
            ),
            255 => 
            array (
                'id' => 365,
                'id_city' => 7,
                'city_sector_name_fr' => 'mourabitine',
                'city_sector_name_ar' => 'المرابطين',
                'city_sector_status' => 1,
            ),
            256 => 
            array (
                'id' => 366,
                'id_city' => 7,
                'city_sector_name_fr' => 'zone industrielle sidi brahim',
                'city_sector_name_ar' => 'المنطقة الصناعية سيدي ابراهيم',
                'city_sector_status' => 1,
            ),
            257 => 
            array (
                'id' => 367,
                'id_city' => 7,
                'city_sector_name_fr' => 'autres secteurs',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            258 => 
            array (
                'id' => 400,
                'id_city' => 8,
                'city_sector_name_fr' => 'khanazat',
                'city_sector_name_ar' => 'خنازات',
                'city_sector_status' => 1,
            ),
            259 => 
            array (
                'id' => 401,
                'id_city' => 8,
                'city_sector_name_fr' => 'bir rami',
                'city_sector_name_ar' => 'بئر الرامي',
                'city_sector_status' => 1,
            ),
            260 => 
            array (
                'id' => 402,
                'id_city' => 8,
                'city_sector_name_fr' => 'el haddada',
                'city_sector_name_ar' => 'الحدادة',
                'city_sector_status' => 1,
            ),
            261 => 
            array (
                'id' => 403,
                'id_city' => 8,
                'city_sector_name_fr' => 'bir rami industriel',
                'city_sector_name_ar' => 'بئر الرامي الصناعي',
                'city_sector_status' => 1,
            ),
            262 => 
            array (
                'id' => 404,
                'id_city' => 8,
                'city_sector_name_fr' => 'la cite',
                'city_sector_name_ar' => 'لا سيتي',
                'city_sector_status' => 1,
            ),
            263 => 
            array (
                'id' => 405,
                'id_city' => 8,
                'city_sector_name_fr' => 'maamora',
                'city_sector_name_ar' => 'المعمورة',
                'city_sector_status' => 1,
            ),
            264 => 
            array (
                'id' => 406,
                'id_city' => 8,
                'city_sector_name_fr' => 'ouled oujih',
                'city_sector_name_ar' => 'ولاد اوجيح',
                'city_sector_status' => 1,
            ),
            265 => 
            array (
                'id' => 407,
                'id_city' => 8,
                'city_sector_name_fr' => 'ain sebaa',
                'city_sector_name_ar' => 'عين السباع',
                'city_sector_status' => 1,
            ),
            266 => 
            array (
                'id' => 408,
                'id_city' => 8,
                'city_sector_name_fr' => 'al alama',
                'city_sector_name_ar' => 'العمالة',
                'city_sector_status' => 1,
            ),
            267 => 
            array (
                'id' => 409,
                'id_city' => 8,
                'city_sector_name_fr' => 'al baladya',
                'city_sector_name_ar' => 'البلدية',
                'city_sector_status' => 1,
            ),
            268 => 
            array (
                'id' => 410,
                'id_city' => 8,
                'city_sector_name_fr' => 'almagherib arabi',
                'city_sector_name_ar' => 'المغرب العربي',
                'city_sector_status' => 1,
            ),
            269 => 
            array (
                'id' => 411,
                'id_city' => 8,
                'city_sector_name_fr' => 'bab fes',
                'city_sector_name_ar' => 'باب فاس',
                'city_sector_status' => 1,
            ),
            270 => 
            array (
                'id' => 412,
                'id_city' => 8,
                'city_sector_name_fr' => 'bir anzarane',
                'city_sector_name_ar' => 'بئر انواران',
                'city_sector_status' => 1,
            ),
            271 => 
            array (
                'id' => 413,
                'id_city' => 8,
                'city_sector_name_fr' => 'corcica',
                'city_sector_name_ar' => 'كورنيكا',
                'city_sector_status' => 1,
            ),
            272 => 
            array (
                'id' => 414,
                'id_city' => 8,
                'city_sector_name_fr' => 'diour 10000',
                'city_sector_name_ar' => '10000 ديور',
                'city_sector_status' => 1,
            ),
            273 => 
            array (
                'id' => 415,
                'id_city' => 8,
                'city_sector_name_fr' => 'diour sniak',
                'city_sector_name_ar' => 'ديور سنياك',
                'city_sector_status' => 1,
            ),
            274 => 
            array (
                'id' => 416,
                'id_city' => 8,
                'city_sector_name_fr' => 'El assam',
                'city_sector_name_ar' => 'الاسام',
                'city_sector_status' => 1,
            ),
            275 => 
            array (
                'id' => 417,
                'id_city' => 8,
                'city_sector_name_fr' => 'el haouzia',
                'city_sector_name_ar' => 'الحوزية',
                'city_sector_status' => 1,
            ),
            276 => 
            array (
                'id' => 418,
                'id_city' => 8,
                'city_sector_name_fr' => 'el ismailia',
                'city_sector_name_ar' => 'الاسماعيلية',
                'city_sector_status' => 1,
            ),
            277 => 
            array (
                'id' => 419,
                'id_city' => 8,
                'city_sector_name_fr' => 'el menzah',
                'city_sector_name_ar' => 'المنزه',
                'city_sector_status' => 1,
            ),
            278 => 
            array (
                'id' => 420,
                'id_city' => 8,
                'city_sector_name_fr' => 'fouarate',
                'city_sector_name_ar' => 'فوارات',
                'city_sector_status' => 1,
            ),
            279 => 
            array (
                'id' => 421,
                'id_city' => 8,
                'city_sector_name_fr' => 'inara',
                'city_sector_name_ar' => 'انارة',
                'city_sector_status' => 1,
            ),
            280 => 
            array (
                'id' => 422,
                'id_city' => 8,
                'city_sector_name_fr' => 'la base',
                'city_sector_name_ar' => 'لاباز',
                'city_sector_status' => 1,
            ),
            281 => 
            array (
                'id' => 423,
                'id_city' => 8,
                'city_sector_name_fr' => 'la cigogne',
                'city_sector_name_ar' => 'لا سيغون',
                'city_sector_status' => 1,
            ),
            282 => 
            array (
                'id' => 424,
                'id_city' => 8,
                'city_sector_name_fr' => 'la ville haute',
                'city_sector_name_ar' => 'المدينة العالية',
                'city_sector_status' => 1,
            ),
            283 => 
            array (
                'id' => 425,
                'id_city' => 8,
                'city_sector_name_fr' => 'mellah',
                'city_sector_name_ar' => 'الملاح',
                'city_sector_status' => 1,
            ),
            284 => 
            array (
                'id' => 426,
                'id_city' => 8,
                'city_sector_name_fr' => 'mimosas',
                'city_sector_name_ar' => 'ميموساس',
                'city_sector_status' => 1,
            ),
            285 => 
            array (
                'id' => 427,
                'id_city' => 8,
                'city_sector_name_fr' => 'oueld m barek',
                'city_sector_name_ar' => 'ولاد مبارك',
                'city_sector_status' => 1,
            ),
            286 => 
            array (
                'id' => 428,
                'id_city' => 8,
                'city_sector_name_fr' => 'Pam',
                'city_sector_name_ar' => 'بام',
                'city_sector_status' => 1,
            ),
            287 => 
            array (
                'id' => 429,
                'id_city' => 8,
                'city_sector_name_fr' => 'quartier el fath',
                'city_sector_name_ar' => 'حي الفتح',
                'city_sector_status' => 1,
            ),
            288 => 
            array (
                'id' => 430,
                'id_city' => 8,
                'city_sector_name_fr' => 'quartier nahda',
                'city_sector_name_ar' => 'حي النهضة',
                'city_sector_status' => 1,
            ),
            289 => 
            array (
                'id' => 431,
                'id_city' => 8,
                'city_sector_name_fr' => 'seyad',
                'city_sector_name_ar' => 'سياد',
                'city_sector_status' => 1,
            ),
            290 => 
            array (
                'id' => 432,
                'id_city' => 8,
                'city_sector_name_fr' => 'taïbia',
                'city_sector_name_ar' => 'الطيبية',
                'city_sector_status' => 1,
            ),
            291 => 
            array (
                'id' => 433,
                'id_city' => 8,
                'city_sector_name_fr' => 'val fleury',
                'city_sector_name_ar' => 'فال فلوري',
                'city_sector_status' => 1,
            ),
            292 => 
            array (
                'id' => 434,
                'id_city' => 8,
                'city_sector_name_fr' => 'village',
                'city_sector_name_ar' => 'فيلاج',
                'city_sector_status' => 1,
            ),
            293 => 
            array (
                'id' => 435,
                'id_city' => 8,
                'city_sector_name_fr' => 'assam',
                'city_sector_name_ar' => 'اسام',
                'city_sector_status' => 1,
            ),
            294 => 
            array (
                'id' => 436,
                'id_city' => 8,
                'city_sector_name_fr' => 'bir rami est',
                'city_sector_name_ar' => 'بئر الرامي است',
                'city_sector_status' => 1,
            ),
            295 => 
            array (
                'id' => 437,
                'id_city' => 8,
                'city_sector_name_fr' => 'bir rami ouest',
                'city_sector_name_ar' => 'بئر الرامي ويسط',
                'city_sector_status' => 1,
            ),
            296 => 
            array (
                'id' => 438,
                'id_city' => 8,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط  المدينة',
                'city_sector_status' => 1,
            ),
            297 => 
            array (
                'id' => 439,
                'id_city' => 8,
                'city_sector_name_fr' => 'autres secteurs.',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            298 => 
            array (
                'id' => 500,
                'id_city' => 12,
                'city_sector_name_fr' => 'akioud',
                'city_sector_name_ar' => 'عكيود',
                'city_sector_status' => 1,
            ),
            299 => 
            array (
                'id' => 501,
                'id_city' => 12,
                'city_sector_name_fr' => 'amerchich',
                'city_sector_name_ar' => 'امرشيش',
                'city_sector_status' => 1,
            ),
            300 => 
            array (
                'id' => 502,
                'id_city' => 12,
                'city_sector_name_fr' => 'annakhil',
                'city_sector_name_ar' => 'النخيل',
                'city_sector_status' => 1,
            ),
            301 => 
            array (
                'id' => 503,
                'id_city' => 12,
                'city_sector_name_fr' => 'bin lkchali',
                'city_sector_name_ar' => 'بن لكشالي',
                'city_sector_status' => 1,
            ),
            302 => 
            array (
                'id' => 504,
                'id_city' => 12,
                'city_sector_name_fr' => 'daoudiate',
                'city_sector_name_ar' => 'دوديات',
                'city_sector_status' => 1,
            ),
            303 => 
            array (
                'id' => 505,
                'id_city' => 12,
                'city_sector_name_fr' => 'es saada',
                'city_sector_name_ar' => 'السعادة',
                'city_sector_status' => 1,
            ),
            304 => 
            array (
                'id' => 506,
                'id_city' => 12,
                'city_sector_name_fr' => 'fassi',
                'city_sector_name_ar' => 'الفاسي',
                'city_sector_status' => 1,
            ),
            305 => 
            array (
                'id' => 507,
                'id_city' => 12,
                'city_sector_name_fr' => 'guéliz',
                'city_sector_name_ar' => 'كيليز',
                'city_sector_status' => 1,
            ),
            306 => 
            array (
                'id' => 508,
                'id_city' => 12,
                'city_sector_name_fr' => 'hivernage',
                'city_sector_name_ar' => 'افرناج',
                'city_sector_status' => 1,
            ),
            307 => 
            array (
                'id' => 509,
                'id_city' => 12,
                'city_sector_name_fr' => 'inara',
                'city_sector_name_ar' => 'انارة',
                'city_sector_status' => 1,
            ),
            308 => 
            array (
                'id' => 510,
                'id_city' => 12,
                'city_sector_name_fr' => 'masmoudi',
                'city_sector_name_ar' => 'المصمودي',
                'city_sector_status' => 1,
            ),
            309 => 
            array (
                'id' => 511,
                'id_city' => 12,
                'city_sector_name_fr' => 'massira',
                'city_sector_name_ar' => 'المسيرة',
                'city_sector_status' => 1,
            ),
            310 => 
            array (
                'id' => 512,
                'id_city' => 12,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            311 => 
            array (
                'id' => 513,
                'id_city' => 12,
                'city_sector_name_fr' => 'oued ourika',
                'city_sector_name_ar' => 'واد اوريكا',
                'city_sector_status' => 1,
            ),
            312 => 
            array (
                'id' => 514,
                'id_city' => 12,
                'city_sector_name_fr' => 'oued tensift',
                'city_sector_name_ar' => 'واد تنسيفت',
                'city_sector_status' => 1,
            ),
            313 => 
            array (
                'id' => 515,
                'id_city' => 12,
                'city_sector_name_fr' => 'oulade said',
                'city_sector_name_ar' => 'اولاد سعيد',
                'city_sector_status' => 1,
            ),
            314 => 
            array (
                'id' => 516,
                'id_city' => 12,
                'city_sector_name_fr' => 'palmerie',
                'city_sector_name_ar' => 'بالمري',
                'city_sector_status' => 1,
            ),
            315 => 
            array (
                'id' => 517,
                'id_city' => 12,
                'city_sector_name_fr' => 'sakar',
                'city_sector_name_ar' => 'سكار',
                'city_sector_status' => 1,
            ),
            316 => 
            array (
                'id' => 518,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi youssef ben ali',
                'city_sector_name_ar' => 'سيدي يوسف بنعلي',
                'city_sector_status' => 1,
            ),
            317 => 
            array (
                'id' => 519,
                'id_city' => 12,
                'city_sector_name_fr' => 'sofia',
                'city_sector_name_ar' => 'صوفيا',
                'city_sector_status' => 1,
            ),
            318 => 
            array (
                'id' => 520,
                'id_city' => 12,
                'city_sector_name_fr' => 'targa',
                'city_sector_name_ar' => 'تاركة',
                'city_sector_status' => 1,
            ),
            319 => 
            array (
                'id' => 521,
                'id_city' => 12,
                'city_sector_name_fr' => 'afaq',
                'city_sector_name_ar' => 'افاق',
                'city_sector_status' => 1,
            ),
            320 => 
            array (
                'id' => 522,
                'id_city' => 12,
                'city_sector_name_fr' => 'agdal',
                'city_sector_name_ar' => 'اكدال',
                'city_sector_status' => 1,
            ),
            321 => 
            array (
                'id' => 523,
                'id_city' => 12,
                'city_sector_name_fr' => 'allal fassi',
                'city_sector_name_ar' => 'علال الفاسي',
                'city_sector_status' => 1,
            ),
            322 => 
            array (
                'id' => 524,
                'id_city' => 12,
                'city_sector_name_fr' => 'amelkis',
                'city_sector_name_ar' => 'املقيس',
                'city_sector_status' => 1,
            ),
            323 => 
            array (
                'id' => 525,
                'id_city' => 12,
                'city_sector_name_fr' => 'ancienne medina',
                'city_sector_name_ar' => 'المدينة العتيقة',
                'city_sector_status' => 1,
            ),
            324 => 
            array (
                'id' => 526,
                'id_city' => 12,
                'city_sector_name_fr' => 'assif',
                'city_sector_name_ar' => 'اسيف',
                'city_sector_status' => 1,
            ),
            325 => 
            array (
                'id' => 527,
                'id_city' => 12,
                'city_sector_name_fr' => 'av abdelkrim el khattabi',
                'city_sector_name_ar' => 'شارع عبد الكريم الخطابي',
                'city_sector_status' => 1,
            ),
            326 => 
            array (
                'id' => 528,
                'id_city' => 12,
                'city_sector_name_fr' => 'av mohamed V',
                'city_sector_name_ar' => 'شارع محمد الخامس',
                'city_sector_status' => 1,
            ),
            327 => 
            array (
                'id' => 529,
                'id_city' => 12,
                'city_sector_name_fr' => 'av mohamed VI',
                'city_sector_name_ar' => 'شارع محمد السادس',
                'city_sector_status' => 1,
            ),
            328 => 
            array (
                'id' => 530,
                'id_city' => 12,
                'city_sector_name_fr' => 'azli',
                'city_sector_name_ar' => 'ازلي',
                'city_sector_status' => 1,
            ),
            329 => 
            array (
                'id' => 531,
                'id_city' => 12,
                'city_sector_name_fr' => 'azzouzia',
                'city_sector_name_ar' => 'العزوزية',
                'city_sector_status' => 1,
            ),
            330 => 
            array (
                'id' => 532,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab atlas',
                'city_sector_name_ar' => 'باب الاطلس',
                'city_sector_status' => 1,
            ),
            331 => 
            array (
                'id' => 533,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab doukkala',
                'city_sector_name_ar' => 'باب دكالة',
                'city_sector_status' => 1,
            ),
            332 => 
            array (
                'id' => 534,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab el khemis',
                'city_sector_name_ar' => 'باب الخميس',
                'city_sector_status' => 1,
            ),
            333 => 
            array (
                'id' => 535,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab ighli',
                'city_sector_name_ar' => 'باب ايغلي',
                'city_sector_status' => 1,
            ),
            334 => 
            array (
                'id' => 536,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab moulay abdellah',
                'city_sector_name_ar' => 'باب مولاي عبد الله',
                'city_sector_status' => 1,
            ),
            335 => 
            array (
                'id' => 537,
                'id_city' => 12,
                'city_sector_name_fr' => 'el ghoul',
                'city_sector_name_ar' => 'الغول',
                'city_sector_status' => 1,
            ),
            336 => 
            array (
                'id' => 538,
                'id_city' => 12,
                'city_sector_name_fr' => 'harti',
                'city_sector_name_ar' => 'الحرتي',
                'city_sector_status' => 1,
            ),
            337 => 
            array (
                'id' => 539,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay andalous',
                'city_sector_name_ar' => 'حي الاندلس',
                'city_sector_status' => 1,
            ),
            338 => 
            array (
                'id' => 540,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay charaf',
                'city_sector_name_ar' => 'حي الشرف',
                'city_sector_status' => 1,
            ),
            339 => 
            array (
                'id' => 541,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay izdihar',
                'city_sector_name_ar' => 'حي الازدهار',
                'city_sector_status' => 1,
            ),
            340 => 
            array (
                'id' => 542,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay massira',
                'city_sector_name_ar' => 'حي المسيرة',
                'city_sector_status' => 1,
            ),
            341 => 
            array (
                'id' => 543,
                'id_city' => 12,
                'city_sector_name_fr' => 'hôpital militaire',
                'city_sector_name_ar' => 'المستشفى العسكري',
                'city_sector_status' => 1,
            ),
            342 => 
            array (
                'id' => 544,
                'id_city' => 12,
                'city_sector_name_fr' => 'issil',
                'city_sector_name_ar' => 'اسيل',
                'city_sector_status' => 1,
            ),
            343 => 
            array (
                'id' => 545,
                'id_city' => 12,
                'city_sector_name_fr' => 'jamaa el fna',
                'city_sector_name_ar' => 'جامع الفنا',
                'city_sector_status' => 1,
            ),
            344 => 
            array (
                'id' => 546,
                'id_city' => 12,
                'city_sector_name_fr' => 'kadissia',
                'city_sector_name_ar' => 'قاديسية',
                'city_sector_status' => 1,
            ),
            345 => 
            array (
                'id' => 547,
                'id_city' => 12,
                'city_sector_name_fr' => 'lac takerkoust',
                'city_sector_name_ar' => 'بحيرة تكركوست',
                'city_sector_status' => 1,
            ),
            346 => 
            array (
                'id' => 548,
                'id_city' => 12,
                'city_sector_name_fr' => 'mabrouka',
                'city_sector_name_ar' => 'مبروكة',
                'city_sector_status' => 1,
            ),
            347 => 
            array (
                'id' => 549,
                'id_city' => 12,
                'city_sector_name_fr' => 'majorelle',
                'city_sector_name_ar' => 'ماجوريل',
                'city_sector_status' => 1,
            ),
            348 => 
            array (
                'id' => 550,
                'id_city' => 12,
                'city_sector_name_fr' => 'massar',
                'city_sector_name_ar' => 'مسار',
                'city_sector_status' => 1,
            ),
            349 => 
            array (
                'id' => 551,
                'id_city' => 12,
                'city_sector_name_fr' => 'massar',
                'city_sector_name_ar' => 'مسار',
                'city_sector_status' => 1,
            ),
            350 => 
            array (
                'id' => 552,
                'id_city' => 12,
                'city_sector_name_fr' => 'm hamid',
                'city_sector_name_ar' => 'المحاميد',
                'city_sector_status' => 1,
            ),
            351 => 
            array (
                'id' => 553,
                'id_city' => 12,
                'city_sector_name_fr' => 'rouidat',
                'city_sector_name_ar' => 'رويدات',
                'city_sector_status' => 1,
            ),
            352 => 
            array (
                'id' => 554,
                'id_city' => 12,
                'city_sector_name_fr' => 'route d amezmiz',
                'city_sector_name_ar' => 'طريق امزميز',
                'city_sector_status' => 1,
            ),
            353 => 
            array (
                'id' => 555,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de casablanca',
                'city_sector_name_ar' => 'طريق الدار البيضاء',
                'city_sector_status' => 1,
            ),
            354 => 
            array (
                'id' => 556,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de fes',
                'city_sector_name_ar' => 'طريق فاس',
                'city_sector_status' => 1,
            ),
            355 => 
            array (
                'id' => 557,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de lala takerkoust',
                'city_sector_name_ar' => 'طريق لالة تكركوست',
                'city_sector_status' => 1,
            ),
            356 => 
            array (
                'id' => 558,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de ouarzazate',
                'city_sector_name_ar' => 'طريق ورزازات',
                'city_sector_status' => 1,
            ),
            357 => 
            array (
                'id' => 559,
                'id_city' => 12,
                'city_sector_name_fr' => 'route d ourika',
                'city_sector_name_ar' => 'طريق أوريكا',
                'city_sector_status' => 1,
            ),
            358 => 
            array (
                'id' => 560,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de safi',
                'city_sector_name_ar' => 'طريق اسفي',
                'city_sector_status' => 1,
            ),
            359 => 
            array (
                'id' => 561,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de sidi Alghiat',
                'city_sector_name_ar' => 'طريق عبد الله الغيات',
                'city_sector_status' => 1,
            ),
            360 => 
            array (
                'id' => 562,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de tahanaoute',
                'city_sector_name_ar' => 'طريق تحناوت',
                'city_sector_status' => 1,
            ),
            361 => 
            array (
                'id' => 563,
                'id_city' => 12,
                'city_sector_name_fr' => 'route de tamansourt',
                'city_sector_name_ar' => 'طريق تمنسورت',
                'city_sector_status' => 1,
            ),
            362 => 
            array (
                'id' => 564,
                'id_city' => 12,
                'city_sector_name_fr' => 'semlalia',
                'city_sector_name_ar' => 'سملالية',
                'city_sector_status' => 1,
            ),
            363 => 
            array (
                'id' => 565,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi abbad',
                'city_sector_name_ar' => 'سيدي عباد',
                'city_sector_status' => 1,
            ),
            364 => 
            array (
                'id' => 566,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi abdellah ghiat',
                'city_sector_name_ar' => 'سيدي عبد الله الغيات',
                'city_sector_status' => 1,
            ),
            365 => 
            array (
                'id' => 567,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi ghanem',
                'city_sector_name_ar' => 'سيدي غانم',
                'city_sector_status' => 1,
            ),
            366 => 
            array (
                'id' => 568,
                'id_city' => 12,
                'city_sector_name_fr' => 'victor hugo',
                'city_sector_name_ar' => 'فيكتور هيغو',
                'city_sector_status' => 1,
            ),
            367 => 
            array (
                'id' => 569,
                'id_city' => 12,
                'city_sector_name_fr' => 'beb lhmar',
                'city_sector_name_ar' => 'باب الحمر',
                'city_sector_status' => 1,
            ),
            368 => 
            array (
                'id' => 570,
                'id_city' => 12,
                'city_sector_name_fr' => 'berrima',
                'city_sector_name_ar' => 'بريما',
                'city_sector_status' => 1,
            ),
            369 => 
            array (
                'id' => 571,
                'id_city' => 12,
                'city_sector_name_fr' => 'derb chtouka',
                'city_sector_name_ar' => 'درب الشتوكة',
                'city_sector_status' => 1,
            ),
            370 => 
            array (
                'id' => 572,
                'id_city' => 12,
                'city_sector_name_fr' => 'jnan laafia',
                'city_sector_name_ar' => 'جنان العافية',
                'city_sector_status' => 1,
            ),
            371 => 
            array (
                'id' => 573,
                'id_city' => 12,
                'city_sector_name_fr' => 'ksibat nhas',
                'city_sector_name_ar' => 'قسيبات النحاس',
                'city_sector_status' => 1,
            ),
            372 => 
            array (
                'id' => 574,
                'id_city' => 12,
                'city_sector_name_fr' => 'moulay lyazid',
                'city_sector_name_ar' => 'مولاي اليزيد',
                'city_sector_status' => 1,
            ),
            373 => 
            array (
                'id' => 575,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi mansour',
                'city_sector_name_ar' => 'سيدي منصور',
                'city_sector_status' => 1,
            ),
            374 => 
            array (
                'id' => 576,
                'id_city' => 12,
                'city_sector_name_fr' => 'arset ben chebli',
                'city_sector_name_ar' => 'غرسة بنشبلي',
                'city_sector_status' => 1,
            ),
            375 => 
            array (
                'id' => 577,
                'id_city' => 12,
                'city_sector_name_fr' => 'arset el houta',
                'city_sector_name_ar' => 'غرسة الحوتة',
                'city_sector_status' => 1,
            ),
            376 => 
            array (
                'id' => 578,
                'id_city' => 12,
                'city_sector_name_fr' => 'harset el maach',
                'city_sector_name_ar' => 'هرسات المعش',
                'city_sector_status' => 1,
            ),
            377 => 
            array (
                'id' => 579,
                'id_city' => 12,
                'city_sector_name_fr' => 'arset lhiri',
                'city_sector_name_ar' => 'ارست الحيري',
                'city_sector_status' => 1,
            ),
            378 => 
            array (
                'id' => 580,
                'id_city' => 12,
                'city_sector_name_fr' => 'arset moulat bouaazza',
                'city_sector_name_ar' => 'غرسة مولاي بوعزة',
                'city_sector_status' => 1,
            ),
            379 => 
            array (
                'id' => 581,
                'id_city' => 12,
                'city_sector_name_fr' => 'arset moulay moussa',
                'city_sector_name_ar' => 'غرسة مولاي موسى',
                'city_sector_status' => 1,
            ),
            380 => 
            array (
                'id' => 582,
                'id_city' => 12,
                'city_sector_name_fr' => 'assouel',
                'city_sector_name_ar' => 'اسوال',
                'city_sector_status' => 1,
            ),
            381 => 
            array (
                'id' => 583,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab aylan',
                'city_sector_name_ar' => 'باب ايلان',
                'city_sector_status' => 1,
            ),
            382 => 
            array (
                'id' => 584,
                'id_city' => 12,
                'city_sector_name_fr' => 'bab ghmat',
                'city_sector_name_ar' => 'باب الغماط',
                'city_sector_status' => 1,
            ),
            383 => 
            array (
                'id' => 585,
                'id_city' => 12,
                'city_sector_name_fr' => 'ben saleh',
                'city_sector_name_ar' => 'بن صالح',
                'city_sector_status' => 1,
            ),
            384 => 
            array (
                'id' => 586,
                'id_city' => 12,
                'city_sector_name_fr' => 'el moukef',
                'city_sector_name_ar' => 'الموكف',
                'city_sector_status' => 1,
            ),
            385 => 
            array (
                'id' => 587,
                'id_city' => 12,
                'city_sector_name_fr' => 'essebtiyen',
                'city_sector_name_ar' => 'السبتيين',
                'city_sector_status' => 1,
            ),
            386 => 
            array (
                'id' => 588,
                'id_city' => 12,
                'city_sector_name_fr' => 'jnan benchargra',
                'city_sector_name_ar' => 'جنان بن شارغا',
                'city_sector_status' => 1,
            ),
            387 => 
            array (
                'id' => 589,
                'id_city' => 12,
                'city_sector_name_fr' => 'kaa el machraa',
                'city_sector_name_ar' => 'قاع  المشراع',
                'city_sector_status' => 1,
            ),
            388 => 
            array (
                'id' => 590,
                'id_city' => 12,
                'city_sector_name_fr' => 'kaat ben nahid',
                'city_sector_name_ar' => 'قاعة بن نهيد',
                'city_sector_status' => 1,
            ),
            389 => 
            array (
                'id' => 591,
                'id_city' => 12,
                'city_sector_name_fr' => 'kbour chou',
                'city_sector_name_ar' => 'كبور شو',
                'city_sector_status' => 1,
            ),
            390 => 
            array (
                'id' => 592,
                'id_city' => 12,
                'city_sector_name_fr' => 'kechich',
                'city_sector_name_ar' => 'كشيش',
                'city_sector_status' => 1,
            ),
            391 => 
            array (
                'id' => 593,
                'id_city' => 12,
                'city_sector_name_fr' => 'kennaria',
                'city_sector_name_ar' => 'كنارية',
                'city_sector_status' => 1,
            ),
            392 => 
            array (
                'id' => 594,
                'id_city' => 12,
                'city_sector_name_fr' => 'mouassime',
                'city_sector_name_ar' => 'المواسيم',
                'city_sector_status' => 1,
            ),
            393 => 
            array (
                'id' => 595,
                'id_city' => 12,
                'city_sector_name_fr' => 'rahba kedima',
                'city_sector_name_ar' => 'الرحبة القديمة',
                'city_sector_status' => 1,
            ),
            394 => 
            array (
                'id' => 596,
                'id_city' => 12,
                'city_sector_name_fr' => 'riad zitoun',
                'city_sector_name_ar' => 'رياض الزيتون',
                'city_sector_status' => 1,
            ),
            395 => 
            array (
                'id' => 597,
                'id_city' => 12,
                'city_sector_name_fr' => 'rmila',
                'city_sector_name_ar' => 'رميلة',
                'city_sector_status' => 1,
            ),
            396 => 
            array (
                'id' => 598,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi ben slimane el jazouli',
                'city_sector_name_ar' => 'سيدي بنسليمان الجزولي',
                'city_sector_status' => 1,
            ),
            397 => 
            array (
                'id' => 599,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi bou amar',
                'city_sector_name_ar' => 'سيدي بوعمار',
                'city_sector_status' => 1,
            ),
            398 => 
            array (
                'id' => 600,
                'id_city' => 12,
                'city_sector_name_fr' => 'sidi mimoun',
                'city_sector_name_ar' => 'سيدي ميمون',
                'city_sector_status' => 1,
            ),
            399 => 
            array (
                'id' => 601,
                'id_city' => 12,
                'city_sector_name_fr' => 'zaouia sidi ghalem',
                'city_sector_name_ar' => 'زاوية سيدي غالم',
                'city_sector_status' => 1,
            ),
            400 => 
            array (
                'id' => 602,
                'id_city' => 12,
                'city_sector_name_fr' => 'zaouia lahdar',
                'city_sector_name_ar' => 'زاوية لهدار',
                'city_sector_status' => 1,
            ),
            401 => 
            array (
                'id' => 603,
                'id_city' => 12,
                'city_sector_name_fr' => 'michouar',
                'city_sector_name_ar' => 'مشوار',
                'city_sector_status' => 1,
            ),
            402 => 
            array (
                'id' => 604,
                'id_city' => 12,
                'city_sector_name_fr' => 'ain mezouar',
                'city_sector_name_ar' => 'عين مزوار',
                'city_sector_status' => 1,
            ),
            403 => 
            array (
                'id' => 605,
                'id_city' => 12,
                'city_sector_name_fr' => 'bouaakkaz',
                'city_sector_name_ar' => 'بوعكاز',
                'city_sector_status' => 1,
            ),
            404 => 
            array (
                'id' => 606,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay al bahja',
                'city_sector_name_ar' => 'حي البهجة',
                'city_sector_status' => 1,
            ),
            405 => 
            array (
                'id' => 607,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay al haouz',
                'city_sector_name_ar' => 'حي الحوز',
                'city_sector_status' => 1,
            ),
            406 => 
            array (
                'id' => 608,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay al hassani',
                'city_sector_name_ar' => 'حي الحسني',
                'city_sector_status' => 1,
            ),
            407 => 
            array (
                'id' => 609,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay al massar',
                'city_sector_name_ar' => 'حي المسار',
                'city_sector_status' => 1,
            ),
            408 => 
            array (
                'id' => 610,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay annahda',
                'city_sector_name_ar' => 'حي النهضة',
                'city_sector_status' => 1,
            ),
            409 => 
            array (
                'id' => 611,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay lalla haya',
                'city_sector_name_ar' => 'حي لالة حايا',
                'city_sector_status' => 1,
            ),
            410 => 
            array (
                'id' => 612,
                'id_city' => 12,
                'city_sector_name_fr' => 'hay targa',
                'city_sector_name_ar' => 'حي تاركة',
                'city_sector_status' => 1,
            ),
            411 => 
            array (
                'id' => 613,
                'id_city' => 12,
                'city_sector_name_fr' => 'lziki',
                'city_sector_name_ar' => 'ايزيكي',
                'city_sector_status' => 1,
            ),
            412 => 
            array (
                'id' => 614,
                'id_city' => 12,
                'city_sector_name_fr' => 'jawhar',
                'city_sector_name_ar' => 'جوهرة',
                'city_sector_status' => 1,
            ),
            413 => 
            array (
                'id' => 615,
                'id_city' => 12,
                'city_sector_name_fr' => 'les portes de merrakech',
                'city_sector_name_ar' => 'ابواب مركش',
                'city_sector_status' => 1,
            ),
            414 => 
            array (
                'id' => 616,
                'id_city' => 12,
                'city_sector_name_fr' => 'massira1',
                'city_sector_name_ar' => 'المسيرة1',
                'city_sector_status' => 1,
            ),
            415 => 
            array (
                'id' => 617,
                'id_city' => 12,
                'city_sector_name_fr' => 'massira2',
                'city_sector_name_ar' => 'المسيرة2',
                'city_sector_status' => 1,
            ),
            416 => 
            array (
                'id' => 618,
                'id_city' => 12,
                'city_sector_name_fr' => 'massira3',
                'city_sector_name_ar' => 'المسيرة3',
                'city_sector_status' => 1,
            ),
            417 => 
            array (
                'id' => 619,
                'id_city' => 12,
                'city_sector_name_fr' => 'zone industrielle sidi ghanem',
                'city_sector_name_ar' => 'المنطقة الصناعية سيدي غانم',
                'city_sector_status' => 1,
            ),
            418 => 
            array (
                'id' => 620,
                'id_city' => 12,
                'city_sector_name_fr' => 'route agadir essaouira',
                'city_sector_name_ar' => 'طريق اكادير الصويرة',
                'city_sector_status' => 1,
            ),
            419 => 
            array (
                'id' => 700,
                'id_city' => 13,
                'city_sector_name_fr' => 'ben mohamed',
                'city_sector_name_ar' => 'بن محمد',
                'city_sector_status' => 1,
            ),
            420 => 
            array (
                'id' => 701,
                'id_city' => 13,
                'city_sector_name_fr' => 'berrima',
                'city_sector_name_ar' => 'البريما',
                'city_sector_status' => 1,
            ),
            421 => 
            array (
                'id' => 702,
                'id_city' => 13,
                'city_sector_name_fr' => 'bourj moulay omar',
                'city_sector_name_ar' => 'بورج مولاي عمر',
                'city_sector_status' => 1,
            ),
            422 => 
            array (
                'id' => 703,
                'id_city' => 13,
                'city_sector_name_fr' => 'cité impériale',
                'city_sector_name_ar' => 'سيتي الامبراطورية',
                'city_sector_status' => 1,
            ),
            423 => 
            array (
                'id' => 704,
                'id_city' => 13,
                'city_sector_name_fr' => 'dar kebira',
                'city_sector_name_ar' => 'دار الكبيرة',
                'city_sector_status' => 1,
            ),
            424 => 
            array (
                'id' => 705,
                'id_city' => 13,
                'city_sector_name_fr' => 'el bassatine',
                'city_sector_name_ar' => 'البساتين',
                'city_sector_status' => 1,
            ),
            425 => 
            array (
                'id' => 706,
                'id_city' => 13,
                'city_sector_name_fr' => 'el mechouar stinia',
                'city_sector_name_ar' => 'المشوار الستينية',
                'city_sector_status' => 1,
            ),
            426 => 
            array (
                'id' => 707,
                'id_city' => 13,
                'city_sector_name_fr' => 'kasbat ',
                'city_sector_name_ar' => 'قصبة',
                'city_sector_status' => 1,
            ),
            427 => 
            array (
                'id' => 708,
                'id_city' => 13,
                'city_sector_name_fr' => 'khedrache',
                'city_sector_name_ar' => 'خدراش',
                'city_sector_status' => 1,
            ),
            428 => 
            array (
                'id' => 709,
                'id_city' => 13,
                'city_sector_name_fr' => 'marjane2',
                'city_sector_name_ar' => 'مرجان2',
                'city_sector_status' => 1,
            ),
            429 => 
            array (
                'id' => 710,
                'id_city' => 13,
                'city_sector_name_fr' => 'médina',
                'city_sector_name_ar' => 'المدينة',
                'city_sector_status' => 1,
            ),
            430 => 
            array (
                'id' => 711,
                'id_city' => 13,
                'city_sector_name_fr' => 'nouveau mellah',
                'city_sector_name_ar' => 'الملاح الجديد',
                'city_sector_status' => 1,
            ),
            431 => 
            array (
                'id' => 712,
                'id_city' => 13,
                'city_sector_name_fr' => 'omar',
                'city_sector_name_ar' => 'عمر',
                'city_sector_status' => 1,
            ),
            432 => 
            array (
                'id' => 713,
                'id_city' => 13,
                'city_sector_name_fr' => 'riad toulal',
                'city_sector_name_ar' => 'رياض تولال',
                'city_sector_status' => 1,
            ),
            433 => 
            array (
                'id' => 714,
                'id_city' => 13,
                'city_sector_name_fr' => 'sbata',
                'city_sector_name_ar' => 'سباتة',
                'city_sector_status' => 1,
            ),
            434 => 
            array (
                'id' => 715,
                'id_city' => 13,
                'city_sector_name_fr' => 'sidi amar hassini',
                'city_sector_name_ar' => 'سيدي عمار الحسيني',
                'city_sector_status' => 1,
            ),
            435 => 
            array (
                'id' => 716,
                'id_city' => 13,
                'city_sector_name_fr' => 'ville nouvelle',
                'city_sector_name_ar' => 'المدينة الجديدة',
                'city_sector_status' => 1,
            ),
            436 => 
            array (
                'id' => 717,
                'id_city' => 13,
                'city_sector_name_fr' => 'ancienne medina',
                'city_sector_name_ar' => 'المدينة العتيقة',
                'city_sector_status' => 1,
            ),
            437 => 
            array (
                'id' => 718,
                'id_city' => 13,
                'city_sector_name_fr' => 'belle vue',
                'city_sector_name_ar' => 'المنظر الجميل',
                'city_sector_status' => 1,
            ),
            438 => 
            array (
                'id' => 719,
                'id_city' => 13,
                'city_sector_name_fr' => 'hamria',
                'city_sector_name_ar' => 'الحمرية',
                'city_sector_status' => 1,
            ),
            439 => 
            array (
                'id' => 720,
                'id_city' => 13,
                'city_sector_name_fr' => 'hay salam',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            440 => 
            array (
                'id' => 721,
                'id_city' => 13,
                'city_sector_name_fr' => 'la hacienda',
                'city_sector_name_ar' => 'هاسيندا',
                'city_sector_status' => 1,
            ),
            441 => 
            array (
                'id' => 722,
                'id_city' => 13,
                'city_sector_name_fr' => 'rouamzine',
                'city_sector_name_ar' => 'روام الزين',
                'city_sector_status' => 1,
            ),
            442 => 
            array (
                'id' => 723,
                'id_city' => 13,
                'city_sector_name_fr' => 'sidi bouzekri',
                'city_sector_name_ar' => 'سيدي بوزكري',
                'city_sector_status' => 1,
            ),
            443 => 
            array (
                'id' => 724,
                'id_city' => 13,
                'city_sector_name_fr' => 'sidi said',
                'city_sector_name_ar' => 'سيدي سعيد',
                'city_sector_status' => 1,
            ),
            444 => 
            array (
                'id' => 725,
                'id_city' => 13,
                'city_sector_name_fr' => 'wislane',
                'city_sector_name_ar' => 'وسلان',
                'city_sector_status' => 1,
            ),
            445 => 
            array (
                'id' => 726,
                'id_city' => 13,
                'city_sector_name_fr' => 'zerhounia',
                'city_sector_name_ar' => 'الزرهونية',
                'city_sector_status' => 1,
            ),
            446 => 
            array (
                'id' => 727,
                'id_city' => 13,
                'city_sector_name_fr' => 'zitoune',
                'city_sector_name_ar' => 'زيتون',
                'city_sector_status' => 1,
            ),
            447 => 
            array (
                'id' => 728,
                'id_city' => 13,
                'city_sector_name_fr' => 'autres secteurs',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            448 => 
            array (
                'id' => 800,
                'id_city' => 14,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            449 => 
            array (
                'id' => 801,
                'id_city' => 14,
                'city_sector_name_fr' => 'al boustane',
                'city_sector_name_ar' => 'البستان',
                'city_sector_status' => 1,
            ),
            450 => 
            array (
                'id' => 802,
                'id_city' => 14,
                'city_sector_name_fr' => 'hay matar',
                'city_sector_name_ar' => 'حي المطار',
                'city_sector_status' => 1,
            ),
            451 => 
            array (
                'id' => 803,
                'id_city' => 14,
                'city_sector_name_fr' => 'ouled lahcen',
                'city_sector_name_ar' => 'ولاد الحسن',
                'city_sector_status' => 1,
            ),
            452 => 
            array (
                'id' => 804,
                'id_city' => 14,
                'city_sector_name_fr' => 'aarid',
                'city_sector_name_ar' => 'عارد',
                'city_sector_status' => 1,
            ),
            453 => 
            array (
                'id' => 805,
                'id_city' => 14,
                'city_sector_name_fr' => 'al araoui',
                'city_sector_name_ar' => 'الاروي',
                'city_sector_status' => 1,
            ),
            454 => 
            array (
                'id' => 806,
                'id_city' => 14,
                'city_sector_name_fr' => 'barakia',
                'city_sector_name_ar' => 'بركية',
                'city_sector_status' => 1,
            ),
            455 => 
            array (
                'id' => 807,
                'id_city' => 14,
                'city_sector_name_fr' => 'bouarourou',
                'city_sector_name_ar' => 'بوعرورو',
                'city_sector_status' => 1,
            ),
            456 => 
            array (
                'id' => 808,
                'id_city' => 14,
                'city_sector_name_fr' => 'bouchouaf',
                'city_sector_name_ar' => 'بوشواف',
                'city_sector_status' => 1,
            ),
            457 => 
            array (
                'id' => 809,
                'id_city' => 14,
                'city_sector_name_fr' => 'chaala',
                'city_sector_name_ar' => 'شعلة',
                'city_sector_status' => 1,
            ),
            458 => 
            array (
                'id' => 810,
                'id_city' => 14,
                'city_sector_name_fr' => 'el khattabi',
                'city_sector_name_ar' => 'الخطابي',
                'city_sector_status' => 1,
            ),
            459 => 
            array (
                'id' => 811,
                'id_city' => 14,
                'city_sector_name_fr' => 'el kindi',
                'city_sector_name_ar' => 'الكيندي',
                'city_sector_status' => 1,
            ),
            460 => 
            array (
                'id' => 812,
                'id_city' => 14,
                'city_sector_name_fr' => 'hay el askari',
                'city_sector_name_ar' => 'حي العسكري',
                'city_sector_status' => 1,
            ),
            461 => 
            array (
                'id' => 813,
                'id_city' => 14,
                'city_sector_name_fr' => 'hay el idori',
                'city_sector_name_ar' => 'حي الادوري',
                'city_sector_status' => 1,
            ),
            462 => 
            array (
                'id' => 814,
                'id_city' => 14,
                'city_sector_name_fr' => 'hay el madani',
                'city_sector_name_ar' => 'حي المدني',
                'city_sector_status' => 1,
            ),
            463 => 
            array (
                'id' => 815,
                'id_city' => 14,
                'city_sector_name_fr' => 'hay el matar',
                'city_sector_name_ar' => 'حي المطار',
                'city_sector_status' => 1,
            ),
            464 => 
            array (
                'id' => 816,
                'id_city' => 14,
                'city_sector_name_fr' => 'ichoumay ',
                'city_sector_name_ar' => 'اشوماي',
                'city_sector_status' => 1,
            ),
            465 => 
            array (
                'id' => 817,
                'id_city' => 14,
                'city_sector_name_fr' => 'igounaf ',
                'city_sector_name_ar' => 'اكوناف',
                'city_sector_status' => 1,
            ),
            466 => 
            array (
                'id' => 818,
                'id_city' => 14,
                'city_sector_name_fr' => 'issabanen',
                'city_sector_name_ar' => 'ايسابانين',
                'city_sector_status' => 1,
            ),
            467 => 
            array (
                'id' => 819,
                'id_city' => 14,
                'city_sector_name_fr' => 'laarassi',
                'city_sector_name_ar' => 'العراسي',
                'city_sector_status' => 1,
            ),
            468 => 
            array (
                'id' => 820,
                'id_city' => 14,
                'city_sector_name_fr' => 'laari cheikh',
                'city_sector_name_ar' => 'لاري الشيخ',
                'city_sector_status' => 1,
            ),
            469 => 
            array (
                'id' => 821,
                'id_city' => 14,
                'city_sector_name_fr' => 'ouled boutaib',
                'city_sector_name_ar' => 'ولاد بوطيب',
                'city_sector_status' => 1,
            ),
            470 => 
            array (
                'id' => 822,
                'id_city' => 14,
                'city_sector_name_fr' => 'ouled brahim',
                'city_sector_name_ar' => 'اولاد ابراهيم',
                'city_sector_status' => 1,
            ),
            471 => 
            array (
                'id' => 823,
                'id_city' => 14,
                'city_sector_name_fr' => 'ouled mimoun',
                'city_sector_name_ar' => 'ولاد ميمون',
                'city_sector_status' => 1,
            ),
            472 => 
            array (
                'id' => 824,
                'id_city' => 14,
                'city_sector_name_fr' => 'ouled tayeb',
                'city_sector_name_ar' => 'ولاد طيب',
                'city_sector_status' => 1,
            ),
            473 => 
            array (
                'id' => 825,
                'id_city' => 14,
                'city_sector_name_fr' => 'rigo laris',
                'city_sector_name_ar' => 'ريغو لاريس',
                'city_sector_status' => 1,
            ),
            474 => 
            array (
                'id' => 826,
                'id_city' => 14,
                'city_sector_name_fr' => 'sidi ali',
                'city_sector_name_ar' => 'سيدي علي',
                'city_sector_status' => 1,
            ),
            475 => 
            array (
                'id' => 827,
                'id_city' => 14,
                'city_sector_name_fr' => 'tirakaa',
                'city_sector_name_ar' => 'ترقاع',
                'city_sector_status' => 1,
            ),
            476 => 
            array (
                'id' => 828,
                'id_city' => 14,
                'city_sector_name_fr' => 'tizighine',
                'city_sector_name_ar' => 'تزيغين',
                'city_sector_status' => 1,
            ),
            477 => 
            array (
                'id' => 900,
                'id_city' => 16,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            478 => 
            array (
                'id' => 901,
                'id_city' => 16,
                'city_sector_name_fr' => 'Bd Jaych tahrir',
                'city_sector_name_ar' => 'شارع جيش التحرير',
                'city_sector_status' => 1,
            ),
            479 => 
            array (
                'id' => 902,
                'id_city' => 16,
                'city_sector_name_fr' => 'CGI',
                'city_sector_name_ar' => 'س ج ا',
                'city_sector_status' => 1,
            ),
            480 => 
            array (
                'id' => 903,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay el andalous',
                'city_sector_name_ar' => 'حي الاندلس',
                'city_sector_status' => 1,
            ),
            481 => 
            array (
                'id' => 904,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay el hikma ',
                'city_sector_name_ar' => 'حي الحكمة',
                'city_sector_status' => 1,
            ),
            482 => 
            array (
                'id' => 905,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay el qods',
                'city_sector_name_ar' => 'حي القدس',
                'city_sector_status' => 1,
            ),
            483 => 
            array (
                'id' => 906,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay lazaret hay salam',
                'city_sector_name_ar' => 'حي لزارت حي   السلام',
                'city_sector_status' => 1,
            ),
            484 => 
            array (
                'id' => 907,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay takkadom',
                'city_sector_name_ar' => 'حي التقدم',
                'city_sector_status' => 1,
            ),
            485 => 
            array (
                'id' => 908,
                'id_city' => 16,
                'city_sector_name_fr' => 'iris',
                'city_sector_name_ar' => 'ايريس',
                'city_sector_status' => 1,
            ),
            486 => 
            array (
                'id' => 909,
                'id_city' => 16,
                'city_sector_name_fr' => 'route jerada',
                'city_sector_name_ar' => 'طريق جرادة',
                'city_sector_status' => 1,
            ),
            487 => 
            array (
                'id' => 910,
                'id_city' => 16,
                'city_sector_name_fr' => 'agdal',
                'city_sector_name_ar' => 'اكدال',
                'city_sector_status' => 1,
            ),
            488 => 
            array (
                'id' => 911,
                'id_city' => 16,
                'city_sector_name_fr' => 'ancienne medina',
                'city_sector_name_ar' => 'المدينة العتيقة',
                'city_sector_status' => 1,
            ),
            489 => 
            array (
                'id' => 912,
                'id_city' => 16,
                'city_sector_name_fr' => 'andalous',
                'city_sector_name_ar' => 'الاندلس',
                'city_sector_status' => 1,
            ),
            490 => 
            array (
                'id' => 913,
                'id_city' => 16,
                'city_sector_name_fr' => 'Bd allal el fassi',
                'city_sector_name_ar' => 'شارع علال الفاسي',
                'city_sector_status' => 1,
            ),
            491 => 
            array (
                'id' => 914,
                'id_city' => 16,
                'city_sector_name_fr' => 'Bd derfoufi',
                'city_sector_name_ar' => 'شارع الدرفوفي',
                'city_sector_status' => 1,
            ),
            492 => 
            array (
                'id' => 915,
                'id_city' => 16,
                'city_sector_name_fr' => 'Bd hassan II ',
                'city_sector_name_ar' => 'شارع الحسن التاني',
                'city_sector_status' => 1,
            ),
            493 => 
            array (
                'id' => 916,
                'id_city' => 16,
                'city_sector_name_fr' => 'Boustane',
                'city_sector_name_ar' => 'البستان',
                'city_sector_status' => 1,
            ),
            494 => 
            array (
                'id' => 917,
                'id_city' => 16,
                'city_sector_name_fr' => 'El firdaws',
                'city_sector_name_ar' => 'الفردوس',
                'city_sector_status' => 1,
            ),
            495 => 
            array (
                'id' => 918,
                'id_city' => 16,
                'city_sector_name_fr' => 'Grand boulevard ahfir',
                'city_sector_name_ar' => 'غرون بولفار احفير',
                'city_sector_status' => 1,
            ),
            496 => 
            array (
                'id' => 919,
                'id_city' => 16,
                'city_sector_name_fr' => 'Hay boudir',
                'city_sector_name_ar' => 'حي بودير',
                'city_sector_status' => 1,
            ),
            497 => 
            array (
                'id' => 920,
                'id_city' => 16,
                'city_sector_name_fr' => 'Hay ennasr',
                'city_sector_name_ar' => 'حي النصر',
                'city_sector_status' => 1,
            ),
            498 => 
            array (
                'id' => 921,
                'id_city' => 16,
                'city_sector_name_fr' => 'Hay fath',
                'city_sector_name_ar' => 'حي الفتح',
                'city_sector_status' => 1,
            ),
            499 => 
            array (
                'id' => 922,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay massira',
                'city_sector_name_ar' => 'حي المسيرة',
                'city_sector_status' => 1,
            ),
        ));
        \DB::table('city_sector')->insert(array (
            0 => 
            array (
                'id' => 923,
                'id_city' => 16,
                'city_sector_name_fr' => 'hay zitoune',
                'city_sector_name_ar' => 'حي زيتون',
                'city_sector_status' => 1,
            ),
            1 => 
            array (
                'id' => 924,
                'id_city' => 16,
                'city_sector_name_fr' => 'hikma I',
                'city_sector_name_ar' => ' I حكمة  ',
                'city_sector_status' => 1,
            ),
            2 => 
            array (
                'id' => 925,
                'id_city' => 16,
                'city_sector_name_fr' => 'hikma II',
                'city_sector_name_ar' => 'II حكمة ',
                'city_sector_status' => 1,
            ),
            3 => 
            array (
                'id' => 926,
                'id_city' => 16,
                'city_sector_name_fr' => 'jawhara',
                'city_sector_name_ar' => 'جوهرة',
                'city_sector_status' => 1,
            ),
            4 => 
            array (
                'id' => 927,
                'id_city' => 16,
                'city_sector_name_fr' => 'nahda',
                'city_sector_name_ar' => 'النهضة',
                'city_sector_status' => 1,
            ),
            5 => 
            array (
                'id' => 928,
                'id_city' => 16,
                'city_sector_name_fr' => 'najd',
                'city_sector_name_ar' => 'النجد',
                'city_sector_status' => 1,
            ),
            6 => 
            array (
                'id' => 929,
                'id_city' => 16,
                'city_sector_name_fr' => 'Nour',
                'city_sector_name_ar' => 'نور',
                'city_sector_status' => 1,
            ),
            7 => 
            array (
                'id' => 930,
                'id_city' => 16,
                'city_sector_name_fr' => 'Park',
                'city_sector_name_ar' => 'بارك',
                'city_sector_status' => 1,
            ),
            8 => 
            array (
                'id' => 931,
                'id_city' => 16,
                'city_sector_name_fr' => 'Riad isli',
                'city_sector_name_ar' => 'رياض اسلي',
                'city_sector_status' => 1,
            ),
            9 => 
            array (
                'id' => 932,
                'id_city' => 16,
                'city_sector_name_fr' => 'route tayret',
                'city_sector_name_ar' => 'طريق تايريت',
                'city_sector_status' => 1,
            ),
            10 => 
            array (
                'id' => 933,
                'id_city' => 16,
                'city_sector_name_fr' => 'sidi yahya',
                'city_sector_name_ar' => 'سيدي يحيى',
                'city_sector_status' => 1,
            ),
            11 => 
            array (
                'id' => 1000,
                'id_city' => 17,
                'city_sector_name_fr' => 'aakkari',
                'city_sector_name_ar' => 'العنكري',
                'city_sector_status' => 1,
            ),
            12 => 
            array (
                'id' => 1001,
                'id_city' => 17,
                'city_sector_name_fr' => 'agdal',
                'city_sector_name_ar' => 'اكدال',
                'city_sector_status' => 1,
            ),
            13 => 
            array (
                'id' => 1002,
                'id_city' => 17,
                'city_sector_name_fr' => 'aviation',
                'city_sector_name_ar' => 'الطيران',
                'city_sector_status' => 1,
            ),
            14 => 
            array (
                'id' => 1003,
                'id_city' => 17,
                'city_sector_name_fr' => 'diour jamaa',
                'city_sector_name_ar' => 'ديور الجماعة',
                'city_sector_status' => 1,
            ),
            15 => 
            array (
                'id' => 1004,
                'id_city' => 17,
                'city_sector_name_fr' => 'douar el hajja',
                'city_sector_name_ar' => 'دوار الحاجة',
                'city_sector_status' => 1,
            ),
            16 => 
            array (
                'id' => 1005,
                'id_city' => 17,
                'city_sector_name_fr' => 'hassan',
                'city_sector_name_ar' => 'حسان',
                'city_sector_status' => 1,
            ),
            17 => 
            array (
                'id' => 1006,
                'id_city' => 17,
                'city_sector_name_fr' => 'hay el fath',
                'city_sector_name_ar' => 'حي الفتح',
                'city_sector_status' => 1,
            ),
            18 => 
            array (
                'id' => 1007,
                'id_city' => 17,
                'city_sector_name_fr' => 'hay nahda',
                'city_sector_name_ar' => 'حي النهضة',
                'city_sector_status' => 1,
            ),
            19 => 
            array (
                'id' => 1008,
                'id_city' => 17,
                'city_sector_name_fr' => 'hay riad',
                'city_sector_name_ar' => 'حي الرياض',
                'city_sector_status' => 1,
            ),
            20 => 
            array (
                'id' => 1009,
                'id_city' => 17,
                'city_sector_name_fr' => 'les ambassadeurs',
                'city_sector_name_ar' => 'السفراء',
                'city_sector_status' => 1,
            ),
            21 => 
            array (
                'id' => 1010,
                'id_city' => 17,
                'city_sector_name_fr' => 'les orangers',
                'city_sector_name_ar' => 'حي الليمون',
                'city_sector_status' => 1,
            ),
            22 => 
            array (
                'id' => 1011,
                'id_city' => 17,
                'city_sector_name_fr' => 'les oudayas',
                'city_sector_name_ar' => 'الوداية',
                'city_sector_status' => 1,
            ),
            23 => 
            array (
                'id' => 1012,
                'id_city' => 17,
                'city_sector_name_fr' => 'mabella',
                'city_sector_name_ar' => 'مابيلا',
                'city_sector_status' => 1,
            ),
            24 => 
            array (
                'id' => 1013,
                'id_city' => 17,
                'city_sector_name_fr' => 'massira',
                'city_sector_name_ar' => 'المسيرة',
                'city_sector_status' => 1,
            ),
            25 => 
            array (
                'id' => 1014,
                'id_city' => 17,
                'city_sector_name_fr' => 'medina de rabat',
                'city_sector_name_ar' => 'مدينة الرباط',
                'city_sector_status' => 1,
            ),
            26 => 
            array (
                'id' => 1015,
                'id_city' => 17,
                'city_sector_name_fr' => 'souissi',
                'city_sector_name_ar' => 'السويسي',
                'city_sector_status' => 1,
            ),
            27 => 
            array (
                'id' => 1016,
                'id_city' => 17,
                'city_sector_name_fr' => 'taqaddom',
                'city_sector_name_ar' => 'التقدم',
                'city_sector_status' => 1,
            ),
            28 => 
            array (
                'id' => 1017,
                'id_city' => 17,
                'city_sector_name_fr' => 'yacoub el mansour',
                'city_sector_name_ar' => 'يعقوب المنصور',
                'city_sector_status' => 1,
            ),
            29 => 
            array (
                'id' => 1018,
                'id_city' => 17,
                'city_sector_name_fr' => 'youssoufia',
                'city_sector_name_ar' => 'اليوسفية',
                'city_sector_status' => 1,
            ),
            30 => 
            array (
                'id' => 1019,
                'id_city' => 17,
                'city_sector_name_fr' => 'Quartier de l ocean',
                'city_sector_name_ar' => 'حي المحيط',
                'city_sector_status' => 1,
            ),
            31 => 
            array (
                'id' => 1020,
                'id_city' => 17,
                'city_sector_name_fr' => 'al irfane',
                'city_sector_name_ar' => 'العرفان',
                'city_sector_status' => 1,
            ),
            32 => 
            array (
                'id' => 1021,
                'id_city' => 17,
                'city_sector_name_fr' => 'guich oudaya',
                'city_sector_name_ar' => 'كيش اودايا',
                'city_sector_status' => 1,
            ),
            33 => 
            array (
                'id' => 1022,
                'id_city' => 17,
                'city_sector_name_fr' => 'haut agdal',
                'city_sector_name_ar' => 'اوت اكدال',
                'city_sector_status' => 1,
            ),
            34 => 
            array (
                'id' => 1023,
                'id_city' => 17,
                'city_sector_name_fr' => 'riyad',
                'city_sector_name_ar' => 'رياض',
                'city_sector_status' => 1,
            ),
            35 => 
            array (
                'id' => 1024,
                'id_city' => 17,
                'city_sector_name_fr' => 'riad extension',
                'city_sector_name_ar' => 'توسعة الرياض',
                'city_sector_status' => 1,
            ),
            36 => 
            array (
                'id' => 1025,
                'id_city' => 17,
                'city_sector_name_fr' => 'abi ragrag',
                'city_sector_name_ar' => 'ابي رقراق',
                'city_sector_status' => 1,
            ),
            37 => 
            array (
                'id' => 1026,
                'id_city' => 17,
                'city_sector_name_fr' => 'aviation-mabella',
                'city_sector_name_ar' => 'الطيران-مابيلا',
                'city_sector_status' => 1,
            ),
            38 => 
            array (
                'id' => 1027,
                'id_city' => 17,
                'city_sector_name_fr' => 'el youssoufia',
                'city_sector_name_ar' => 'اليوسوفية',
                'city_sector_status' => 1,
            ),
            39 => 
            array (
                'id' => 1028,
                'id_city' => 17,
                'city_sector_name_fr' => 'Hay el farah',
                'city_sector_name_ar' => 'حي الفرح',
                'city_sector_status' => 1,
            ),
            40 => 
            array (
                'id' => 1029,
                'id_city' => 17,
                'city_sector_name_fr' => 'hay arrachad',
                'city_sector_name_ar' => 'حي الرشاد',
                'city_sector_status' => 1,
            ),
            41 => 
            array (
                'id' => 1030,
                'id_city' => 17,
                'city_sector_name_fr' => 'Mechouar',
                'city_sector_name_ar' => 'المشوار',
                'city_sector_status' => 1,
            ),
            42 => 
            array (
                'id' => 11000,
                'id_city' => 18,
                'city_sector_name_fr' => 'lalla hnia hamria',
                'city_sector_name_ar' => 'لالة هنية الحمرية',
                'city_sector_status' => 1,
            ),
            43 => 
            array (
                'id' => 11001,
                'id_city' => 18,
                'city_sector_name_fr' => 'ville nouvelle',
                'city_sector_name_ar' => 'المدينة الجديدة',
                'city_sector_status' => 1,
            ),
            44 => 
            array (
                'id' => 11002,
                'id_city' => 18,
                'city_sector_name_fr' => 'achbar',
                'city_sector_name_ar' => 'اشبار',
                'city_sector_status' => 1,
            ),
            45 => 
            array (
                'id' => 11003,
                'id_city' => 18,
                'city_sector_name_fr' => 'azib derai',
                'city_sector_name_ar' => 'ازيب درعي',
                'city_sector_status' => 1,
            ),
            46 => 
            array (
                'id' => 11004,
                'id_city' => 18,
                'city_sector_name_fr' => 'bahia',
                'city_sector_name_ar' => 'باهية',
                'city_sector_status' => 1,
            ),
            47 => 
            array (
                'id' => 11005,
                'id_city' => 18,
                'city_sector_name_fr' => 'biar',
                'city_sector_name_ar' => 'البيار',
                'city_sector_status' => 1,
            ),
            48 => 
            array (
                'id' => 11006,
                'id_city' => 18,
                'city_sector_name_fr' => 'biyada',
                'city_sector_name_ar' => 'بييادة',
                'city_sector_status' => 1,
            ),
            49 => 
            array (
                'id' => 11007,
                'id_city' => 18,
                'city_sector_name_fr' => 'bled eljed',
                'city_sector_name_ar' => 'بلد الجلد',
                'city_sector_status' => 1,
            ),
            50 => 
            array (
                'id' => 11008,
                'id_city' => 18,
                'city_sector_name_fr' => 'chenguite',
                'city_sector_name_ar' => 'شنكيت',
                'city_sector_status' => 1,
            ),
            51 => 
            array (
                'id' => 11009,
                'id_city' => 18,
                'city_sector_name_fr' => 'darb lfarrane',
                'city_sector_name_ar' => 'درب الفران',
                'city_sector_status' => 1,
            ),
            52 => 
            array (
                'id' => 11010,
                'id_city' => 18,
                'city_sector_name_fr' => 'darb moulay hassan',
                'city_sector_name_ar' => 'درب مولاي الحسن',
                'city_sector_status' => 1,
            ),
            53 => 
            array (
                'id' => 11011,
                'id_city' => 18,
                'city_sector_name_fr' => 'driba lamziwka',
                'city_sector_name_ar' => 'دريبة لمزيوكة',
                'city_sector_status' => 1,
            ),
            54 => 
            array (
                'id' => 11012,
                'id_city' => 18,
                'city_sector_name_fr' => 'El massira',
                'city_sector_name_ar' => 'المسيرة',
                'city_sector_status' => 1,
            ),
            55 => 
            array (
                'id' => 11013,
                'id_city' => 18,
                'city_sector_name_fr' => 'el massira boukalli',
                'city_sector_name_ar' => 'المسيرة البوكالي',
                'city_sector_status' => 1,
            ),
            56 => 
            array (
                'id' => 11014,
                'id_city' => 18,
                'city_sector_name_fr' => 'el matar',
                'city_sector_name_ar' => 'المطار',
                'city_sector_status' => 1,
            ),
            57 => 
            array (
                'id' => 11015,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay anas',
                'city_sector_name_ar' => 'حي انس',
                'city_sector_status' => 1,
            ),
            58 => 
            array (
                'id' => 11016,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay el bouwab',
                'city_sector_name_ar' => 'حي البواب',
                'city_sector_status' => 1,
            ),
            59 => 
            array (
                'id' => 11017,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay el majd',
                'city_sector_name_ar' => 'حي المجد',
                'city_sector_status' => 1,
            ),
            60 => 
            array (
                'id' => 11018,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay essaâda',
                'city_sector_name_ar' => 'حي السعادة',
                'city_sector_status' => 1,
            ),
            61 => 
            array (
                'id' => 11019,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay oued el bacha',
                'city_sector_name_ar' => 'حي واد الباشا',
                'city_sector_status' => 1,
            ),
            62 => 
            array (
                'id' => 11020,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay riyad',
                'city_sector_name_ar' => 'حي الرياض',
                'city_sector_status' => 1,
            ),
            63 => 
            array (
                'id' => 11021,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay sanyat zine el abidine',
                'city_sector_name_ar' => 'حي سانية زين العابدين',
                'city_sector_status' => 1,
            ),
            64 => 
            array (
                'id' => 11022,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay sinaai',
                'city_sector_name_ar' => 'حي الصناعي',
                'city_sector_status' => 1,
            ),
            65 => 
            array (
                'id' => 11023,
                'id_city' => 18,
                'city_sector_name_fr' => 'hay essalam',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            66 => 
            array (
                'id' => 11024,
                'id_city' => 18,
                'city_sector_name_fr' => 'hrayat albayde',
                'city_sector_name_ar' => 'حرايات البيض',
                'city_sector_status' => 1,
            ),
            67 => 
            array (
                'id' => 11025,
                'id_city' => 18,
                'city_sector_name_fr' => 'Ijennane',
                'city_sector_name_ar' => 'الجنان',
                'city_sector_status' => 1,
            ),
            68 => 
            array (
                'id' => 11026,
                'id_city' => 18,
                'city_sector_name_fr' => 'jawhara',
                'city_sector_name_ar' => 'جوهرة',
                'city_sector_status' => 1,
            ),
            69 => 
            array (
                'id' => 11027,
                'id_city' => 18,
                'city_sector_name_fr' => 'jerifat',
                'city_sector_name_ar' => 'جريفات',
                'city_sector_status' => 1,
            ),
            70 => 
            array (
                'id' => 11028,
                'id_city' => 18,
                'city_sector_name_fr' => 'jnan choukri',
                'city_sector_name_ar' => 'جنان شكري',
                'city_sector_status' => 1,
            ),
            71 => 
            array (
                'id' => 11029,
                'id_city' => 18,
                'city_sector_name_fr' => 'jnane colonne1 et 2',
                'city_sector_name_ar' => 'جنان الكولون 1 / 2',
                'city_sector_status' => 1,
            ),
            72 => 
            array (
                'id' => 11030,
                'id_city' => 18,
                'city_sector_name_fr' => 'jnan el mestari',
                'city_sector_name_ar' => 'جنان المستاري',
                'city_sector_status' => 1,
            ),
            73 => 
            array (
                'id' => 11031,
                'id_city' => 18,
                'city_sector_name_fr' => 'jnane illane',
                'city_sector_name_ar' => 'جنان ايلان',
                'city_sector_status' => 1,
            ),
            74 => 
            array (
                'id' => 11032,
                'id_city' => 18,
                'city_sector_name_fr' => 'jnane zitoune',
                'city_sector_name_ar' => 'جنان زيتون',
                'city_sector_status' => 1,
            ),
            75 => 
            array (
                'id' => 11033,
                'id_city' => 18,
                'city_sector_name_fr' => 'karyat ech chams',
                'city_sector_name_ar' => 'قرية الشمس',
                'city_sector_status' => 1,
            ),
            76 => 
            array (
                'id' => 11034,
                'id_city' => 18,
                'city_sector_name_fr' => 'kawki',
                'city_sector_name_ar' => 'كوكي',
                'city_sector_status' => 1,
            ),
            77 => 
            array (
                'id' => 11035,
                'id_city' => 18,
                'city_sector_name_fr' => 'koudia al baida',
                'city_sector_name_ar' => 'كدية البيضة',
                'city_sector_status' => 1,
            ),
            78 => 
            array (
                'id' => 11036,
                'id_city' => 18,
                'city_sector_name_fr' => 'LABC',
                'city_sector_name_ar' => 'ل.ا.ب.س',
                'city_sector_status' => 1,
            ),
            79 => 
            array (
                'id' => 11037,
                'id_city' => 18,
                'city_sector_name_fr' => 'lamiaa',
                'city_sector_name_ar' => 'لمياء',
                'city_sector_status' => 1,
            ),
            80 => 
            array (
                'id' => 11038,
                'id_city' => 18,
                'city_sector_name_fr' => 'les courses ',
                'city_sector_name_ar' => 'ليكورس',
                'city_sector_status' => 1,
            ),
            81 => 
            array (
                'id' => 11039,
                'id_city' => 18,
                'city_sector_name_fr' => 'lkliaa',
                'city_sector_name_ar' => 'القليعة',
                'city_sector_status' => 1,
            ),
            82 => 
            array (
                'id' => 11040,
                'id_city' => 18,
                'city_sector_name_fr' => ' ancienne medina',
                'city_sector_name_ar' => 'المدينة العتيقة',
                'city_sector_status' => 1,
            ),
            83 => 
            array (
                'id' => 11041,
                'id_city' => 18,
                'city_sector_name_fr' => 'miftah el kheir',
                'city_sector_name_ar' => 'مفتاح الخير',
                'city_sector_status' => 1,
            ),
            84 => 
            array (
                'id' => 11042,
                'id_city' => 18,
                'city_sector_name_fr' => 'mouna',
                'city_sector_name_ar' => 'مونا',
                'city_sector_status' => 1,
            ),
            85 => 
            array (
                'id' => 11043,
                'id_city' => 18,
                'city_sector_name_fr' => 'nahda',
                'city_sector_name_ar' => 'النهضة',
                'city_sector_status' => 1,
            ),
            86 => 
            array (
                'id' => 11044,
                'id_city' => 18,
                'city_sector_name_fr' => 'ourida 1 et 2',
                'city_sector_name_ar' => 'اوريدا 1/2',
                'city_sector_status' => 1,
            ),
            87 => 
            array (
                'id' => 11045,
                'id_city' => 18,
                'city_sector_name_fr' => 'plateau',
                'city_sector_name_ar' => 'بلاطو',
                'city_sector_status' => 1,
            ),
            88 => 
            array (
                'id' => 11046,
                'id_city' => 18,
                'city_sector_name_fr' => 'rhat A rih',
                'city_sector_name_ar' => 'رحات الريح',
                'city_sector_status' => 1,
            ),
            89 => 
            array (
                'id' => 11047,
                'id_city' => 18,
                'city_sector_name_fr' => 'safi1',
                'city_sector_name_ar' => 'اسفي 1',
                'city_sector_status' => 1,
            ),
            90 => 
            array (
                'id' => 11048,
                'id_city' => 18,
                'city_sector_name_fr' => 'safi2',
                'city_sector_name_ar' => 'اسفي 2',
                'city_sector_status' => 1,
            ),
            91 => 
            array (
                'id' => 11049,
                'id_city' => 18,
                'city_sector_name_fr' => 'safi 3',
                'city_sector_name_ar' => '3اسفي ',
                'city_sector_status' => 1,
            ),
            92 => 
            array (
                'id' => 11050,
                'id_city' => 18,
                'city_sector_name_fr' => 'safiya',
                'city_sector_name_ar' => 'صافية',
                'city_sector_status' => 1,
            ),
            93 => 
            array (
                'id' => 11051,
                'id_city' => 18,
                'city_sector_name_fr' => 'saâida 1 et 2 ',
                'city_sector_name_ar' => 'السعيدة 1/2',
                'city_sector_status' => 1,
            ),
            94 => 
            array (
                'id' => 11052,
                'id_city' => 18,
                'city_sector_name_fr' => 'sidi abdelkrim',
                'city_sector_name_ar' => 'سيدي عبد الكريم',
                'city_sector_status' => 1,
            ),
            95 => 
            array (
                'id' => 11053,
                'id_city' => 18,
                'city_sector_name_fr' => 'sidi bouzid ',
                'city_sector_name_ar' => 'سيدي بوزيد',
                'city_sector_status' => 1,
            ),
            96 => 
            array (
                'id' => 11054,
                'id_city' => 18,
                'city_sector_name_fr' => 'swinia',
                'city_sector_name_ar' => 'سوينية',
                'city_sector_status' => 1,
            ),
            97 => 
            array (
                'id' => 11055,
                'id_city' => 18,
                'city_sector_name_fr' => 'trab assini',
                'city_sector_name_ar' => 'تراب اسني',
                'city_sector_status' => 1,
            ),
            98 => 
            array (
                'id' => 11056,
                'id_city' => 18,
                'city_sector_name_fr' => 'wad el bacha',
                'city_sector_name_ar' => 'واد الباشا',
                'city_sector_status' => 1,
            ),
            99 => 
            array (
                'id' => 11057,
                'id_city' => 18,
                'city_sector_name_fr' => 'zawiyat sidi wassel',
                'city_sector_name_ar' => 'زاوية سيدي واصل',
                'city_sector_status' => 1,
            ),
            100 => 
            array (
                'id' => 12000,
                'id_city' => 19,
                'city_sector_name_fr' => 'toute la ville',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            101 => 
            array (
                'id' => 12001,
                'id_city' => 19,
                'city_sector_name_fr' => 'ahbas',
                'city_sector_name_ar' => 'احباس',
                'city_sector_status' => 1,
            ),
            102 => 
            array (
                'id' => 12002,
                'id_city' => 19,
                'city_sector_name_fr' => 'alouane',
                'city_sector_name_ar' => 'الاوان',
                'city_sector_status' => 1,
            ),
            103 => 
            array (
                'id' => 12003,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay al kamal',
                'city_sector_name_ar' => 'حي الكمال',
                'city_sector_status' => 1,
            ),
            104 => 
            array (
                'id' => 12004,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay kassam',
                'city_sector_name_ar' => 'حي قسام',
                'city_sector_status' => 1,
            ),
            105 => 
            array (
                'id' => 12005,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay kilz',
                'city_sector_name_ar' => 'حي كلز',
                'city_sector_status' => 1,
            ),
            106 => 
            array (
                'id' => 12006,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay mabrouka',
                'city_sector_name_ar' => 'حي مبروكة',
                'city_sector_status' => 1,
            ),
            107 => 
            array (
                'id' => 12007,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay mimouna',
                'city_sector_name_ar' => 'حي ميمونة',
                'city_sector_status' => 1,
            ),
            108 => 
            array (
                'id' => 12008,
                'id_city' => 19,
                'city_sector_name_fr' => 'hay salam',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            109 => 
            array (
                'id' => 12009,
                'id_city' => 19,
                'city_sector_name_fr' => 'hensali',
                'city_sector_name_ar' => 'حنسالي',
                'city_sector_status' => 1,
            ),
            110 => 
            array (
                'id' => 12010,
                'id_city' => 19,
                'city_sector_name_fr' => 'mania',
                'city_sector_name_ar' => 'مانية',
                'city_sector_status' => 1,
            ),
            111 => 
            array (
                'id' => 12011,
                'id_city' => 19,
                'city_sector_name_fr' => 'sidi abdelkarim',
                'city_sector_name_ar' => 'سيدي عبد الكريم',
                'city_sector_status' => 1,
            ),
            112 => 
            array (
                'id' => 12012,
                'id_city' => 19,
                'city_sector_name_fr' => 'smaâla',
                'city_sector_name_ar' => 'سماعلة',
                'city_sector_status' => 1,
            ),
            113 => 
            array (
                'id' => 12013,
                'id_city' => 19,
                'city_sector_name_fr' => 'tahiri',
                'city_sector_name_ar' => 'الطاهري',
                'city_sector_status' => 1,
            ),
            114 => 
            array (
                'id' => 12014,
                'id_city' => 19,
                'city_sector_name_fr' => 'tanmiya',
                'city_sector_name_ar' => 'التنمية',
                'city_sector_status' => 1,
            ),
            115 => 
            array (
                'id' => 13000,
                'id_city' => 20,
                'city_sector_name_fr' => 'toute la ville',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            116 => 
            array (
                'id' => 13001,
                'id_city' => 20,
                'city_sector_name_fr' => 'bab al bahr',
                'city_sector_name_ar' => 'باب البحر',
                'city_sector_status' => 1,
            ),
            117 => 
            array (
                'id' => 13002,
                'id_city' => 20,
                'city_sector_name_fr' => 'bab sebta',
                'city_sector_name_ar' => 'باب سبتة',
                'city_sector_status' => 1,
            ),
            118 => 
            array (
                'id' => 13003,
                'id_city' => 20,
                'city_sector_name_fr' => 'cherkaoui-marzouka',
                'city_sector_name_ar' => 'الشرقوي-مرزوكة',
                'city_sector_status' => 1,
            ),
            119 => 
            array (
                'id' => 13004,
                'id_city' => 20,
                'city_sector_name_fr' => 'ghrablia ',
                'city_sector_name_ar' => 'غرابليا',
                'city_sector_status' => 1,
            ),
            120 => 
            array (
                'id' => 13005,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay chmaou',
                'city_sector_name_ar' => 'حي شمؤو',
                'city_sector_status' => 1,
            ),
            121 => 
            array (
                'id' => 13006,
                'id_city' => 20,
                'city_sector_name_fr' => 'medina',
                'city_sector_name_ar' => 'المدينة',
                'city_sector_status' => 1,
            ),
            122 => 
            array (
                'id' => 13007,
                'id_city' => 20,
                'city_sector_name_fr' => 'mkinssia',
                'city_sector_name_ar' => 'مكنسية',
                'city_sector_status' => 1,
            ),
            123 => 
            array (
                'id' => 13008,
                'id_city' => 20,
                'city_sector_name_fr' => 'ouled moussa',
                'city_sector_name_ar' => 'ولاد موسى',
                'city_sector_status' => 1,
            ),
            124 => 
            array (
                'id' => 13009,
                'id_city' => 20,
                'city_sector_name_fr' => 'sidi hajji',
                'city_sector_name_ar' => 'سيدي حاجي',
                'city_sector_status' => 1,
            ),
            125 => 
            array (
                'id' => 13010,
                'id_city' => 20,
                'city_sector_name_fr' => 'zone industrielle saniat sbihi',
                'city_sector_name_ar' => 'المنطقة الصناعية سانية السبيحي',
                'city_sector_status' => 1,
            ),
            126 => 
            array (
                'id' => 13011,
                'id_city' => 20,
                'city_sector_name_fr' => 'bettana',
                'city_sector_name_ar' => 'بطانة',
                'city_sector_status' => 1,
            ),
            127 => 
            array (
                'id' => 13012,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay moulay smail',
                'city_sector_name_ar' => 'حي مولاي اسماعيل',
                'city_sector_status' => 1,
            ),
            128 => 
            array (
                'id' => 13013,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay salam',
                'city_sector_name_ar' => 'حي السلام',
                'city_sector_status' => 1,
            ),
            129 => 
            array (
                'id' => 13014,
                'id_city' => 20,
                'city_sector_name_fr' => 'kharouba',
                'city_sector_name_ar' => 'خروبة',
                'city_sector_status' => 1,
            ),
            130 => 
            array (
                'id' => 13015,
                'id_city' => 20,
                'city_sector_name_fr' => 'lakhmis',
                'city_sector_name_ar' => 'لخميس',
                'city_sector_status' => 1,
            ),
            131 => 
            array (
                'id' => 13016,
                'id_city' => 20,
                'city_sector_name_fr' => 'lharya',
                'city_sector_name_ar' => 'الهرية',
                'city_sector_status' => 1,
            ),
            132 => 
            array (
                'id' => 13017,
                'id_city' => 20,
                'city_sector_name_fr' => 'el qaria',
                'city_sector_name_ar' => 'القرية',
                'city_sector_status' => 1,
            ),
            133 => 
            array (
                'id' => 13018,
                'id_city' => 20,
                'city_sector_name_fr' => 'sala el jadida',
                'city_sector_name_ar' => 'سلا الجديدة',
                'city_sector_status' => 1,
            ),
            134 => 
            array (
                'id' => 13019,
                'id_city' => 20,
                'city_sector_name_fr' => 'technopolis',
                'city_sector_name_ar' => 'تكنو بوليس',
                'city_sector_status' => 1,
            ),
            135 => 
            array (
                'id' => 13020,
                'id_city' => 20,
                'city_sector_name_fr' => 'abouab sala',
                'city_sector_name_ar' => 'ابواب سلا',
                'city_sector_status' => 1,
            ),
            136 => 
            array (
                'id' => 13021,
                'id_city' => 20,
                'city_sector_name_fr' => 'cité militaire',
                'city_sector_name_ar' => 'الحي العسكري',
                'city_sector_status' => 1,
            ),
            137 => 
            array (
                'id' => 13022,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay Inbiat',
                'city_sector_name_ar' => 'حي الانبعات',
                'city_sector_status' => 1,
            ),
            138 => 
            array (
                'id' => 13023,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay oued dahab',
                'city_sector_name_ar' => 'حي واد الذهب',
                'city_sector_status' => 1,
            ),
            139 => 
            array (
                'id' => 13024,
                'id_city' => 20,
                'city_sector_name_fr' => 'sakani',
                'city_sector_name_ar' => 'سكني',
                'city_sector_status' => 1,
            ),
            140 => 
            array (
                'id' => 13025,
                'id_city' => 20,
                'city_sector_name_fr' => 'sidi abdellah',
                'city_sector_name_ar' => 'سيدي عبد الله',
                'city_sector_status' => 1,
            ),
            141 => 
            array (
                'id' => 13026,
                'id_city' => 20,
                'city_sector_name_fr' => 'al bassatine',
                'city_sector_name_ar' => 'البساتين',
                'city_sector_status' => 1,
            ),
            142 => 
            array (
                'id' => 13027,
                'id_city' => 20,
                'city_sector_name_fr' => 'al mouahiddine',
                'city_sector_name_ar' => 'الموحدين',
                'city_sector_status' => 1,
            ),
            143 => 
            array (
                'id' => 13028,
                'id_city' => 20,
                'city_sector_name_fr' => 'al moukataa',
                'city_sector_name_ar' => 'المقاطعة',
                'city_sector_status' => 1,
            ),
            144 => 
            array (
                'id' => 13029,
                'id_city' => 20,
                'city_sector_name_fr' => 'andalous',
                'city_sector_name_ar' => 'الاندلس',
                'city_sector_status' => 1,
            ),
            145 => 
            array (
                'id' => 13030,
                'id_city' => 20,
                'city_sector_name_fr' => 'annaim',
                'city_sector_name_ar' => 'النعيم',
                'city_sector_status' => 1,
            ),
            146 => 
            array (
                'id' => 13031,
                'id_city' => 20,
                'city_sector_name_fr' => 'bled el gharbi',
                'city_sector_name_ar' => 'بلد الغربي',
                'city_sector_status' => 1,
            ),
            147 => 
            array (
                'id' => 13032,
                'id_city' => 20,
                'city_sector_name_fr' => 'dar el hamra',
                'city_sector_name_ar' => 'دار الحمرة',
                'city_sector_status' => 1,
            ),
            148 => 
            array (
                'id' => 13033,
                'id_city' => 20,
                'city_sector_name_fr' => 'dyour el ghaba',
                'city_sector_name_ar' => 'ديور الغابة',
                'city_sector_status' => 1,
            ),
            149 => 
            array (
                'id' => 13034,
                'id_city' => 20,
                'city_sector_name_fr' => 'dyour el nejjar',
                'city_sector_name_ar' => 'ديور النجار',
                'city_sector_status' => 1,
            ),
            150 => 
            array (
                'id' => 13035,
                'id_city' => 20,
                'city_sector_name_fr' => 'frougui',
                'city_sector_name_ar' => 'فروغي',
                'city_sector_status' => 1,
            ),
            151 => 
            array (
                'id' => 13036,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay al qods',
                'city_sector_name_ar' => 'حي القدس',
                'city_sector_status' => 1,
            ),
            152 => 
            array (
                'id' => 13037,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay cheikh lamfadel',
                'city_sector_name_ar' => 'حي الشيخ المفضل',
                'city_sector_status' => 1,
            ),
            153 => 
            array (
                'id' => 13038,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay karima',
                'city_sector_name_ar' => 'حي كريمة',
                'city_sector_status' => 1,
            ),
            154 => 
            array (
                'id' => 13039,
                'id_city' => 20,
                'city_sector_name_fr' => 'hay rahma',
                'city_sector_name_ar' => 'حي رحمة',
                'city_sector_status' => 1,
            ),
            155 => 
            array (
                'id' => 13040,
                'id_city' => 20,
                'city_sector_name_fr' => 'horria ',
                'city_sector_name_ar' => 'حرية',
                'city_sector_status' => 1,
            ),
            156 => 
            array (
                'id' => 13041,
                'id_city' => 20,
                'city_sector_name_fr' => 'Inbiaat',
                'city_sector_name_ar' => 'انبعاث',
                'city_sector_status' => 1,
            ),
            157 => 
            array (
                'id' => 13042,
                'id_city' => 20,
                'city_sector_name_fr' => 'lalla aicha',
                'city_sector_name_ar' => 'لالة عيشة',
                'city_sector_status' => 1,
            ),
            158 => 
            array (
                'id' => 13043,
                'id_city' => 20,
                'city_sector_name_fr' => 'omar',
                'city_sector_name_ar' => 'عمر',
                'city_sector_status' => 1,
            ),
            159 => 
            array (
                'id' => 13044,
                'id_city' => 20,
                'city_sector_name_fr' => 'pépiniere',
                'city_sector_name_ar' => 'المنبت',
                'city_sector_status' => 1,
            ),
            160 => 
            array (
                'id' => 13045,
                'id_city' => 20,
                'city_sector_name_fr' => 'roustal ',
                'city_sector_name_ar' => 'روسطال',
                'city_sector_status' => 1,
            ),
            161 => 
            array (
                'id' => 13046,
                'id_city' => 20,
                'city_sector_name_fr' => 'tabriquet ',
                'city_sector_name_ar' => 'تبريكات',
                'city_sector_status' => 1,
            ),
            162 => 
            array (
                'id' => 13047,
                'id_city' => 20,
                'city_sector_name_fr' => 'zone industrielle hay arrahma',
                'city_sector_name_ar' => 'المنطقة الصناعية حي الرحمة',
                'city_sector_status' => 1,
            ),
            163 => 
            array (
                'id' => 14000,
                'id_city' => 21,
                'city_sector_name_fr' => 'al kasaba',
                'city_sector_name_ar' => 'القصبة',
                'city_sector_status' => 1,
            ),
            164 => 
            array (
                'id' => 14001,
                'id_city' => 21,
                'city_sector_name_fr' => 'aviation',
                'city_sector_name_ar' => 'الطيران',
                'city_sector_status' => 1,
            ),
            165 => 
            array (
                'id' => 14002,
                'id_city' => 21,
                'city_sector_name_fr' => 'cap spartel',
                'city_sector_name_ar' => 'كاب سبارتيل',
                'city_sector_status' => 1,
            ),
            166 => 
            array (
                'id' => 14003,
                'id_city' => 21,
                'city_sector_name_fr' => 'centre ville',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            167 => 
            array (
                'id' => 14004,
                'id_city' => 21,
                'city_sector_name_fr' => 'cité californie',
                'city_sector_name_ar' => 'سيتي كاليفورنيا',
                'city_sector_status' => 1,
            ),
            168 => 
            array (
                'id' => 14005,
                'id_city' => 21,
                'city_sector_name_fr' => 'girari',
                'city_sector_name_ar' => 'جيراري',
                'city_sector_status' => 1,
            ),
            169 => 
            array (
                'id' => 14006,
                'id_city' => 21,
                'city_sector_name_fr' => 'ibn taymia',
                'city_sector_name_ar' => 'ابن تايمة',
                'city_sector_status' => 1,
            ),
            170 => 
            array (
                'id' => 14007,
                'id_city' => 21,
                'city_sector_name_fr' => 'M nar',
                'city_sector_name_ar' => 'المنار',
                'city_sector_status' => 1,
            ),
            171 => 
            array (
                'id' => 14008,
                'id_city' => 21,
                'city_sector_name_fr' => 'M ssalah',
                'city_sector_name_ar' => 'المصلى',
                'city_sector_status' => 1,
            ),
            172 => 
            array (
                'id' => 14009,
                'id_city' => 21,
                'city_sector_name_fr' => 'makhoukha',
                'city_sector_name_ar' => 'مخوخة',
                'city_sector_status' => 1,
            ),
            173 => 
            array (
                'id' => 14010,
                'id_city' => 21,
                'city_sector_name_fr' => 'malabata',
                'city_sector_name_ar' => 'مالبطا',
                'city_sector_status' => 1,
            ),
            174 => 
            array (
                'id' => 14011,
                'id_city' => 21,
                'city_sector_name_fr' => 'marchane',
                'city_sector_name_ar' => 'مرشان',
                'city_sector_status' => 1,
            ),
            175 => 
            array (
                'id' => 14012,
                'id_city' => 21,
                'city_sector_name_fr' => 'marjane',
                'city_sector_name_ar' => 'مرجان',
                'city_sector_status' => 1,
            ),
            176 => 
            array (
                'id' => 14013,
                'id_city' => 21,
                'city_sector_name_fr' => 'moujahiddine',
                'city_sector_name_ar' => 'المجاهدين',
                'city_sector_status' => 1,
            ),
            177 => 
            array (
                'id' => 14014,
                'id_city' => 21,
                'city_sector_name_fr' => 'moulay youssef',
                'city_sector_name_ar' => 'مولاي يوسف',
                'city_sector_status' => 1,
            ),
            178 => 
            array (
                'id' => 14015,
                'id_city' => 21,
                'city_sector_name_fr' => 'santa',
                'city_sector_name_ar' => 'سانتا',
                'city_sector_status' => 1,
            ),
            179 => 
            array (
                'id' => 14016,
                'id_city' => 21,
                'city_sector_name_fr' => 'val fleuri',
                'city_sector_name_ar' => 'فال فلوري',
                'city_sector_status' => 1,
            ),
            180 => 
            array (
                'id' => 14017,
                'id_city' => 21,
                'city_sector_name_fr' => 'vieille montagne',
                'city_sector_name_ar' => 'الجبل القديم',
                'city_sector_status' => 1,
            ),
            181 => 
            array (
                'id' => 14018,
                'id_city' => 21,
                'city_sector_name_fr' => 'ziatene',
                'city_sector_name_ar' => 'الزياتن',
                'city_sector_status' => 1,
            ),
            182 => 
            array (
                'id' => 14019,
                'id_city' => 21,
                'city_sector_name_fr' => 'achennad',
                'city_sector_name_ar' => 'اشناد',
                'city_sector_status' => 1,
            ),
            183 => 
            array (
                'id' => 14020,
                'id_city' => 21,
                'city_sector_name_fr' => 'aharrarine',
                'city_sector_name_ar' => 'احارارين',
                'city_sector_status' => 1,
            ),
            184 => 
            array (
                'id' => 14021,
                'id_city' => 21,
                'city_sector_name_fr' => 'ahlane',
                'city_sector_name_ar' => 'اهلا',
                'city_sector_status' => 1,
            ),
            185 => 
            array (
                'id' => 14022,
                'id_city' => 21,
                'city_sector_name_fr' => 'aida',
                'city_sector_name_ar' => 'عيدة',
                'city_sector_status' => 1,
            ),
            186 => 
            array (
                'id' => 14023,
                'id_city' => 21,
                'city_sector_name_fr' => 'Al anbar ',
                'city_sector_name_ar' => 'العنبر',
                'city_sector_status' => 1,
            ),
            187 => 
            array (
                'id' => 14024,
                'id_city' => 21,
                'city_sector_name_fr' => 'al wahda ',
                'city_sector_name_ar' => 'الوحدة',
                'city_sector_status' => 1,
            ),
            188 => 
            array (
                'id' => 14025,
                'id_city' => 21,
                'city_sector_name_fr' => 'aouama gharbia',
                'city_sector_name_ar' => 'العوامة الغربية',
                'city_sector_status' => 1,
            ),
            189 => 
            array (
                'id' => 14026,
                'id_city' => 21,
                'city_sector_name_fr' => 'beausejour',
                'city_sector_name_ar' => 'بوسيجور',
                'city_sector_status' => 1,
            ),
            190 => 
            array (
                'id' => 14027,
                'id_city' => 21,
                'city_sector_name_fr' => 'behair',
                'city_sector_name_ar' => 'البحير',
                'city_sector_status' => 1,
            ),
            191 => 
            array (
                'id' => 14028,
                'id_city' => 21,
                'city_sector_name_fr' => 'ben dibane',
                'city_sector_name_ar' => 'بندبان',
                'city_sector_status' => 1,
            ),
            192 => 
            array (
                'id' => 14029,
                'id_city' => 21,
                'city_sector_name_fr' => 'beni makada lakdima',
                'city_sector_name_ar' => 'بني مكدة القديمة',
                'city_sector_status' => 1,
            ),
            193 => 
            array (
                'id' => 14030,
                'id_city' => 21,
                'city_sector_name_fr' => 'beni said',
                'city_sector_name_ar' => 'بني سعيد',
                'city_sector_status' => 1,
            ),
            194 => 
            array (
                'id' => 14031,
                'id_city' => 21,
                'city_sector_name_fr' => 'beni touzine',
                'city_sector_name_ar' => 'بني توزين',
                'city_sector_status' => 1,
            ),
            195 => 
            array (
                'id' => 14032,
                'id_city' => 21,
                'city_sector_name_fr' => 'bir aharchoune',
                'city_sector_name_ar' => 'بئر احرشون',
                'city_sector_status' => 1,
            ),
            196 => 
            array (
                'id' => 14033,
                'id_city' => 21,
                'city_sector_name_fr' => 'bir chifa',
                'city_sector_name_ar' => 'بئر الشيفا',
                'city_sector_status' => 1,
            ),
            197 => 
            array (
                'id' => 14034,
                'id_city' => 21,
                'city_sector_name_fr' => 'bir el ghazi ',
                'city_sector_name_ar' => 'بئر الغازي',
                'city_sector_status' => 1,
            ),
            198 => 
            array (
                'id' => 14035,
                'id_city' => 21,
                'city_sector_name_fr' => 'bouchta abdelatif',
                'city_sector_name_ar' => 'بوشتى عبد اللطيف',
                'city_sector_status' => 1,
            ),
            199 => 
            array (
                'id' => 14036,
                'id_city' => 21,
                'city_sector_name_fr' => 'bouhout 1',
                'city_sector_name_ar' => 'بوحوت 1',
                'city_sector_status' => 1,
            ),
            200 => 
            array (
                'id' => 14037,
                'id_city' => 21,
                'city_sector_name_fr' => 'bouhout2',
                'city_sector_name_ar' => 'بوحوت 2',
                'city_sector_status' => 1,
            ),
            201 => 
            array (
                'id' => 14038,
                'id_city' => 21,
                'city_sector_name_fr' => 'dher ahjjam',
                'city_sector_name_ar' => 'دهير احجام',
                'city_sector_status' => 1,
            ),
            202 => 
            array (
                'id' => 14039,
                'id_city' => 21,
                'city_sector_name_fr' => 'dher lahmam',
                'city_sector_name_ar' => 'دهير الحمام',
                'city_sector_status' => 1,
            ),
            203 => 
            array (
                'id' => 14040,
                'id_city' => 21,
                'city_sector_name_fr' => 'el baraka',
                'city_sector_name_ar' => 'البركة',
                'city_sector_status' => 1,
            ),
            204 => 
            array (
                'id' => 14041,
                'id_city' => 21,
                'city_sector_name_fr' => 'el haj el mokhtar',
                'city_sector_name_ar' => 'الحاج المختار',
                'city_sector_status' => 1,
            ),
            205 => 
            array (
                'id' => 14042,
                'id_city' => 21,
                'city_sector_name_fr' => 'el khair1',
                'city_sector_name_ar' => 'الخير 1',
                'city_sector_status' => 1,
            ),
            206 => 
            array (
                'id' => 14043,
                'id_city' => 21,
                'city_sector_name_fr' => 'elkhair2',
                'city_sector_name_ar' => 'الخير2',
                'city_sector_status' => 1,
            ),
            207 => 
            array (
                'id' => 14044,
                'id_city' => 21,
                'city_sector_name_fr' => 'el mers1',
                'city_sector_name_ar' => 'المرس 1',
                'city_sector_status' => 1,
            ),
            208 => 
            array (
                'id' => 14045,
                'id_city' => 21,
                'city_sector_name_fr' => 'el mers2',
                'city_sector_name_ar' => 'المرس 2',
                'city_sector_status' => 1,
            ),
            209 => 
            array (
                'id' => 14046,
                'id_city' => 21,
                'city_sector_name_fr' => 'el merabet',
                'city_sector_name_ar' => 'المرابط',
                'city_sector_status' => 1,
            ),
            210 => 
            array (
                'id' => 14047,
                'id_city' => 21,
                'city_sector_name_fr' => 'ennasr',
                'city_sector_name_ar' => 'النصر',
                'city_sector_status' => 1,
            ),
            211 => 
            array (
                'id' => 14048,
                'id_city' => 21,
                'city_sector_name_fr' => 'goursiana',
                'city_sector_name_ar' => 'غورسيانا',
                'city_sector_status' => 1,
            ),
            212 => 
            array (
                'id' => 14049,
                'id_city' => 21,
                'city_sector_name_fr' => 'haddad',
                'city_sector_name_ar' => 'الحداد',
                'city_sector_status' => 1,
            ),
            213 => 
            array (
                'id' => 14050,
                'id_city' => 21,
                'city_sector_name_fr' => 'hanaa1',
                'city_sector_name_ar' => 'هناء1',
                'city_sector_status' => 1,
            ),
            214 => 
            array (
                'id' => 14051,
                'id_city' => 21,
                'city_sector_name_fr' => 'hanaa2',
                'city_sector_name_ar' => 'هناء2',
                'city_sector_status' => 1,
            ),
            215 => 
            array (
                'id' => 14052,
                'id_city' => 21,
                'city_sector_name_fr' => 'hanaa3',
                'city_sector_name_ar' => 'هناء3',
                'city_sector_status' => 1,
            ),
            216 => 
            array (
                'id' => 14053,
                'id_city' => 21,
                'city_sector_name_fr' => 'jirrari',
                'city_sector_name_ar' => 'جيراري',
                'city_sector_status' => 1,
            ),
            217 => 
            array (
                'id' => 14054,
                'id_city' => 21,
                'city_sector_name_fr' => 'les rosiers',
                'city_sector_name_ar' => 'الورود',
                'city_sector_status' => 1,
            ),
            218 => 
            array (
                'id' => 14055,
                'id_city' => 21,
                'city_sector_name_fr' => 'zemmouri',
                'city_sector_name_ar' => 'الزموري',
                'city_sector_status' => 1,
            ),
            219 => 
            array (
                'id' => 14056,
                'id_city' => 21,
                'city_sector_name_fr' => 'zouitina',
                'city_sector_name_ar' => 'الزويتينة',
                'city_sector_status' => 1,
            ),
            220 => 
            array (
                'id' => 14057,
                'id_city' => 21,
                'city_sector_name_fr' => 'al amal',
                'city_sector_name_ar' => 'الامل',
                'city_sector_status' => 1,
            ),
            221 => 
            array (
                'id' => 14058,
                'id_city' => 21,
                'city_sector_name_fr' => 'al mandar al jamil',
                'city_sector_name_ar' => 'المنظر الجميل',
                'city_sector_status' => 1,
            ),
            222 => 
            array (
                'id' => 14059,
                'id_city' => 21,
                'city_sector_name_fr' => 'alia',
                'city_sector_name_ar' => 'عالية',
                'city_sector_status' => 1,
            ),
            223 => 
            array (
                'id' => 14060,
                'id_city' => 21,
                'city_sector_name_fr' => 'benkirane',
                'city_sector_name_ar' => 'بنكيران',
                'city_sector_status' => 1,
            ),
            224 => 
            array (
                'id' => 14061,
                'id_city' => 21,
                'city_sector_name_fr' => 'charf',
                'city_sector_name_ar' => 'شرف',
                'city_sector_status' => 1,
            ),
            225 => 
            array (
                'id' => 14062,
                'id_city' => 21,
                'city_sector_name_fr' => 'draoua',
                'city_sector_name_ar' => 'دراوا',
                'city_sector_status' => 1,
            ),
            226 => 
            array (
                'id' => 14063,
                'id_city' => 21,
                'city_sector_name_fr' => 'drissia',
                'city_sector_name_ar' => 'ادريسية',
                'city_sector_status' => 1,
            ),
            227 => 
            array (
                'id' => 14064,
                'id_city' => 21,
                'city_sector_name_fr' => 'el majd',
                'city_sector_name_ar' => 'المجد',
                'city_sector_status' => 1,
            ),
            228 => 
            array (
                'id' => 14065,
                'id_city' => 21,
                'city_sector_name_fr' => 'el majd',
                'city_sector_name_ar' => 'المجد',
                'city_sector_status' => 1,
            ),
            229 => 
            array (
                'id' => 14066,
                'id_city' => 21,
                'city_sector_name_fr' => 'el oued',
                'city_sector_name_ar' => 'الواد',
                'city_sector_status' => 1,
            ),
            230 => 
            array (
                'id' => 14067,
                'id_city' => 21,
                'city_sector_name_fr' => 'mghogha',
                'city_sector_name_ar' => 'مغوغة',
                'city_sector_status' => 1,
            ),
            231 => 
            array (
                'id' => 14068,
                'id_city' => 21,
                'city_sector_name_fr' => 'nzaha',
                'city_sector_name_ar' => 'النزهة',
                'city_sector_status' => 1,
            ),
            232 => 
            array (
                'id' => 14069,
                'id_city' => 21,
                'city_sector_name_fr' => 'sania',
                'city_sector_name_ar' => 'سانية',
                'city_sector_status' => 1,
            ),
            233 => 
            array (
                'id' => 14070,
                'id_city' => 21,
                'city_sector_name_fr' => 'tanger city center',
                'city_sector_name_ar' => 'طنجة سيتي سانتر',
                'city_sector_status' => 1,
            ),
            234 => 
            array (
                'id' => 14071,
                'id_city' => 21,
                'city_sector_name_fr' => 'tanja balia',
                'city_sector_name_ar' => 'طنجة البالية',
                'city_sector_status' => 1,
            ),
            235 => 
            array (
                'id' => 14072,
                'id_city' => 21,
                'city_sector_name_fr' => 'zone industrielle mghogha',
                'city_sector_name_ar' => 'المنطقة الصناعية مغوغة',
                'city_sector_status' => 1,
            ),
            236 => 
            array (
                'id' => 14073,
                'id_city' => 21,
                'city_sector_name_fr' => 'azib haj kaddour',
                'city_sector_name_ar' => 'عزيب الحاج قدور',
                'city_sector_status' => 1,
            ),
            237 => 
            array (
                'id' => 14074,
                'id_city' => 21,
                'city_sector_name_fr' => 'bel air-val fleuri',
                'city_sector_name_ar' => 'بيل فال فلوري',
                'city_sector_status' => 1,
            ),
            238 => 
            array (
                'id' => 14075,
                'id_city' => 21,
                'city_sector_name_fr' => 'bir chairi',
                'city_sector_name_ar' => 'بئر الشعيري',
                'city_sector_status' => 1,
            ),
            239 => 
            array (
                'id' => 14076,
                'id_city' => 21,
                'city_sector_name_fr' => 'branes1',
                'city_sector_name_ar' => 'البرانس 1',
                'city_sector_status' => 1,
            ),
            240 => 
            array (
                'id' => 14077,
                'id_city' => 21,
                'city_sector_name_fr' => 'branes2',
                'city_sector_name_ar' => 'البرانس 2',
                'city_sector_status' => 1,
            ),
            241 => 
            array (
                'id' => 14078,
                'id_city' => 21,
                'city_sector_name_fr' => 'casabarata',
                'city_sector_name_ar' => 'كاسا براطا',
                'city_sector_status' => 1,
            ),
            242 => 
            array (
                'id' => 14079,
                'id_city' => 21,
                'city_sector_name_fr' => 'castilla',
                'city_sector_name_ar' => 'كاستيا',
                'city_sector_status' => 1,
            ),
            243 => 
            array (
                'id' => 14080,
                'id_city' => 21,
                'city_sector_name_fr' => 'hay el bassatine',
                'city_sector_name_ar' => 'حي البساتين',
                'city_sector_status' => 1,
            ),
            244 => 
            array (
                'id' => 14081,
                'id_city' => 21,
                'city_sector_name_fr' => 'hay el boughaz',
                'city_sector_name_ar' => 'حي البغاز',
                'city_sector_status' => 1,
            ),
            245 => 
            array (
                'id' => 14082,
                'id_city' => 21,
                'city_sector_name_fr' => 'hay zaoudia ',
                'city_sector_name_ar' => 'حي زودية',
                'city_sector_status' => 1,
            ),
            246 => 
            array (
                'id' => 14083,
                'id_city' => 21,
                'city_sector_name_fr' => 'lalla chafia',
                'city_sector_name_ar' => 'لالة الشافية',
                'city_sector_status' => 1,
            ),
            247 => 
            array (
                'id' => 14084,
                'id_city' => 21,
                'city_sector_name_fr' => 'souani',
                'city_sector_name_ar' => 'السواني',
                'city_sector_status' => 1,
            ),
            248 => 
            array (
                'id' => 14085,
                'id_city' => 21,
                'city_sector_name_fr' => 'achakar',
                'city_sector_name_ar' => 'اشقار',
                'city_sector_status' => 1,
            ),
            249 => 
            array (
                'id' => 14086,
                'id_city' => 21,
                'city_sector_name_fr' => 'administratif',
                'city_sector_name_ar' => 'اداري',
                'city_sector_status' => 1,
            ),
            250 => 
            array (
                'id' => 14087,
                'id_city' => 21,
                'city_sector_name_fr' => 'ahammar',
                'city_sector_name_ar' => 'احمار',
                'city_sector_status' => 1,
            ),
            251 => 
            array (
                'id' => 14088,
                'id_city' => 21,
                'city_sector_name_fr' => 'ain el hayani',
                'city_sector_name_ar' => 'عين الحياني',
                'city_sector_status' => 1,
            ),
            252 => 
            array (
                'id' => 14089,
                'id_city' => 21,
                'city_sector_name_fr' => 'algerie',
                'city_sector_name_ar' => 'الجزائر',
                'city_sector_status' => 1,
            ),
            253 => 
            array (
                'id' => 14090,
                'id_city' => 21,
                'city_sector_name_fr' => 'branes kdima',
                'city_sector_name_ar' => 'برانس القديمة',
                'city_sector_status' => 1,
            ),
            254 => 
            array (
                'id' => 14091,
                'id_city' => 21,
                'city_sector_name_fr' => 'californie',
                'city_sector_name_ar' => 'كاليفورني',
                'city_sector_status' => 1,
            ),
            255 => 
            array (
                'id' => 16007,
                'id_city' => 23,
                'city_sector_name_fr' => 'boujarah',
                'city_sector_name_ar' => 'بوجراح',
                'city_sector_status' => 1,
            ),
            256 => 
            array (
                'id' => 14093,
                'id_city' => 21,
                'city_sector_name_fr' => 'de la plage',
                'city_sector_name_ar' => 'البحر',
                'city_sector_status' => 1,
            ),
            257 => 
            array (
                'id' => 14094,
                'id_city' => 21,
                'city_sector_name_fr' => 'golf',
                'city_sector_name_ar' => 'غولف',
                'city_sector_status' => 1,
            ),
            258 => 
            array (
                'id' => 14095,
                'id_city' => 21,
                'city_sector_name_fr' => 'hay hassani',
                'city_sector_name_ar' => 'حي الحسني',
                'city_sector_status' => 1,
            ),
            259 => 
            array (
                'id' => 14096,
                'id_city' => 21,
                'city_sector_name_fr' => 'Iberie',
                'city_sector_name_ar' => 'ايبيري',
                'city_sector_status' => 1,
            ),
            260 => 
            array (
                'id' => 14097,
                'id_city' => 21,
                'city_sector_name_fr' => 'jbel kbir',
                'city_sector_name_ar' => 'جبل الكبير',
                'city_sector_status' => 1,
            ),
            261 => 
            array (
                'id' => 14098,
                'id_city' => 21,
                'city_sector_name_fr' => 'laaouina ',
                'city_sector_name_ar' => 'العوينة',
                'city_sector_status' => 1,
            ),
            262 => 
            array (
                'id' => 14099,
                'id_city' => 21,
                'city_sector_name_fr' => 'marchan',
                'city_sector_name_ar' => 'مرشان',
                'city_sector_status' => 1,
            ),
            263 => 
            array (
                'id' => 14100,
                'id_city' => 21,
                'city_sector_name_fr' => 'mediouna',
                'city_sector_name_ar' => 'مديونة',
                'city_sector_status' => 1,
            ),
            264 => 
            array (
                'id' => 14101,
                'id_city' => 21,
                'city_sector_name_fr' => 'mesnana',
                'city_sector_name_ar' => 'مسنانة',
                'city_sector_status' => 1,
            ),
            265 => 
            array (
                'id' => 14102,
                'id_city' => 21,
                'city_sector_name_fr' => 'mghayer',
                'city_sector_name_ar' => 'مغايير',
                'city_sector_status' => 1,
            ),
            266 => 
            array (
                'id' => 14103,
                'id_city' => 21,
                'city_sector_name_fr' => 'mister khouch',
                'city_sector_name_ar' => 'ميستر خوش',
                'city_sector_status' => 1,
            ),
            267 => 
            array (
                'id' => 14104,
                'id_city' => 21,
                'city_sector_name_fr' => 'mozart',
                'city_sector_name_ar' => 'موزارت',
                'city_sector_status' => 1,
            ),
            268 => 
            array (
                'id' => 14105,
                'id_city' => 21,
                'city_sector_name_fr' => 'msala',
                'city_sector_name_ar' => 'مصلى',
                'city_sector_status' => 1,
            ),
            269 => 
            array (
                'id' => 14106,
                'id_city' => 21,
                'city_sector_name_fr' => 'medina',
                'city_sector_name_ar' => 'المدينة',
                'city_sector_status' => 1,
            ),
            270 => 
            array (
                'id' => 14107,
                'id_city' => 21,
                'city_sector_name_fr' => 'port tanger ville',
                'city_sector_name_ar' => 'ميناء طنجة المدينة',
                'city_sector_status' => 1,
            ),
            271 => 
            array (
                'id' => 14108,
                'id_city' => 21,
                'city_sector_name_fr' => 'rmilat',
                'city_sector_name_ar' => 'رميلات',
                'city_sector_status' => 1,
            ),
            272 => 
            array (
                'id' => 14109,
                'id_city' => 21,
                'city_sector_name_fr' => 'star hill',
                'city_sector_name_ar' => 'ستار هيل',
                'city_sector_status' => 1,
            ),
            273 => 
            array (
                'id' => 14110,
                'id_city' => 21,
                'city_sector_name_fr' => 'mana',
                'city_sector_name_ar' => 'مانا',
                'city_sector_status' => 1,
            ),
            274 => 
            array (
                'id' => 15000,
                'id_city' => 23,
                'city_sector_name_fr' => 'al azhar',
                'city_sector_name_ar' => 'الازهر',
                'city_sector_status' => 1,
            ),
            275 => 
            array (
                'id' => 15001,
                'id_city' => 23,
                'city_sector_name_fr' => '	 centre ville	',
                'city_sector_name_ar' => 'وسط المدينة',
                'city_sector_status' => 1,
            ),
            276 => 
            array (
                'id' => 15002,
                'id_city' => 23,
                'city_sector_name_fr' => '	 dersa 	',
                'city_sector_name_ar' => 'درسة',
                'city_sector_status' => 1,
            ),
            277 => 
            array (
                'id' => 15003,
                'id_city' => 23,
                'city_sector_name_fr' => '	kouilma	',
                'city_sector_name_ar' => 'كويلما',
                'city_sector_status' => 1,
            ),
            278 => 
            array (
                'id' => 15004,
                'id_city' => 23,
                'city_sector_name_fr' => '	 medina	',
                'city_sector_name_ar' => 'المدينة',
                'city_sector_status' => 1,
            ),
            279 => 
            array (
                'id' => 15005,
                'id_city' => 23,
                'city_sector_name_fr' => '	 mhannech	',
                'city_sector_name_ar' => 'المحنش',
                'city_sector_status' => 1,
            ),
            280 => 
            array (
                'id' => 15006,
                'id_city' => 23,
                'city_sector_name_fr' => '	 safir	',
                'city_sector_name_ar' => 'سفير',
                'city_sector_status' => 1,
            ),
            281 => 
            array (
                'id' => 15007,
                'id_city' => 23,
                'city_sector_name_fr' => '	 saniat rmal	',
                'city_sector_name_ar' => 'سانية رمل',
                'city_sector_status' => 1,
            ),
            282 => 
            array (
                'id' => 15008,
                'id_city' => 23,
                'city_sector_name_fr' => '	 sidi el mandri	',
                'city_sector_name_ar' => 'سيدي المنظري',
                'city_sector_status' => 1,
            ),
            283 => 
            array (
                'id' => 15009,
                'id_city' => 23,
                'city_sector_name_fr' => '	 sidi talha	',
                'city_sector_name_ar' => 'سيدي طلحة',
                'city_sector_status' => 1,
            ),
            284 => 
            array (
                'id' => 15010,
                'id_city' => 23,
                'city_sector_name_fr' => '	 slaoui	',
                'city_sector_name_ar' => 'السلاوي',
                'city_sector_status' => 1,
            ),
            285 => 
            array (
                'id' => 15011,
                'id_city' => 23,
                'city_sector_name_fr' => '	 torrita	',
                'city_sector_name_ar' => 'طريطة',
                'city_sector_status' => 1,
            ),
            286 => 
            array (
                'id' => 15012,
                'id_city' => 23,
                'city_sector_name_fr' => '	 touilaa	',
                'city_sector_name_ar' => 'الطويلع',
                'city_sector_status' => 1,
            ),
            287 => 
            array (
                'id' => 15013,
                'id_city' => 23,
                'city_sector_name_fr' => '	 route de ceuta	',
                'city_sector_name_ar' => 'طريق سبتة',
                'city_sector_status' => 1,
            ),
            288 => 
            array (
                'id' => 15014,
                'id_city' => 23,
                'city_sector_name_fr' => '	 ziana	',
                'city_sector_name_ar' => 'زيانة',
                'city_sector_status' => 1,
            ),
            289 => 
            array (
                'id' => 15015,
                'id_city' => 23,
                'city_sector_name_fr' => '	 bled 	',
                'city_sector_name_ar' => 'بلد',
                'city_sector_status' => 1,
            ),
            290 => 
            array (
                'id' => 15016,
                'id_city' => 23,
                'city_sector_name_fr' => '	 borj	',
                'city_sector_name_ar' => 'البرج',
                'city_sector_status' => 1,
            ),
            291 => 
            array (
                'id' => 15017,
                'id_city' => 23,
                'city_sector_name_fr' => '	 boujdade	',
                'city_sector_name_ar' => 'بوجداد',
                'city_sector_status' => 1,
            ),
            292 => 
            array (
                'id' => 15018,
                'id_city' => 23,
                'city_sector_name_fr' => '	 dyour el makhezen	',
                'city_sector_name_ar' => 'ديور المخزن',
                'city_sector_status' => 1,
            ),
            293 => 
            array (
                'id' => 15019,
                'id_city' => 23,
                'city_sector_name_fr' => '	 el ensache	',
                'city_sector_name_ar' => 'انساشي',
                'city_sector_status' => 1,
            ),
            294 => 
            array (
                'id' => 15020,
                'id_city' => 23,
                'city_sector_name_fr' => '	 el matar	',
                'city_sector_name_ar' => 'المطار',
                'city_sector_status' => 1,
            ),
            295 => 
            array (
                'id' => 15021,
                'id_city' => 23,
                'city_sector_name_fr' => '	hay el mdrassi	',
                'city_sector_name_ar' => 'الحي المدرسي',
                'city_sector_status' => 1,
            ),
            296 => 
            array (
                'id' => 15022,
                'id_city' => 23,
                'city_sector_name_fr' => '	 ennakata	',
                'city_sector_name_ar' => 'النقاطة',
                'city_sector_status' => 1,
            ),
            297 => 
            array (
                'id' => 15023,
                'id_city' => 23,
                'city_sector_name_fr' => '	 essania	',
                'city_sector_name_ar' => 'السانية',
                'city_sector_status' => 1,
            ),
            298 => 
            array (
                'id' => 15024,
                'id_city' => 23,
                'city_sector_name_fr' => '	 ichara	',
                'city_sector_name_ar' => 'ليشارة',
                'city_sector_status' => 1,
            ),
            299 => 
            array (
                'id' => 15025,
                'id_city' => 23,
                'city_sector_name_fr' => '	 korat essba	',
                'city_sector_name_ar' => 'كرة السبع',
                'city_sector_status' => 1,
            ),
            300 => 
            array (
                'id' => 15026,
                'id_city' => 23,
                'city_sector_name_fr' => '	 laayoune	',
                'city_sector_name_ar' => 'العيون',
                'city_sector_status' => 1,
            ),
            301 => 
            array (
                'id' => 15027,
                'id_city' => 23,
                'city_sector_name_fr' => '	 laouziyine	',
                'city_sector_name_ar' => 'اللوزيين',
                'city_sector_status' => 1,
            ),
            302 => 
            array (
                'id' => 15028,
                'id_city' => 23,
                'city_sector_name_fr' => '	 masdae	',
                'city_sector_name_ar' => 'المصدع',
                'city_sector_status' => 1,
            ),
            303 => 
            array (
                'id' => 15029,
                'id_city' => 23,
                'city_sector_name_fr' => '	 mellah 	',
                'city_sector_name_ar' => 'الملاح',
                'city_sector_status' => 1,
            ),
            304 => 
            array (
                'id' => 15030,
                'id_city' => 23,
                'city_sector_name_fr' => '	 mounia	',
                'city_sector_name_ar' => '	 تجزئة مونيا',
                'city_sector_status' => 1,
            ),
            305 => 
            array (
                'id' => 15031,
                'id_city' => 23,
                'city_sector_name_fr' => '	 msalla	',
                'city_sector_name_ar' => 'المصلى',
                'city_sector_status' => 1,
            ),
            306 => 
            array (
                'id' => 15034,
                'id_city' => 23,
                'city_sector_name_fr' => '	 taboula	',
                'city_sector_name_ar' => 'طابولة',
                'city_sector_status' => 1,
            ),
            307 => 
            array (
                'id' => 15035,
                'id_city' => 23,
                'city_sector_name_fr' => '	 talaa	',
                'city_sector_name_ar' => 'الطالعة',
                'city_sector_status' => 1,
            ),
            308 => 
            array (
                'id' => 15036,
                'id_city' => 23,
                'city_sector_name_fr' => '	 tamouda	',
                'city_sector_name_ar' => 'تمودة',
                'city_sector_status' => 1,
            ),
            309 => 
            array (
                'id' => 15037,
                'id_city' => 23,
                'city_sector_name_fr' => '	 touabel	',
                'city_sector_name_ar' => 'الطوابل',
                'city_sector_status' => 1,
            ),
            310 => 
            array (
                'id' => 15038,
                'id_city' => 23,
                'city_sector_name_fr' => '	 touilaa foqia	',
                'city_sector_name_ar' => 'الطويلع الفوقية',
                'city_sector_status' => 1,
            ),
            311 => 
            array (
                'id' => 15039,
                'id_city' => 23,
                'city_sector_name_fr' => '	 trankat	',
                'city_sector_name_ar' => 'الطرنكات',
                'city_sector_status' => 1,
            ),
            312 => 
            array (
                'id' => 15040,
                'id_city' => 23,
                'city_sector_name_fr' => '	 wilaya	',
                'city_sector_name_ar' => 'الولاية',
                'city_sector_status' => 1,
            ),
            313 => 
            array (
                'id' => 15041,
                'id_city' => 23,
                'city_sector_name_fr' => '	zinat	',
                'city_sector_name_ar' => 'الزينات',
                'city_sector_status' => 1,
            ),
            314 => 
            array (
                'id' => 15042,
                'id_city' => 23,
                'city_sector_name_fr' => '	benkarich	',
                'city_sector_name_ar' => 'بن قريش',
                'city_sector_status' => 1,
            ),
            315 => 
            array (
                'id' => 15043,
                'id_city' => 23,
                'city_sector_name_fr' => '	beghagheza	',
                'city_sector_name_ar' => 'بغاغزة',
                'city_sector_status' => 1,
            ),
            316 => 
            array (
                'id' => 15044,
                'id_city' => 23,
                'city_sector_name_fr' => '	 ain hessen	',
                'city_sector_name_ar' => 'عين الحصن',
                'city_sector_status' => 1,
            ),
            317 => 
            array (
                'id' => 15045,
                'id_city' => 23,
                'city_sector_name_fr' => '	 bni yeder	',
                'city_sector_name_ar' => 'بني يدر',
                'city_sector_status' => 1,
            ),
            318 => 
            array (
                'id' => 15046,
                'id_city' => 23,
                'city_sector_name_fr' => '	 bni harechen	',
                'city_sector_name_ar' => 'بني حرشان',
                'city_sector_status' => 1,
            ),
            319 => 
            array (
                'id' => 15047,
                'id_city' => 23,
                'city_sector_name_fr' => '	oued lao	',
                'city_sector_name_ar' => 'وادلاو',
                'city_sector_status' => 1,
            ),
            320 => 
            array (
                'id' => 15048,
                'id_city' => 23,
                'city_sector_name_fr' => '	 azla	',
                'city_sector_name_ar' => 'ازلا',
                'city_sector_status' => 1,
            ),
            321 => 
            array (
                'id' => 15049,
                'id_city' => 23,
                'city_sector_name_fr' => '	 amssa	',
                'city_sector_name_ar' => 'أمسا',
                'city_sector_status' => 1,
            ),
            322 => 
            array (
                'id' => 15050,
                'id_city' => 23,
                'city_sector_name_fr' => '	 bni said	',
                'city_sector_name_ar' => 'بني سعيد',
                'city_sector_status' => 1,
            ),
            323 => 
            array (
                'id' => 16000,
                'id_city' => 26,
                'city_sector_name_fr' => 'martil',
                'city_sector_name_ar' => 'مرتيل',
                'city_sector_status' => 1,
            ),
            324 => 
            array (
                'id' => 16094,
                'id_city' => 236,
                'city_sector_name_fr' => 'marina smir',
                'city_sector_name_ar' => 'مارينا سمير',
                'city_sector_status' => 1,
            ),
            325 => 
            array (
                'id' => 16095,
                'id_city' => 23,
                'city_sector_name_fr' => 'AV DES FAR',
                'city_sector_name_ar' => 'شارع الجيش الملكي',
                'city_sector_status' => 1,
            ),
            326 => 
            array (
                'id' => 16005,
                'id_city' => 26,
                'city_sector_name_fr' => 'autres secteurs',
                'city_sector_name_ar' => 'جميع الاحياء',
                'city_sector_status' => 1,
            ),
            327 => 
            array (
                'id' => 16006,
                'id_city' => 21,
                'city_sector_name_fr' => 'Kezenaya',
                'city_sector_name_ar' => 'كزناية',
                'city_sector_status' => 1,
            ),
            328 => 
            array (
                'id' => 16008,
                'id_city' => 23,
                'city_sector_name_fr' => 'khandak zerbouh',
                'city_sector_name_ar' => 'خندق زربوح',
                'city_sector_status' => 1,
            ),
            329 => 
            array (
                'id' => 16009,
                'id_city' => 21,
                'city_sector_name_fr' => 'Boukhalef',
                'city_sector_name_ar' => 'بوخالف',
                'city_sector_status' => 1,
            ),
            330 => 
            array (
                'id' => 16010,
                'id_city' => 30,
                'city_sector_name_fr' => 'Boumia',
                'city_sector_name_ar' => 'بومية',
                'city_sector_status' => 1,
            ),
            331 => 
            array (
                'id' => 16011,
                'id_city' => 104,
                'city_sector_name_fr' => 'Bradia',
                'city_sector_name_ar' => 'برادية',
                'city_sector_status' => 1,
            ),
            332 => 
            array (
                'id' => 16012,
                'id_city' => 105,
                'city_sector_name_fr' => 'Brikcha',
                'city_sector_name_ar' => 'بريكشة',
                'city_sector_status' => 1,
            ),
            333 => 
            array (
                'id' => 16013,
                'id_city' => 76,
                'city_sector_name_fr' => 'Bzou',
                'city_sector_name_ar' => 'بزو',
                'city_sector_status' => 1,
            ),
            334 => 
            array (
                'id' => 16014,
                'id_city' => 74,
                'city_sector_name_fr' => 'Dar chaoui',
                'city_sector_name_ar' => 'دار الشاوي ',
                'city_sector_status' => 1,
            ),
            335 => 
            array (
                'id' => 16015,
                'id_city' => 1,
                'city_sector_name_fr' => 'Drargua',
                'city_sector_name_ar' => 'الدراركة',
                'city_sector_status' => 1,
            ),
            336 => 
            array (
                'id' => 16016,
                'id_city' => 9,
                'city_sector_name_fr' => 'El kbab',
                'city_sector_name_ar' => 'القباب',
                'city_sector_status' => 1,
            ),
            337 => 
            array (
                'id' => 16017,
                'id_city' => 90,
                'city_sector_name_fr' => 'Farkhana',
                'city_sector_name_ar' => 'فرخانة',
                'city_sector_status' => 1,
            ),
            338 => 
            array (
                'id' => 16018,
                'id_city' => 76,
                'city_sector_name_fr' => 'Foum Jamaa',
                'city_sector_name_ar' => 'فم الجمعة',
                'city_sector_status' => 1,
            ),
            339 => 
            array (
                'id' => 16019,
                'id_city' => 30,
                'city_sector_name_fr' => 'Gourrama',
                'city_sector_name_ar' => 'كرامة',
                'city_sector_status' => 1,
            ),
            340 => 
            array (
                'id' => 16020,
                'id_city' => 101,
                'city_sector_name_fr' => 'Guigou',
                'city_sector_name_ar' => 'كيكو',
                'city_sector_status' => 1,
            ),
            341 => 
            array (
                'id' => 16021,
                'id_city' => 19,
                'city_sector_name_fr' => 'Guisser',
                'city_sector_name_ar' => 'گيسر',
                'city_sector_status' => 1,
            ),
            342 => 
            array (
                'id' => 16022,
                'id_city' => 9,
                'city_sector_name_fr' => 'Had Bouhssoussen',
                'city_sector_name_ar' => 'أحد بوحسوسن',
                'city_sector_status' => 1,
            ),
            343 => 
            array (
                'id' => 16023,
                'id_city' => 130,
                'city_sector_name_fr' => 'Had Oued Ifrane',
                'city_sector_name_ar' => 'واد افران',
                'city_sector_status' => 1,
            ),
            344 => 
            array (
                'id' => 16024,
                'id_city' => 10,
                'city_sector_name_fr' => 'Hattane',
                'city_sector_name_ar' => 'حطان',
                'city_sector_status' => 1,
            ),
            345 => 
            array (
                'id' => 16025,
                'id_city' => 142,
                'city_sector_name_fr' => 'Ighoud',
                'city_sector_name_ar' => 'ايغود',
                'city_sector_status' => 1,
            ),
            346 => 
            array (
                'id' => 16026,
                'id_city' => 14,
                'city_sector_name_fr' => 'Ihddaden',
                'city_sector_name_ar' => 'إيحدادن',
                'city_sector_status' => 1,
            ),
            347 => 
            array (
                'id' => 16027,
                'id_city' => 12,
                'city_sector_name_fr' => 'Imintanoute',
                'city_sector_name_ar' => 'امنتانوت',
                'city_sector_status' => 1,
            ),
            348 => 
            array (
                'id' => 16028,
                'id_city' => 2,
                'city_sector_name_fr' => 'Issaguen',
                'city_sector_name_ar' => 'اساگن',
                'city_sector_status' => 1,
            ),
            349 => 
            array (
                'id' => 16029,
                'id_city' => 14,
                'city_sector_name_fr' => 'Jaadar',
                'city_sector_name_ar' => 'جعدار',
                'city_sector_status' => 1,
            ),
            350 => 
            array (
                'id' => 16030,
                'id_city' => 114,
                'city_sector_name_fr' => 'Kassita',
                'city_sector_name_ar' => 'كاسيطا',
                'city_sector_status' => 1,
            ),
            351 => 
            array (
                'id' => 16031,
                'id_city' => 173,
                'city_sector_name_fr' => 'Keouna',
                'city_sector_name_ar' => 'كرونا',
                'city_sector_status' => 1,
            ),
            352 => 
            array (
                'id' => 16032,
                'id_city' => 105,
                'city_sector_name_fr' => 'Zoumi',
                'city_sector_name_ar' => 'زومي',
                'city_sector_status' => 1,
            ),
            353 => 
            array (
                'id' => 16033,
                'id_city' => 9,
                'city_sector_name_fr' => 'Kerrouchen',
                'city_sector_name_ar' => 'كروشن',
                'city_sector_status' => 1,
            ),
            354 => 
            array (
                'id' => 16034,
                'id_city' => 11,
                'city_sector_name_fr' => 'Khémis Sahel',
                'city_sector_name_ar' => 'الخميس الساحل',
                'city_sector_status' => 1,
            ),
            355 => 
            array (
                'id' => 16035,
                'id_city' => 5,
                'city_sector_name_fr' => 'Sidi bouzid',
                'city_sector_name_ar' => 'سيدي بوزيد',
                'city_sector_status' => 1,
            ),
            356 => 
            array (
                'id' => 16036,
                'id_city' => 189,
                'city_sector_name_fr' => 'Laâounate',
                'city_sector_name_ar' => 'العونات',
                'city_sector_status' => 1,
            ),
            357 => 
            array (
                'id' => 16037,
                'id_city' => 8,
                'city_sector_name_fr' => 'Lala Mimouna',
                'city_sector_name_ar' => 'لالة ميمونة',
                'city_sector_status' => 1,
            ),
            358 => 
            array (
                'id' => 16038,
                'id_city' => 195,
                'city_sector_name_fr' => 'Lala takarkoust',
                'city_sector_name_ar' => 'للا تكركوست',
                'city_sector_status' => 1,
            ),
            359 => 
            array (
                'id' => 16039,
                'id_city' => 19,
                'city_sector_name_fr' => 'Loulad',
                'city_sector_name_ar' => 'لولاد',
                'city_sector_status' => 1,
            ),
            360 => 
            array (
                'id' => 16040,
                'id_city' => 172,
                'city_sector_name_fr' => 'Maaziz',
                'city_sector_name_ar' => 'معازيز',
                'city_sector_status' => 1,
            ),
            361 => 
            array (
                'id' => 16041,
                'id_city' => 86,
                'city_sector_name_fr' => 'Madagh',
                'city_sector_name_ar' => 'مداغ',
                'city_sector_status' => 1,
            ),
            362 => 
            array (
                'id' => 16042,
                'id_city' => 22,
                'city_sector_name_fr' => 'Matmata',
                'city_sector_name_ar' => 'مطماطة',
                'city_sector_status' => 1,
            ),
            363 => 
            array (
                'id' => 16043,
                'id_city' => 13,
                'city_sector_name_fr' => 'M’haya',
                'city_sector_name_ar' => 'المهاية',
                'city_sector_status' => 1,
            ),
            364 => 
            array (
                'id' => 16044,
                'id_city' => 114,
                'city_sector_name_fr' => 'Midar',
                'city_sector_name_ar' => 'ميضار',
                'city_sector_status' => 1,
            ),
            365 => 
            array (
                'id' => 16045,
                'id_city' => 105,
                'city_sector_name_fr' => 'Moqrisset',
                'city_sector_name_ar' => 'موقريصات',
                'city_sector_status' => 1,
            ),
            366 => 
            array (
                'id' => 16046,
                'id_city' => 5,
                'city_sector_name_fr' => 'Moulay Abdallah',
                'city_sector_name_ar' => 'مولاي عبد الله',
                'city_sector_status' => 1,
            ),
            367 => 
            array (
                'id' => 16047,
                'id_city' => 195,
                'city_sector_name_fr' => 'Moulay Brahim',
                'city_sector_name_ar' => 'مولاي ابراهيم',
                'city_sector_status' => 1,
            ),
            368 => 
            array (
                'id' => 16048,
                'id_city' => 76,
                'city_sector_name_fr' => 'Ouaouizeght',
                'city_sector_name_ar' => 'واويزغت',
                'city_sector_status' => 1,
            ),
            369 => 
            array (
                'id' => 16049,
                'id_city' => 150,
                'city_sector_name_fr' => 'Oued heïmer ',
                'city_sector_name_ar' => 'واد الحيمر',
                'city_sector_status' => 1,
            ),
            370 => 
            array (
                'id' => 16050,
                'id_city' => 87,
                'city_sector_name_fr' => 'Oulad Abbou',
                'city_sector_name_ar' => 'اولاد عبو',
                'city_sector_status' => 1,
            ),
            371 => 
            array (
                'id' => 16051,
                'id_city' => 189,
                'city_sector_name_fr' => 'Oulad Amrane',
                'city_sector_name_ar' => 'اولاد عمران',
                'city_sector_status' => 1,
            ),
            372 => 
            array (
                'id' => 16052,
                'id_city' => 5,
                'city_sector_name_fr' => 'Oulad frej',
                'city_sector_name_ar' => 'اولاد افرج',
                'city_sector_status' => 1,
            ),
            373 => 
            array (
                'id' => 16053,
                'id_city' => 157,
                'city_sector_name_fr' => 'Oum El Guerdane',
                'city_sector_name_ar' => 'ام الگردان',
                'city_sector_status' => 1,
            ),
            374 => 
            array (
                'id' => 16054,
                'id_city' => 4,
                'city_sector_name_fr' => 'Oulad h’riz Sahel',
                'city_sector_name_ar' => 'اولاد حريز الساحل',
                'city_sector_status' => 1,
            ),
            375 => 
            array (
                'id' => 16055,
                'id_city' => 19,
                'city_sector_name_fr' => 'Oulad Saïd',
                'city_sector_name_ar' => 'اولاد سعيد',
                'city_sector_status' => 1,
            ),
            376 => 
            array (
                'id' => 16056,
                'id_city' => 3,
                'city_sector_name_fr' => 'Oulad Yaich',
                'city_sector_name_ar' => 'اولاد يعيش ',
                'city_sector_status' => 1,
            ),
            377 => 
            array (
                'id' => 16057,
                'id_city' => 22,
                'city_sector_name_fr' => 'Oulad Zbaïr',
                'city_sector_name_ar' => 'اولاد ازباير',
                'city_sector_status' => 1,
            ),
            378 => 
            array (
                'id' => 16058,
                'id_city' => 128,
                'city_sector_name_fr' => 'Ounagha',
                'city_sector_name_ar' => 'اوناغة',
                'city_sector_status' => 1,
            ),
            379 => 
            array (
                'id' => 16059,
                'id_city' => 172,
                'city_sector_name_fr' => 'Rommani',
                'city_sector_name_ar' => 'الرماني',
                'city_sector_status' => 1,
            ),
            380 => 
            array (
                'id' => 16060,
                'id_city' => 216,
                'city_sector_name_fr' => 'Sebt Gzoula',
                'city_sector_name_ar' => 'سبت جزولة',
                'city_sector_status' => 1,
            ),
            381 => 
            array (
                'id' => 16061,
                'id_city' => 13,
                'city_sector_name_fr' => 'Sebt Jahjouh',
                'city_sector_name_ar' => 'سبت جحجوح',
                'city_sector_status' => 1,
            ),
            382 => 
            array (
                'id' => 16062,
                'id_city' => 14,
                'city_sector_name_fr' => 'Selouane',
                'city_sector_name_ar' => 'سلوان',
                'city_sector_status' => 1,
            ),
            383 => 
            array (
                'id' => 16063,
                'id_city' => 106,
                'city_sector_name_fr' => 'Sidi L’Mokhtar',
                'city_sector_name_ar' => 'سيدي المختار',
                'city_sector_status' => 1,
            ),
            384 => 
            array (
                'id' => 16064,
                'id_city' => 12,
                'city_sector_name_fr' => 'Sidi Zouin',
                'city_sector_name_ar' => 'سيدي زوين',
                'city_sector_status' => 1,
            ),
            385 => 
            array (
                'id' => 16065,
                'id_city' => 195,
                'city_sector_name_fr' => 'Sidi Abdallah Ghiat',
                'city_sector_name_ar' => 'سيدي عبد الله غيات',
                'city_sector_status' => 1,
            ),
            386 => 
            array (
                'id' => 16066,
                'id_city' => 142,
                'city_sector_name_fr' => 'Sidi Ahmed',
                'city_sector_name_ar' => 'سيدي احمد',
                'city_sector_status' => 1,
            ),
            387 => 
            array (
                'id' => 16067,
                'id_city' => 5,
                'city_sector_name_fr' => 'Sidi Ali Ban Hamdouche',
                'city_sector_name_ar' => 'سيدي علي بن حمدوش',
                'city_sector_status' => 1,
            ),
            388 => 
            array (
                'id' => 16068,
                'id_city' => 8,
                'city_sector_name_fr' => 'Sidi Taïbi',
                'city_sector_name_ar' => 'سيدي الطيبي',
                'city_sector_status' => 1,
            ),
            389 => 
            array (
                'id' => 16069,
                'id_city' => 128,
                'city_sector_name_fr' => 'Semimou',
                'city_sector_name_ar' => 'سميمو',
                'city_sector_status' => 1,
            ),
            390 => 
            array (
                'id' => 16070,
                'id_city' => 15,
                'city_sector_name_fr' => 'Tabounte',
                'city_sector_name_ar' => 'تابونت',
                'city_sector_status' => 1,
            ),
            391 => 
            array (
                'id' => 16071,
                'id_city' => 128,
                'city_sector_name_fr' => 'Tafetachte',
                'city_sector_name_ar' => 'تفتاشت',
                'city_sector_status' => 1,
            ),
            392 => 
            array (
                'id' => 16072,
                'id_city' => 128,
                'city_sector_name_fr' => 'Tamanar',
                'city_sector_name_ar' => 'تامنار',
                'city_sector_status' => 1,
            ),
            393 => 
            array (
                'id' => 16073,
                'id_city' => 134,
                'city_sector_name_fr' => 'Talsint',
                'city_sector_name_ar' => 'تالسيت',
                'city_sector_status' => 1,
            ),
            394 => 
            array (
                'id' => 16074,
                'id_city' => 15,
                'city_sector_name_fr' => 'Taznakht',
                'city_sector_name_ar' => 'تازناخت',
                'city_sector_status' => 1,
            ),
            395 => 
            array (
                'id' => 16075,
                'id_city' => 146,
                'city_sector_name_fr' => 'Temsia',
                'city_sector_name_ar' => 'التمسية',
                'city_sector_status' => 1,
            ),
            396 => 
            array (
                'id' => 16076,
                'id_city' => 134,
                'city_sector_name_fr' => 'Tendrara',
                'city_sector_name_ar' => 'تندرارة',
                'city_sector_status' => 1,
            ),
            397 => 
            array (
                'id' => 16077,
                'id_city' => 176,
                'city_sector_name_fr' => 'Thar Es Souk',
                'city_sector_name_ar' => 'طهر السوق',
                'city_sector_status' => 1,
            ),
            398 => 
            array (
                'id' => 16078,
                'id_city' => 172,
                'city_sector_name_fr' => 'Tidass',
                'city_sector_name_ar' => 'تيداس',
                'city_sector_status' => 1,
            ),
            399 => 
            array (
                'id' => 16079,
                'id_city' => 9,
                'city_sector_name_fr' => 'Tighassaline',
                'city_sector_name_ar' => 'تيغسالين',
                'city_sector_status' => 1,
            ),
            400 => 
            array (
                'id' => 16080,
                'id_city' => 22,
                'city_sector_name_fr' => 'Tizi Ouasli',
                'city_sector_name_ar' => 'تيزي وسلي',
                'city_sector_status' => 1,
            ),
            401 => 
            array (
                'id' => 16081,
                'id_city' => 14,
                'city_sector_name_fr' => 'Tiztoutine',
                'city_sector_name_ar' => 'تزطوطين',
                'city_sector_status' => 1,
            ),
            402 => 
            array (
                'id' => 16082,
                'id_city' => 14,
                'city_sector_name_fr' => 'Touima',
                'city_sector_name_ar' => 'تويمة',
                'city_sector_status' => 1,
            ),
            403 => 
            array (
                'id' => 16083,
                'id_city' => 150,
                'city_sector_name_fr' => 'Touissit',
                'city_sector_name_ar' => 'تويسيت',
                'city_sector_status' => 1,
            ),
            404 => 
            array (
                'id' => 16084,
                'id_city' => 6,
                'city_sector_name_fr' => 'Tinejdad',
                'city_sector_name_ar' => 'تنجداد',
                'city_sector_status' => 1,
            ),
            405 => 
            array (
                'id' => 16085,
                'id_city' => 130,
                'city_sector_name_fr' => 'Timahdite',
                'city_sector_name_ar' => 'تيمخضيت',
                'city_sector_status' => 1,
            ),
            406 => 
            array (
                'id' => 16086,
                'id_city' => 9,
                'city_sector_name_fr' => 'Tighza',
                'city_sector_name_ar' => 'تيغزة',
                'city_sector_status' => 1,
            ),
            407 => 
            array (
                'id' => 16087,
                'id_city' => 30,
                'city_sector_name_fr' => 'Tounfite',
                'city_sector_name_ar' => 'تونفيت',
                'city_sector_status' => 1,
            ),
            408 => 
            array (
                'id' => 16088,
                'id_city' => 30,
                'city_sector_name_fr' => 'Zaïda',
                'city_sector_name_ar' => 'زايدة',
                'city_sector_status' => 1,
            ),
            409 => 
            array (
                'id' => 16089,
                'id_city' => 162,
                'city_sector_name_fr' => 'Zaouïat Bougrine',
                'city_sector_name_ar' => 'زاوية بوگرين',
                'city_sector_status' => 1,
            ),
            410 => 
            array (
                'id' => 16090,
                'id_city' => 23,
                'city_sector_name_fr' => 'Essahtryiene',
                'city_sector_name_ar' => 'السحتريين',
                'city_sector_status' => 1,
            ),
            411 => 
            array (
                'id' => 16091,
                'id_city' => 23,
                'city_sector_name_fr' => 'Jamaa Mezouak',
                'city_sector_name_ar' => 'جامع مزواق',
                'city_sector_status' => 1,
            ),
            412 => 
            array (
                'id' => 16092,
                'id_city' => 23,
                'city_sector_name_fr' => 'Sebt lkedim',
                'city_sector_name_ar' => 'السبت القديم',
                'city_sector_status' => 1,
            ),
            413 => 
            array (
                'id' => 16093,
                'id_city' => 238,
                'city_sector_name_fr' => 'Anjra',
                'city_sector_name_ar' => 'انجرة',
                'city_sector_status' => 1,
            ),
            414 => 
            array (
                'id' => 16097,
                'id_city' => 2,
                'city_sector_name_fr' => 'Beni Bouyache',
                'city_sector_name_ar' => 'بنى بوعياش',
                'city_sector_status' => 1,
            ),
        ));
        
        
    }
}