<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelurahan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelurahan = [
            [
             "nama"=> "SELISIHAN",
             "kecamatan_kode"=> "01",
             "kode"=> "01",
             "kode_full"=> "22060101",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "MANDUANG",
             "kecamatan_kode"=> "01",
             "kode"=> "02",
             "kode_full"=> "22060102",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TEGAK",
             "kecamatan_kode"=> "01",
             "kode"=> "03",
             "kode_full"=> "22060103",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SELAT",
             "kecamatan_kode"=> "01",
             "kode"=> "04",
             "kode_full"=> "22060104",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "AKAH",
             "kecamatan_kode"=> "01",
             "kode"=> "05",
             "kode_full"=> "22060105",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA KAJA",
             "kecamatan_kode"=> "01",
             "kode"=> "06",
             "kode_full"=> "22060106",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA TENGAH",
             "kecamatan_kode"=> "01",
             "kode"=> "07",
             "kode_full"=> "22060107",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA KAUN",
             "kecamatan_kode"=> "01",
             "kode"=> "08",
             "kode_full"=> "22060108",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA KLOD",
             "kecamatan_kode"=> "01",
             "kode"=> "09",
             "kode_full"=> "22060109",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA KLOD KANGIN",
             "kecamatan_kode"=> "01",
             "kode"=> "10",
             "kode_full"=> "22060110",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEMARAPURA KANGIN",
             "kecamatan_kode"=> "01",
             "kode"=> "11",
             "kode_full"=> "22060111",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TOJAN",
             "kecamatan_kode"=> "01",
             "kode"=> "12",
             "kode_full"=> "22060112",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SATRA",
             "kecamatan_kode"=> "01",
             "kode"=> "13",
             "kode_full"=> "22060113 ",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "GELGEL",
             "kecamatan_kode"=> "01",
             "kode"=> "14",
             "kode_full"=> "22060114",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KAMASAN",
             "kecamatan_kode"=> "01",
             "kode"=> "15",
             "kode_full"=> "22060115",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TANGKAS",
             "kecamatan_kode"=> "01",
             "kode"=> "16",
             "kode_full"=> "22060116 ",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KAMPUNG GELGEL",
             "kecamatan_kode"=> "01",
             "kode"=> "17",
             "kode_full"=> "22060117",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "JUMPAI",
             "kecamatan_kode"=> "01",
             "kode"=> "18",
             "kode_full"=> "22060118",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BESAN",
             "kecamatan_kode"=> "02",
             "kode"=> "01",
             "kode_full"=> "22060201",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "DAWAN KALER",
             "kecamatan_kode"=> "02",
             "kode"=> "02",
             "kode_full"=> "22060202",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "DAWAN KLOO",
             "kecamatan_kode"=> "02",
             "kode"=> "03",
             "kode_full"=> "22060203",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "PIKAT",
             "kecamatan_kode"=> "02",
             "kode"=> "04",
             "kode_full"=> "22060204",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "PESINGGAHAN",
             "kecamatan_kode"=> "02",
             "kode"=> "05",
             "kode_full"=> "22060205",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KAMPUNG KUSAMBA",
             "kecamatan_kode"=> "02",
             "kode"=> "06",
             "kode_full"=> "22060206",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KUSAMBA",
             "kecamatan_kode"=> "02",
             "kode"=> "07",
             "kode_full"=> "22060207",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "GUNAKSA",
             "kecamatan_kode"=> "02",
             "kode"=> "08",
             "kode_full"=> "22060208",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SAMPALAN KLOD",
             "kecamatan_kode"=> "02",
             "kode"=> "09",
             "kode_full"=> "22060209",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SAMPALAN TENGAH",
             "kecamatan_kode"=> "02",
             "kode"=> "10",
             "kode_full"=> "22060210",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "PAKSEBALI",
             "kecamatan_kode"=> "02",
             "kode"=> "11",
             "kode_full"=> "22060211",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SULANG",
             "kecamatan_kode"=> "02",
             "kode"=> "12",
             "kode_full"=> "22060212",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "NYANGLAN",
             "kecamatan_kode"=> "03",
             "kode"=> "01",
             "kode_full"=> "22060301",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TIMUHUN",
             "kecamatan_kode"=> "03",
             "kode"=> "02",
             "kode_full"=> "22060302",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "AAN",
             "kecamatan_kode"=> "03",
             "kode"=> "03",
             "kode_full"=> "22060303",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "GETAKAN",
             "kecamatan_kode"=> "03",
             "kode"=> "04",
             "kode_full"=> "22060304",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "THINGAN",
             "kecamatan_kode"=> "03",
             "kode"=> "05",
             "kode_full"=> "22060305",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TAKMUNG",
             "kecamatan_kode"=> "03",
             "kode"=> "06",
             "kode_full"=> "22060306",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "NEGAR",
             "kecamatan_kode"=> "03",
             "kode"=> "07",
             "kode_full"=> "22060307",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BANJARANGKAN",
             "kecamatan_kode"=> "03",
             "kode"=> "08",
             "kode_full"=> "22060308",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TUSAN",
             "kecamatan_kode"=> "03",
             "kode"=> "09",
             "kode_full"=> "22060309",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BAKAS",
             "kecamatan_kode"=> "03",
             "kode"=> "10",
             "kode_full"=> "22060310",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "NYALIAN",
             "kecamatan_kode"=> "03",
             "kode"=> "11",
             "kode_full"=> "22060311",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BUNGBUNGAN",
             "kecamatan_kode"=> "03",
             "kode"=> "12",
             "kode_full"=> "22060312",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TOMPATI",
             "kecamatan_kode"=> "03",
             "kode"=> "13",
             "kode_full"=> "22060313",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BATUNUNGGUL",
             "kecamatan_kode"=> "04",
             "kode"=> "01",
             "kode_full"=> "22060401",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KUTAMPI",
             "kecamatan_kode"=> "04",
             "kode"=> "02",
             "kode_full"=> "22060402",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KUTAMPI KALER",
             "kecamatan_kode"=> "04",
             "kode"=> "03",
             "kode_full"=> "22060403",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SUANA",
             "kecamatan_kode"=> "04",
             "kode"=> "04",
             "kode_full"=> "22060404",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "PLJUKUTAN",
             "kecamatan_kode"=> "04",
             "kode"=> "05",
             "kode_full"=> "22060405",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TANGLAD",
             "kecamatan_kode"=> "04",
             "kode"=> "06",
             "kode_full"=> "22060406",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SEKARTA",
             "kecamatan_kode"=> "04",
             "kode"=> "07",
             "kode_full"=> "22060407",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BATUKANDIK",
             "kecamatan_kode"=> "04",
             "kode"=> "08",
             "kode_full"=> "22060408",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BATUMADEG",
             "kecamatan_kode"=> "04",
             "kode"=> "09",
             "kode_full"=> "22060409",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "KLUMPU",
             "kecamatan_kode"=> "04",
             "kode"=> "10",
             "kode_full"=> "22060410",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "SAKTI",
             "kecamatan_kode"=> "04",
             "kode"=> "11",
             "kode_full"=> "22060411",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "BUNGA MEKAR",
             "kecamatan_kode"=> "04",
             "kode"=> "12",
             "kode_full"=> "22060412",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "PED",
             "kecamatan_kode"=> "04",
             "kode"=> "13",
             "kode_full"=> "22060413",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "LEMBONGAN",
             "kecamatan_kode"=> "04",
             "kode"=> "14",
             "kode_full"=> "22060414",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "JUNGUTBATU",
             "kecamatan_kode"=> "04",
             "kode"=> "15",
             "kode_full"=> "22060415",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ],
            [
             "nama"=> "TOYA PAKEH",
             "kecamatan_kode"=> "04",
             "kode"=> "16",
             "kode_full"=> "22060416",
             "created_at"=> date("Y-m-d H:i:s"),
             "updated_at"=> date("Y-m-d H:i:s")
            ]
           ];
        foreach($kelurahan as $a)
            DB::table('kelurahan')->insert($a);
    }
}
