<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class SampleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $now = Carbon::now();
        $created_at = Carbon::parse($this->created_at);
        $updated_at = Carbon::parse($this->updated_at);
        return [
            'id' => $this->id,
            'no_hak' => $this->no_hak,
            'kelurahan' => @$this->bukutanah->kelurahan->nama,
            'kecamatan' => @$this->bukutanah->kelurahan->kecamatan->nama,
            'tipe_hak' => @$this->bukutanah->tipehak->nama,
            'nomor' => substr($this->no_hak,9,5),
            'pemegang_hak' => @$this->bukutanah->pemegang_hak,
            'tipe_dokumen' => @$this->bukutanah->tipedokumen,
            'no_su' => $this->no_su,
            'diajukan' => !empty($this->created_at) ? date('d M Y H:i:s',strtotime($this->created_at)) : null,
            'selesai' => !empty($this->updated_at) ? date('d M Y H:i:s',strtotime($this->updated_at)) : null,
            'hari' => $now->diffInDays($this->created_at) === 0 ?'hari ini':$now->diffInDays($this->created_at).' hari yang lalu',
            'proses_hari' => $updated_at->diffInDays($created_at) === 0 ?'Sehari ':$updated_at->diffInDays($created_at).' hari',
        ];
    }
}
