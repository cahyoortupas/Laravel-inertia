<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Carbon\Carbon;

class SampleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public static $wrap = null;
    
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection->map(function ($item) {
                $now = Carbon::now();
                $created_at = Carbon::parse($item->created_at);
                $updated_at = Carbon::parse($item->updated_at);
                return [
                    'id' => $item->id,
                    'status_pengajuan' => $item->status_awal==1?'Pengajuan Pra SUEL':'Pengajuan Pra SUEL & Pra BTEL',
                    'loket' => $item->loket,
                    'nomor_utama' => $item->nomor_utama,
                    'nomor_referensi' => $item->loket=='BT'? 'nomor su '.$item->nomor_referensi:'nomor hak '.$item->nomor_referensi,
                    'kelurahan' => @$item->kelurahan->nama,
                    'kecamatan' => @$item->kelurahan->kecamatan->nama,
                    'hari' => $now->diffInDays($item->created_at),
                    'dibuat' => !empty($item->created_at) ? date('d M Y H:i:s',strtotime($item->created_at)) : null,
                    'selesai' => !empty($item->updated_at) ? date('d M Y H:i:s',strtotime($item->updated_at)) : null,
                    'proses_hari' => $updated_at->diffInDays($created_at),
                ];
            }),
            'paginate' => [
                'current_page' => $this->currentPage(),
                'from' => $this->firstItem(),
                'last_page' => $this->lastPage(),
            ],
        ];
    }
}
