<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use App\Models\User;
use App\Models\Kelurahan;
use App\Models\Kecamatan;
use App\Models\Bukutanah;
use Maatwebsite\Excel\Row;
use Carbon\Carbon;

class Import_Sample implements ToModel, WithStartRow
{
    protected $rowNumber = 1;
    protected $successRows = [];
    protected $failureRows = [];

    public function model(array $row)
    {
        $user = auth()->user();
        $userid = $user->id;
        $this->rowNumber++;

        $kodefull = substr($row[3],0,8);
        $tipehak = substr($row[3],8,1);
        $kelurahan = strtoupper($row[1]);

        $datakelurahan = Kelurahan::where('nama',$kelurahan)->where('kode_full',$kodefull)->first();

        if(!$datakelurahan){
            $this->failureRows[] = [
                'index' => $this->rowNumber,
                'data' => $row[3],
                'message' => 'Data ' . $row[3] . ' gagal diimport'
            ];
        }else{
            $cekbt = Bukutanah::where('no_hak',$row[3])->where('kelurahan_kodefull', $datakelurahan->kode_full)->first();

            if($cekbt){
                $cekbt->tipe_hak = $tipehak;
                $cekbt->save();
                $this->successRows[] = [
                    'index' => $this->rowNumber,
                    'data' => $row[3],
                    'message' => 'Data ' . $row[3] . ' berhasil diupdate'
                ];
            }else{
                if(isset($row[5])){
                    $date = Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[5]));
                }else{
                    $date = date("Y-m-d H:i:s");
                }
                
                
                $bt = new Bukutanah([
                    'kelurahan_kodefull' => $datakelurahan->kode_full,
                    'no_hak'=> $row[3],
                    'tipe_hak'=> $tipehak,
                    'created_at' => $date,
                    'updated_at' => date("Y-m-d H:i:s")
                ]);

                $bt->save();

                $this->successRows[] = [
                    'index' => $this->rowNumber,
                    'data' => $row[3],
                    'message' => 'Data ' . $row[3] . ' berhasil diinsert'
                ];

            }
        }
    }

    public function startRow(): int
    {
        return 2;
    }

    public function batchSize(): int
    {
        return 1000; // Adjust batch size as needed
    }

    public function getSuccessRows(): array
    {
        return $this->successRows;
    }

    public function getFailureRows(): array
    {
        return $this->failureRows;
    }
}
