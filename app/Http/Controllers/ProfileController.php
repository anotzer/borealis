<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('auth.profile.index', compact('orders'));
    }

    public function update(Request $request) {
        $input = $request->all();
        $input['phone']   = ($request->exists('phone')) ? str_replace(['+'], '', $input['phone']) : null;
        auth()->user()->update($input);
        return redirect()->back();
    }
}
