<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pemberitahuan;
use App\Models\Buku;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pemberitahuan = Pemberitahuan::where('status', 'aktif')->get();
        $buku = Buku::all();

        return view('user.dashboard', compact('pemberitahuan', 'buku'));

    }
}