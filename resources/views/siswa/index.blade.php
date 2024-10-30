<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>


    <nav class="navbar navbar-expand-lg bg-dark " style="margin-bottom:3rem">
        <div class="container">
            <a class="navbar-brand text-light" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Siswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Guru</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Bendahara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Transaksi</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <div class="container">
        <div class="d-flex">
            <div class="me-auto">
                <a href="" class="btn btn-primary">Tambah Siswa</a>
            </div>
            <div>
                <form action="" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Cari Siswa">
                        <button class="btn btn-outline-secondary" type="submit">Cari</button>
                    </div>
                </form>
            </div>
        </div>

        <table class="table mt-5 table-stripped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Umur</th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($data as $d)
                <tr>
                    <th scope="row">{{$d['id']}}</th>
                    <td>{{$d['nama']}}</td>
                    <td>{{$d['alamat']}}</td>
                    <td>{{$d['jenis_kelamin']}}</td>
                    <td>{{$d['agama']}}</td>
                    <td>{{$d['umur']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>