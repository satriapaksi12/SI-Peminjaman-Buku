<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Ruang;
use App\Models\Kendaraan;
use App\Models\Reservasi_alat;
use App\Models\Reservasi_kendaraan;
use App\Models\Reservasi_ruang;
use ConsoleTVs\Charts\ChartsServiceProvider;
use ConsoleTVs\Charts\Commands\ChartsCommand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ConsoleTVs\Charts\Facades\Charts;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grafik()
    {
    }
}
