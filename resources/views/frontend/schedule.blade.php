@extends('layouts.frontend')

@section('title')
    Dietify - Jadwal
@endsection


@section('content')
<section class="about section-padding">
    <div class="container mt-4">
        <div class="row justify-content-center mt-4">
            <div class="col-lg-12 mt-5">
                <div class="card">
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
                    <div class="card-header">Jadwal Diet Terbaik Untukmu</div>
                    <div class="d-flex justify-content-between align-items-center card-header">

                        <div class="">Anda terdaftar program: <b>{{ $dietSchedules[0]['deskripsi'] }}</b></div>
                        <div class="">
                            <b>Tanggal:</b> {{ $userProgram->tanggal_mulai->format('d M Y') }} - {{ $userProgram->tanggal_selesai->format('d M Y') }}
                        </div>
                        <div class="">Durasi: <b>{{ $userProgram->tanggal_mulai->diffInDays($userProgram->tanggal_selesai) }} Hari</b></div>
                    </div>


                    <div class="card-body mt-4 mb-5">
                        @php
                            // $userProgram = auth()->user()->userProgram;
                            // check is user program is active true
                            $userProgram = auth()->user()->userProgram->where('is_active', true)->first();
                        @endphp
                        @if ($userProgram == null)
                            <div class="col-12 text-center mb-4">
                                <h5 class="mb-5">Anda Belum Terdaftar Dalam Program Diet</h5>
                                {{-- Tampilkan informasi lainnya jika diperlukan --}}
                                {{-- <a href="{{ route('schedule', ['dietTypeId' => $userProgram->diet_schedule_id]) }}" class="btn custom-btn">Daftar Lagi</a> --}}
                            </div>
                        @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th style="width: 10%">Hari</th>
                                    <th style="width: 10%">Deskripsi</th>
                                    <th>Sarapan</th>
                                    <th>Snack Pagi</th>
                                    <th>Makan Siang</th>
                                    <th>Snack Sore</th>
                                    <th>Makan Malam</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dietSchedules as $schedule)
                                <tr>
                                    <td>{{ $schedule['nama_hari'] }}</td>
                                    <td>{{ $schedule['deskripsi'] }}</td>
                                    <td>
                                        @php
                                            $progressForSchedule = $dailyProgress->where('diet_schedule_id', $schedule['id']);
                                        @endphp
                                        @if($progressForSchedule->isNotEmpty())
                                            {{ $schedule['sarapan'] }} <br>
                                            @foreach($progressForSchedule as $progress)
                                                Progress: {{ $progress->sarapan }}<br>
                                            @endforeach
                                        @else
                                            {{ $schedule['sarapan'] }} <br>
                                            Progress: Belum ada laporan progress
                                        @endif
                                    </td>
                                    <td>
                                        @if($progressForSchedule->isNotEmpty())
                                            {{ $schedule['snack_pagi'] ? $schedule['snack_pagi'] : 'Tidak ada snack' }} <br>
                                            @foreach($progressForSchedule as $progress)
                                                Progress: {{ $progress->snack_pagi }}<br>
                                            @endforeach
                                        @else
                                            {{ $schedule['snack_pagi'] ? $schedule['snack_pagi'] : 'Tidak ada snack' }} <br>
                                            Progress: Belum ada laporan progress
                                        @endif
                                    </td>
                                    <td>
                                        @if($progressForSchedule->isNotEmpty())
                                            {{ $schedule['makan_siang'] }} <br>
                                            @foreach($progressForSchedule as $progress)
                                                Progress: {{ $progress->makan_siang }}<br>
                                            @endforeach
                                        @else
                                            {{ $schedule['makan_siang'] }} <br>
                                            Progress: Belum ada laporan progress
                                        @endif
                                    </td>
                                    <td>
                                        @if($progressForSchedule->isNotEmpty())
                                            {{ $schedule['snack_sore'] ? $schedule['snack_sore'] : 'Tidak ada snack' }} <br>
                                            @foreach($progressForSchedule as $progress)
                                                Progress: {{ $progress->snack_sore }}<br>
                                            @endforeach
                                        @else
                                            {{ $schedule['snack_sore'] ? $schedule['snack_sore'] : 'Tidak ada snack' }} <br>
                                            Progress: Belum ada laporan progress
                                        @endif
                                    </td>
                                    <td>
                                        @if($progressForSchedule->isNotEmpty())
                                            {{ $schedule['makan_malam'] }} <br>
                                            @foreach($progressForSchedule as $progress)
                                                Progress: {{ $progress->makan_malam }}<br>
                                            @endforeach
                                        @else
                                            {{ $schedule['makan_malam'] }} <br>
                                            Progress: Belum ada laporan progress
                                        @endif
                                    </td>
                                    {{-- catat progress --}}
                                    <td>
                                        @if($progressForSchedule->isNotEmpty())
                                            <a href="{{ route('report', ['dietTypeId' => $dietTypeId, 'progressId' => $schedule['id']]) }}" class="btn custom-btn form-control mt-4 mb-3 disabled">Catat Progress</a>
                                        @else
                                            <a href="{{ route('report', ['dietTypeId' => $dietTypeId, 'scheduleId' => $schedule['id']]) }}" class="btn custom-btn form-control mt-4 mb-3">Catat Progress</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                        @endif
                        {{-- <h5 class="card-title">{{ $dietSchedules->nama_hari }}</h5>
                        {{-- <h5 class="card-title">{{ $dietSchedules->nama_hari }}</h5>
                        <p class="card-text">Deskripsi: {{ $dietSchedules->deskripsi }}</p>
                        <p class="card-text">Sarapan: {{ $dietSchedules->sarapan }}</p>
                        <p class="card-text">Snack Pagi: {{ $dietSchedules->snack_pagi }}</p>
                        <p class="card-text">Makan Siang: {{ $dietSchedules->makan_siang }}</p>
                        <p class="card-text">Snack Sore: {{ $dietSchedules->snack_sore }}</p>
                        <p class="card-text">Makan Malam: {{ $dietSchedules->makan_malam }}</p>
                        <a href="{{ route('frontend.program') }}" class="btn btn-primary">Kembali</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection