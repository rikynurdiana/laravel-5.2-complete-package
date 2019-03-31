<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Models\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function logTest(Request $request)
    {
        $total_access = DB::table('access_logs')->where('path', $request->path())->count();
        return "Halaman ini telah diakses sebanyak ". $total_access . "kali.";
    }

        public function lists()
    {
        $employee = Employee::orderBy('id', 'asc')->get();
        return view('employee', compact('employee'));
    }
}
