<?php
// app/Http/Controllers/ReportController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user->type == 'admin') {
            $logs = DB::table('clocking_logs')
                ->join('users', 'clocking_logs.user_id', '=', 'users.id')
                ->select('users.email', 'clocking_logs.time_in', 'clocking_logs.time_out')
                ->orderBy('clocking_logs.time_in', 'asc')
                ->get();
        } else {
            $logs = DB::table('clocking_logs')
                ->where('user_id', $user->id)
                ->orderBy('time_in', 'asc')
                ->get();
        }
        return view('report', ['logs' => $logs]);
    }
}
