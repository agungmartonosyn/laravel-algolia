<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Search;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(5);

        return view('home', compact('users'));
    }

    public function search(Request $request)
    {
        if($request->has('search')){
    		$pegawai = User::search($request->get('search'))->get();	
    	}else{
    		$pegawai = User::get();
    	}

        return view('search', compact('pegawai'));
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return redirect('home');
    }


}
