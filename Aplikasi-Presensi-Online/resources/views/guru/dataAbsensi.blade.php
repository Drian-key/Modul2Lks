<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($absensis as $absensi)
                    <div class="card" style="width: 40rem;">
                        <div class="card-body">
                          <h5 class="card-title">{{ $absensi->topic }}</h5>
                          <p class="card-text">{{ $absensi->subject->name }}</p>

                          <form action="/siswa/absen" method="post">
                            @csrf

                            <input type="hidden" name="attendance_id" value="{{ $absensi->id }}">
                            <input type="hidden" name="student_id" value="{{ auth()->user()->id }}">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="attstatus" id="attstatus" value="Hadir">
                                <label class="form-check-label" for="attstatus">
                                  Hadir
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="attstatus" id="attstatus" value="Izin">
                                <label class="form-check-label" for="attstatus">
                                    Izin
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="attstatus" id="attstatus" value="Sakit">
                                <label class="form-check-label" for="attstatus">
                                    Sakit
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>

                        </div>
                    </div>
                    @endforeach
                    


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
