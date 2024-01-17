@extends('layouts.frontend')

@section('title')
    Dietify - Program
@endsection

@push('after-style')
    <style>
        .container-box {
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: .25rem;
        }
    </style>

@endpush

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
                {{-- text --}}
                <h5 class="mb-5">Siap untuk mencobanya? <span>Beri tahu kami tentang pola makanmu</span></h5>
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
                @auth
                    @php
                        $userProgram = auth()->user()->userProgram;
                        // check if user program is active true
                        // $userProgram = auth()->user()->userProgram->where('is_active', true)->first();
                    @endphp

                    @if (optional ($userProgram)->is_active)
                        <div class="col-12 text-center mb-4">
                            <h5 class="mb-5">Anda sudah terdaftar dalam program diet</h5>
                            {{-- Tampilkan informasi lainnya jika diperlukan --}}
                            <a href="{{ route('schedule', ['dietTypeId' => $userProgram->diet_schedule_id]) }}" class="btn custom-btn">Lihat Jadwal Diet Anda</a>
                        </div>
                    @else
                    <form action="{{ route('frontend.userProgram') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="form-group">
                                <label for="dietType">Pilih Jenis Diet yang ingin kamu lakukan</label>
                                <select class="form-control" id="dietType" name="diet_type_id">
                                    <option value="1">Diet Standar</option>
                                    <option value="2">Diet Vegetarian</option>
                                    <option value="3">Diet Mayo</option>
                                    <option value="4">Diet Metabolisme</option>
                                    <option value="5">Diet Mediterranian</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="tinggi_badan">Height</label>
                                    <input type="number" name="tinggi_badan" class="form-control" id="tinggi_badan" placeholder="Enter your height">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="berat_badan">Berat Badan</label>
                                    <input type="number" name="berat_badan" class="form-control" id="berat_badan" placeholder="Enter your weight">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="umur">Age</label>
                                    <input type="number" name="umur" class="form-control" id="umur" placeholder="Enter your age">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="lemak_tubuh">Body Fat</label>
                                    <input type="number" name="lemak_tubuh" class="form-control" id="lemak_tubuh" placeholder="Enter your body fat percentage">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="target_berat_badan">Target Achievement</label>
                                    <input type="number" name="target_berat_badan" class="form-control" id="target_berat_badan" placeholder="Enter your target achievement">
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label for="activityLevel">Activity</label>
                                <select class="form-control" id="activityLevel" name="aktivitas">
                                    <option value="Low">Low</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="High">High</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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