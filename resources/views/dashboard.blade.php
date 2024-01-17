<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the Admin Dashboard!") }}

                    <!-- Display all user programs -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold mb-2">All User Programs</h3>
                        @if($userPrograms->isNotEmpty())
                            <ul>
                                @foreach($userPrograms as $userProgram)
                                    <li>
                                        <p><strong>User ID:</strong> {{ $userProgram->user_id }}</p>
                                        <p><strong>Member Name:</strong> {{ $userProgram->user->name }}</p>
                                        <p><strong>Email:</strong> {{ $userProgram->user->email }}</p>
                                        <p><strong>Program Name:</strong> {{ $userProgram->dietSchedule->dietType->deskripsi }}</p>
                                        <p><strong>Start Date:</strong> {{ $userProgram->tanggal_mulai->format('d M Y') }}</p>
                                        <p><strong>End Date:</strong> {{ $userProgram->tanggal_selesai->format('d M Y') }}</p>
                                        <hr>
                                        <!-- Add more program details as needed -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No user programs found.</p>
                        @endif
                    </div>

                    <!-- Display all user profiles -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold mb-2">All User Profiles</h3>
                        @if($userProfiles->isNotEmpty())
                            <ul>
                                @foreach($userProfiles as $userProfile)
                                    <li>
                                        <p><strong>User ID:</strong> {{ $userProfile->user_id }}</p>
                                        <p><strong>Height:</strong> {{ $userProfile->tinggi_badan }} cm</p>
                                        <p><strong>Weight:</strong> {{ $userProfile->berat_badan }} kg</p>
                                        <p><strong>Age:</strong> {{ $userProfile->umur }} years</p>
                                        <p><strong>Body Fat:</strong> {{ $userProfile->lemak_tubuh }} %</p>
                                        <p><strong>Target Achievement Weight:</strong> {{ $userProfile->target_berat_badan }} kg</p>
                                        <p><strong>Activity Level:</strong> {{ $userProfile->aktivitas }}</p>
                                        {{-- divider line --}}
                                        <hr>
                                        <!-- Add more profile details as needed -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No user profiles found.</p>
                        @endif
                    </div>

                    <!-- Display all diet schedules -->
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold mb-2">All Diet Schedules</h3>
                        @if($dietSchedules->isNotEmpty())
                            <ul>
                                @foreach($dietSchedules as $dietSchedule)
                                    <li>
                                        <p><strong>Schedule ID:</strong> {{ $dietSchedule->id }}</p>
                                        <p><strong>Day Name:</strong> {{ $dietSchedule->nama_hari }}</p>
                                        <p><strong>Diet Type:</strong> {{ $dietSchedule->dietType->deskripsi }}</p>
                                        <p><strong>Description:</strong> {{ $dietSchedule->deskripsi }}</p>
                                        <p><strong>Breakfast:</strong> {{ $dietSchedule->sarapan }}</p>
                                        <p><strong>Morning Snack:</strong> {{ $dietSchedule->snack_pagi }}</p>
                                        <p><strong>Lunch:</strong> {{ $dietSchedule->makan_siang }}</p>
                                        <p><strong>Afternoon Snack:</strong> {{ $dietSchedule->snack_sore }}</p>
                                        <p><strong>Dinner:</strong> {{ $dietSchedule->makan_malam }}</p>
                                        {{-- divider line --}}
                                        <hr>
                                        <!-- Add more schedule details as needed -->
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No diet schedules found.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
