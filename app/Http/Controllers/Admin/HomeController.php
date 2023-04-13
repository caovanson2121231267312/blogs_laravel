<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $currentYear = date('Y');
        $previousYear = date('Y') - 1;
        $months = range(1, 12);

        $usersByMonthOnThisYear = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
            ->whereYear('created_at', $currentYear)
            ->groupBy('month')
            ->get()
            ->pluck('count', 'month')
            ->toArray();

        // $usersByMonthOnThisYear = array_merge($usersByMonthOnThisYear, array_fill_keys($months, 0));

        // dd($usersByMonthOnThisYear);
        return view('admin.home.index', [
            'usersByMonthOnThisYear' => $usersByMonthOnThisYear,
        ]);
    }
}