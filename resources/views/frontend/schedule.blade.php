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
                    <div class="card-header">Jadwal Diet Terbaik Untukmu</div>
                    <div class="d-flex justify-content-between align-items-center card-header">

                        <div class="">Anda terdaftar program: <b>{{ $dietSchedules[0]['deskripsi'] }}</b></div>
                        <div class="">
                            <b>Tanggal:</b> {{ $userProgram->tanggal_mulai->format('d M Y') }} - {{ $userProgram->tanggal_selesai->format('d M Y') }}
                        </div>
                        <div class="">Durasi: <b>{{ $userProgram->tanggal_mulai->diffInDays($userProgram->tanggal_selesai) }} Hari</b></div>
                    </div>


                    <div class="card-body mt-4 mb-5">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($dietSchedules as $schedule)
                                    <tr>
                                        <td>{{ $schedule['nama_hari'] }}</td>
                                        <td>{{ $schedule['deskripsi'] }}</td>
                                        <td>{{ $schedule['sarapan'] }}</td>
                                        <td>{{ $schedule['snack_pagi'] }}</td>
                                        <td>{{ $schedule['makan_siang'] }}</td>
                                        <td>{{ $schedule['snack_sore'] }}</td>
                                        <td>{{ $schedule['makan_malam'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
