<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
    public function index(){
        $users = User::join('purchases', 'users.id', '=', 'purchases.user_id')->select(DB::raw('users.*, max(purchase_date) as purchase_date'))->groupBy('users.id')->paginate($this->perPage);
        return view('users.index', compact('users'));
    }

    public function indexBirthsday(){
        $users = User::orderByRaw('MONTH(birthdate), DAY(birthdate)')->paginate($this->perPage);

        return view('users.birthsday', compact('users'));
    }

    public function thisWeekBirthsday(){
        $users = User::with('purchases')->whereBetween(DB::raw('DATE_FORMAT(birthdate, "%m-%d")'),[Carbon::now()->format('m-d'), Carbon::now()->endOfWeek()->format('m-d')])->paginate($this->perPage);

        return view('users.thisWeekBirthsday', compact('users'));
    }
}
