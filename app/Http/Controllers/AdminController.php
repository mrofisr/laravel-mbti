<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use DB;
use App\Models\User;
use App\Models\Question;
use App\Models\Report;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $userCount = User::count();
        $reportCount = Report::count();
        $questionCount = Question::count();
        $mbti = DB::table('reports')->select('result', DB::raw('count(*) as total'))->groupBy('result')->distinct()->get();
        $jk = DB::table('reports')->select('jenis_kelamin', DB::raw('count(*) as total'))->groupBy('jenis_kelamin')->distinct()->get();
        return view('admin.dashboard', [
            'userCount' => $userCount,
            'reportCount' => $reportCount,
            'questionCount' => $questionCount,
            'mbti' => $mbti,
            'jenis_kelamin' => $jk
        ]);
    }
    public function index()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }
    public function login(Request $request)
    {
        $rules = [
            'email'                 => 'required|email',
            'password'              => 'required|string'
        ];

        $messages = [
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',
            'password.required'     => 'Password wajib diisi',
            'password.string'       => 'Password harus berupa string'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('admin.dashboard');
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah');
            return redirect()->route('admin.login');
        }
    }
    public function register(Request $request)
    {
        $user = new User;
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        if ($user->save()) {
            return redirect()->route('admin.login');
        }

    }
    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('admin.login');
    }
}
