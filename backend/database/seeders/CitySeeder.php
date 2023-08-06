<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['city_id' => '1', 'city_name' => 'ADANA'],
            ['city_id' => '2', 'city_name' => 'ADIYAMAN'],
            ['city_id' => '3', 'city_name' => 'AFYONKARAHİSAR'],
            ['city_id' => '4', 'city_name' => 'AĞRI'],
            ['city_id' => '5', 'city_name' => 'AMASYA'],
            ['city_id' => '6', 'city_name' => 'ANKARA'],
            ['city_id' => '7', 'city_name' => 'ANTALYA'],
            ['city_id' => '8', 'city_name' => 'ARTVİN'],
            ['city_id' => '9', 'city_name' => 'AYDIN'],
            ['city_id' => '10', 'city_name' => 'BALIKESİR'],
            ['city_id' => '11', 'city_name' => 'BİLECİK'],
            ['city_id' => '12', 'city_name' => 'BİNGÖL'],
            ['city_id' => '13', 'city_name' => 'BİTLİS'],
            ['city_id' => '14', 'city_name' => 'BOLU'],
            ['city_id' => '15', 'city_name' => 'BURDUR'],
            ['city_id' => '16', 'city_name' => 'BURSA'],
            ['city_id' => '17', 'city_name' => 'ÇANAKKALE'],
            ['city_id' => '18', 'city_name' => 'ÇANKIRI'],
            ['city_id' => '19', 'city_name' => 'ÇORUM'],
            ['city_id' => '20', 'city_name' => 'DENİZLİ'],
            ['city_id' => '21', 'city_name' => 'DİYARBAKIR'],
            ['city_id' => '22', 'city_name' => 'EDİRNE'],
            ['city_id' => '23', 'city_name' => 'ELAZIĞ'],
            ['city_id' => '24', 'city_name' => 'ERZİNCAN'],
            ['city_id' => '25', 'city_name' => 'ERZURUM'],
            ['city_id' => '26', 'city_name' => 'ESKİŞEHİR'],
            ['city_id' => '27', 'city_name' => 'GAZİANTEP'],
            ['city_id' => '28', 'city_name' => 'GİRESUN'],
            ['city_id' => '29', 'city_name' => 'GÜMÜŞHANE'],
            ['city_id' => '30', 'city_name' => 'HAKKARİ'],
            ['city_id' => '31', 'city_name' => 'HATAY'],
            ['city_id' => '32', 'city_name' => 'ISPARTA'],
            ['city_id' => '33', 'city_name' => 'MERSİN'],
            ['city_id' => '34', 'city_name' => 'İSTANBUL'],
            ['city_id' => '35', 'city_name' => 'İZMİR'],
            ['city_id' => '36', 'city_name' => 'KARS'],
            ['city_id' => '37', 'city_name' => 'KASTAMONU'],
            ['city_id' => '38', 'city_name' => 'KAYSERİ'],
            ['city_id' => '39', 'city_name' => 'KIRKLARELİ'],
            ['city_id' => '40', 'city_name' => 'KIRŞEHİR'],
            ['city_id' => '41', 'city_name' => 'KOCAELİ'],
            ['city_id' => '42', 'city_name' => 'KONYA'],
            ['city_id' => '43', 'city_name' => 'KÜTAHYA'],
            ['city_id' => '44', 'city_name' => 'MALATYA'],
            ['city_id' => '45', 'city_name' => 'MANİSA'],
            ['city_id' => '46', 'city_name' => 'KAHRAMANMARAŞ'],
            ['city_id' => '47', 'city_name' => 'MARDİN'],
            ['city_id' => '48', 'city_name' => 'MUĞLA'],
            ['city_id' => '49', 'city_name' => 'MUŞ'],
            ['city_id' => '50', 'city_name' => 'NEVŞEHİR'],
            ['city_id' => '51', 'city_name' => 'NİĞDE'],
            ['city_id' => '52', 'city_name' => 'ORDU'],
            ['city_id' => '53', 'city_name' => 'RİZE'],
            ['city_id' => '54', 'city_name' => 'SAKARYA'],
            ['city_id' => '55', 'city_name' => 'SAMSUN'],
            ['city_id' => '56', 'city_name' => 'SİİRT'],
            ['city_id' => '57', 'city_name' => 'SİNOP'],
            ['city_id' => '58', 'city_name' => 'SİVAS'],
            ['city_id' => '59', 'city_name' => 'TEKİRDAĞ'],
            ['city_id' => '60', 'city_name' => 'TOKAT'],
            ['city_id' => '61', 'city_name' => 'TRABZON'],
            ['city_id' => '62', 'city_name' => 'TUNCELİ'],
            ['city_id' => '63', 'city_name' => 'ŞANLIURFA'],
            ['city_id' => '64', 'city_name' => 'UŞAK'],
            ['city_id' => '65', 'city_name' => 'VAN'],
            ['city_id' => '66', 'city_name' => 'YOZGAT'],
            ['city_id' => '67', 'city_name' => 'ZONGULDAK'],
            ['city_id' => '68', 'city_name' => 'AKSARAY'],
            ['city_id' => '69', 'city_name' => 'BAYBURT'],
            ['city_id' => '70', 'city_name' => 'KARAMAN'],
            ['city_id' => '71', 'city_name' => 'KIRIKKALE'],
            ['city_id' => '72', 'city_name' => 'BATMAN'],
            ['city_id' => '73', 'city_name' => 'ŞIRNAK'],
            ['city_id' => '74', 'city_name' => 'BARTIN'],
            ['city_id' => '75', 'city_name' => 'ARDAHAN'],
            ['city_id' => '76', 'city_name' => 'IĞDIR'],
            ['city_id' => '77', 'city_name' => 'YALOVA'],
            ['city_id' => '78', 'city_name' => 'KARABÜK'],
            ['city_id' => '79', 'city_name' => 'KİLİS'],
            ['city_id' => '80', 'city_name' => 'OSMANİYE'],
            ['city_id' => '81', 'city_name' => 'DÜZCE']
        ];

        foreach ($cities as $city) {
            City::create($city);
        }
    }
}
