<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
        
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::join('purchases', 'users.id', '=', 'purchases.user_id')->select(DB::raw('users.*, max(purchase_date) as purchase_date'))->groupBy('users.id')->paginate($this->perPage);
        return view('users.index', compact('users'));
    }
    
    /**
     * indexBirthday
     *
     * @return View
     */
    public function indexBirthday(): View
    {
        $users = User::orderByRaw('MONTH(birthdate), DAY(birthdate)')->paginate($this->perPage);

        return view('users.birthday', compact('users'));
    }
    
    /**
     * thisWeekBirthday
     *
     * @return View
     */
    public function thisWeekBirthday(): View
    {
        $users = User::with('purchases')->whereBetween(DB::raw('DATE_FORMAT(birthdate, "%m-%d")'),[Carbon::now()->format('m-d'), Carbon::now()->endOfWeek()->format('m-d')])->paginate($this->perPage);

        return view('users.thisWeekBirthday', compact('users'));
    }
}
