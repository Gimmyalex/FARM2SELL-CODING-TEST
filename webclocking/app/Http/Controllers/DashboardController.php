<?php
// app/Http/Controllers/DashboardController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function clockInOut(Request $request)
    {
        $user = Auth::user();
        $currentDateTime = now();
        $existingEntry = DB::table('clocking_logs')
                            ->where('user_id', $user->id)
                            ->whereDate('created_at', $currentDateTime->toDateString())
                            ->first();

        if ($existingEntry) {
            DB::table('clocking_logs')
                ->where('id', $existingEntry->id)
                ->update(['time_out' => $currentDateTime]);
            return response()->json(['message' => 'Time Out logged successfully!']);
        } else {
            DB::table('clocking_logs')->insert([
                'user_id' => $user->id,
                'time_in' => $currentDateTime,
                'created_at' => $currentDateTime,
                'updated_at' => $currentDateTime
            ]);
            return response()->json(['message' => 'Time In logged successfully!']);
        }
    }
}
