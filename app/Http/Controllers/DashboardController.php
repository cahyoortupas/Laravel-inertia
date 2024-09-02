<?php

namespace App\Http\Controllers;
use App\Models\Kelurahan;
use Inertia\Inertia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Index', [
            'title' => 'Dashboard Pra Sertipikat Elektronik',
            'url' => 'dashboard',
            'datas' => Kelurahan::with('Kecamatan')->orderby('nama','ASC')
            ->withCount(['Prabtel' => function($query){
                $query->doesntHave('Sertipikat');
            }])->withCount(['Prabtstel' => function($query){
                $query->whereHas('Sertipikat');
            }])->withCount('Bukutanah')
            ->with(['Bukutanah' => function ($query) {
                $query->withCount('PermohonanSuratukur')->withCount('PermohonanBukutanah')->withCount('PermohonanBukutanahselesai');
            }])->withCount(['Prasuel' => function($query){
                $query->doesntHave('Sertipikat');
            }])->withCount(['Prasustel' => function($query){
                $query->whereHas('Sertipikat');
            }])->withCount('Suratukur')
            ->with(['Suratukur' => function ($query) {
                $query->withCount('PermohonanBukutanah')->withCount('PermohonanSuratukur')->withCount('PermohonanSuratukurselesai');
            }])
            ->paginate()
        ]);
    }

    public function bukutanah()
    {
        return Inertia::render('Dashboard/Bukutanah', [
            'title' => 'Dashboard Pra BT Elektronik',
            'url' => 'dashboard',
            'datas' => Kelurahan::with('Kecamatan')->orderby('nama','ASC')
            ->withCount(['Prabtel' => function($query){
                $query->doesntHave('Sertipikat');
            }])->withCount(['Prabtstel' => function($query){
                $query->whereHas('Sertipikat');
            }])->withCount('Bukutanah')
            ->with(['Suratukur' => function ($query) {
                $query->withCount('PermohonanBukutanah')->withCount('PermohonanSuratukur')->withCount('PermohonanSuratukurselesai');
            }])->paginate()
        ]);
    }

    public function suratukur()
    {
        return Inertia::render('Dashboard/Suratukur', [
            'title' => 'Dashboard Pra SU Elektronik',
            'url' => 'dashboard',
            'datas' => Kelurahan::with('Kecamatan')->orderby('nama','ASC')
            ->withCount(['Prasuel' => function($query){
                $query->doesntHave('Sertipikat');
            }])->withCount(['Prasustel' => function($query){
                $query->whereHas('Sertipikat');
            }])->withCount('Suratukur')
            ->with(['Bukutanah' => function ($query) {
                $query->withCount('PermohonanSuratukur')->withCount('PermohonanBukutanah')->withCount('PermohonanBukutanahselesai');
            }])->paginate()
        ]);
    }
}
