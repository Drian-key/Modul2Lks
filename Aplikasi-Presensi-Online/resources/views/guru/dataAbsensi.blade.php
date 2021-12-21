<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <a href="guru/absensi-siswa" class="btn btn-primary">Absensi siswa</a>

                    @foreach ($absensis as $absensi)
                    <div class="card" style="width: 40rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $absensi->topic }}</h5>
                          <p class="card-text">{{ $absensi->subject->name }}</p>
                          <a href="/guru/ubah-absen" class="btn btn-warning">Ubah</a>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
