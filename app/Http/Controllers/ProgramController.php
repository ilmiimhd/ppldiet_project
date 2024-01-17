<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DietSchedule;
use App\Models\UserProgram;
use App\Models\UserProfile;


class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Mendapatkan data program diet aktif untuk user tertentu
        $userProgram = UserProgram::where('user_id', auth()->id())
        ->where('is_active', true)
        ->first();

        // Check if $userProgram is not null
        if ($userProgram) {
            // Mendapatkan jadwal diet berdasarkan jenis diet yang sudah dipilih oleh anggota
            $dietSchedules = DietSchedule::where('diet_type_id', $userProgram->diet_type_id)->get();

            // Check if diet schedules were found
            if ($dietSchedules->isEmpty()) {
                return redirect()->route('program')->with([
                    'error' => 'Tidak ada jadwal diet untuk tipe diet yang dipilih.'
                ]);
            }

            return view('frontend.index', compact('userProgram', 'dietSchedules'));
        } else {
            // User doesn't have an active program
            return view('frontend.index')->with([
                'error' => 'Anda belum memilih program diet. Silakan pilih program diet terlebih dahulu.'
            ]);
        }
    }

    public function program()
    {
        // Mendapatkan data program diet aktif untuk user tertentu
        $userProgram = UserProgram::where('user_id', auth()->id())
        ->where('is_active', true)
        ->first();

        // Check if $userProgram is not null
        if ($userProgram) {
            // Mendapatkan jadwal diet berdasarkan jenis diet yang sudah dipilih oleh anggota
            $dietSchedules = DietSchedule::where('diet_type_id', $userProgram->diet_type_id)->get();

            // Check if diet schedules were found
            // if ($dietSchedules->isEmpty()) {
            //     return redirect()->route('program')->with([
            //         'error' => 'Tidak ada jadwal diet untuk tipe diet yang dipilih.'
            //     ]);
            // }

            return view('frontend.program', compact('userProgram', 'dietSchedules'));
        } else {
            // User doesn't have an active program
            return view('frontend.program')->with([
                'error' => 'Anda belum memilih program diet. Silakan pilih program diet terlebih dahulu.'
            ]);
        }
    }

    public function userProgram(Request $request)
    {
        // validate request
        // $request->validate([
        //     'diet_type_id' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'tinggi_badan' => 'required',
        //     'berat_badan' => 'required',
        //     'aktivitas' => 'required',
        // ]);

        // get user
        $user = $request->user();

        // save user profile
        $user->userProfile()->create([
            'diet_type_id' => $request->diet_type_id,
            'tinggi_badan' => $request->tinggi_badan,
            'berat_badan' => $request->berat_badan,
            'umur' => $request->umur,
            'lemak_tubuh' => $request->lemak_tubuh,
            'target_berat_badan' => $request->target_berat_badan,
            'aktivitas' => $request->aktivitas,
        ]);
        // dd($request->all());

        // save user program
        $user->userProgram()->create([
            'diet_schedule_id' => $request->diet_type_id,
            'tanggal_mulai' => now(),
            'tanggal_selesai' => now()->addDays(7),
            'is_active' => true,
        ]);
        // dd($request->all());

        // return response
        return redirect()->route('program')->with([
            'success' => 'Anda berhasil memilih program diet.',
        ]);
    }

    public function userSchedule($dietTypeId)
    {
        // Get the active diet program for the current user
        $userProgram = UserProgram::where('user_id', auth()->id())
            ->with('dietSchedule.dietType')
            ->where('is_active', true)
            ->first();

        // Mendapatkan jenis diet yang dipilih oleh pengguna dari UserProfile
        $userProfile = UserProfile::where('user_id', auth()->id())->first();

        // Memeriksa apakah jenis diet yang dipilih oleh pengguna sesuai dengan $dietTypeId
        $isValidSchedule = $userProfile->diet_type_id == $dietTypeId;

        if (!$isValidSchedule) {
            return redirect()->route('program')->with([
                'error' => 'Anda tidak terdaftar di jadwal diet yang dipilih.'
            ]);
        }


        // Get the diet schedules for the selected diet type
        $dietSchedules = DietSchedule::where('diet_type_id', $dietTypeId)->with('dietType')->get();


        return view('frontend.schedule', compact('dietSchedules', 'userProgram'));
    }


    public function adminDashboard()
    {
        // Fetch all user programs, user profiles, and diet schedules
        $userPrograms = UserProgram::with('userProfile', 'dietSchedule')->get();
        $userProfiles = UserProfile::all();
        $dietSchedules = DietSchedule::all();

        // Pass data to the view
        return view('dashboard', compact('userPrograms', 'userProfiles', 'dietSchedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
