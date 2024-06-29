<?php 
namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function dashboard()
    {
        $userCount = User::count();
        // Asumsikan beasiswa terbaru adalah yang dibuat dalam 7 hari terakhir
        $recentScholarshipsCount = Beasiswa::where('created_at', '>=', now()->subDays(7))->count();
        $totalScholarshipsCount = Beasiswa::count();

        return view('dashboard', compact('userCount', 'recentScholarshipsCount', 'totalScholarshipsCount'));
    }
}
