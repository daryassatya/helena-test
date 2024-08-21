<?php

namespace App\Http\Controllers;

use App\Models\Helena;
use App\Models\Hitung;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class HelenaController extends Controller
{
    public function index(){
        $hitung = Hitung::all();
        $totalTerlayani = $hitung->sum('terlayani');
        return view('helena', compact('hitung', 'totalTerlayani'));
    }
}
