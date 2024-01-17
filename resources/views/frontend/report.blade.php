@extends('layouts.frontend')

@section('title')
    Dietify - Jadwal
@endsection

@section('content')
<section class="about section-padding">
    <div class="container">

        <div class="row"> <!-- Add justify-content-center class -->
            <div class="col-1 ">
                <img src="{{ asset('frontend/images/Img2.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img1.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img3.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img4.png') }}" alt="Image">
            </div>
            <div class="col-1">
                <img src="{{ asset('frontend/images/Img5.png') }}" alt="Image">
            </div>
        </div>

        <div class="row mt-2 mb-4">
            <div class="col-12 text-center">
                <img src="{{ asset('frontend/images/greennobg.png') }}" alt="Logo" style="height: 100px; width: 300px;">
            </div>
        </div>
        <div class="row mt-2 mb-4">
            <div class="col-12 row">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                {{-- error --}}
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="container-box row">
                    <div class="">Anda terdaftar program: <b>{{ $dietSchedules[0]['deskripsi'] }}</b></div>
                @auth
                    @if(isset($userProgram) && $userProgram && $userProgram->diet_schedule_id)
                    <div class="container">
                        <form action="{{ route('report.store', ['dietTypeId' => $dietTypeId, 'scheduleId' => request()->scheduleId]) }}" method="POST">
                            @csrf
                            {{-- <div class="mb-3">
                                <label for="report_date" class="form-label">Report Date:</label>
                                <input type="date" name="report_date" class="form-control" required>
                            </div> --}}
                            <div class="mb-3">
                                <label for="sarapan" class="form-label">Sarapan:</label>
                                <input type="text" name="sarapan" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="snack_pagi" class="form-label">Snack Pagi:</label>
                                <input type="text" name="snack_pagi" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="makan_siang" class="form-label">Makan Siang:</label>
                                <input type="text" name="makan_siang" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="snack_sore" class="form-label">Snack Sore:</label>
                                <input type="text" name="snack_sore" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="makan_malam" class="form-label">Makan Malam:</label>
                                <input type="text" name="makan_malam" class="form-control" required>
                            </div>
                            <!-- You can add more form fields if needed -->
                            {{-- <input type="hidden" name="scheduleId" value="{{ $dietSchedules[0]['id'] }}"> --}}
                            {{-- <input type="hidden" name="scheduleId" value="{{ $scheduleId }}"> --}}


                            <button type="submit" class="btn custom-btn form-control mt-4 mb-3">Submit Progress</button>
                        </form>
                    </div>
                    @endif
                    @endauth

                {{-- guest please login first --}}
                @guest
                <div class="col-12 text-center mb-4">
                    <h5 class="mb-5">Silahkan <span>Login</span> terlebih dahulu</h5>
                    <a href="{{ url('login') }}" class="btn custom-btn">Login</a>
                @endguest
                </div>
            </div>
        </div>

        <div class="row mt-4"> <!-- Add justify-content-center class -->
            <div class="col-1 ">
                <img src="{{ asset('frontend/images/Img5.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img4.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img1.png') }}" alt="Image">
            </div>
            <div class="col-3">
                <img src="{{ asset('frontend/images/Img3.png') }}" alt="Image">
            </div>
            <div class="col-1">
                <img src="{{ asset('frontend/images/Img2.png') }}" alt="Image">
            </div>
        </div>
    </div>
</section>
@endsection