<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
    <div class="py-12 container">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <h1 class="mt-6 mb-6" style="text-align: center">Absensi siswa</h1>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal buat</th>
                            <th scope="col">Tanggal update</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($absens as $abs)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $abs->user->name }}</td>
                                <td>{{ $abs->attstatus }}</td>
                                <td>{{ $abs->created_at }}</td>
                                <td>{{ $abs->updated_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>
</html>