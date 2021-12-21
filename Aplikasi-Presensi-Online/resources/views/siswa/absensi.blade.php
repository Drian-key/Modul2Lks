<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if (session('berhasilAbsen'))
                        <script>
                            alert('berhasil mengisi absen');
                        </script>
                    @endif
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal buat</th>
                            <th scope="col">Tanggal update</th>
                            <th scope="col">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($absens as $abs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $abs->user->name }}</td>
                                <td></td>
                                <td>{{ $abs->created_at }}</td>
                                <td>{{ $abs->update_at }}</td>
                                <td>
                                    <a href="#">Ubah</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
