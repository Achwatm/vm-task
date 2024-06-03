<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $thisWeekBirthsday = User::with('purchases')->whereBetween(DB::raw('DATE_FORMAT(birthdate, "%m-%d")'),[Carbon::now()->format('m-d'), Carbon::now()->endOfWeek()->format('m-d')])->get();
        $usersWithRecentPurchases = User::join('purchases', 'users.id', '=', 'purchases.user_id')->select(DB::raw('users.*, max(purchase_date) as purchase_date'))->groupBy('users.id')->orderBy('purchase_date', 'desc')->take(10)->get();
        return view('dashboard', compact('thisWeekBirthsday', 'usersWithRecentPurchases'));
    }
}
