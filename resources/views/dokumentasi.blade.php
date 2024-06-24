<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desa Wisata Cengek</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <style>
        .custom-gradient {
            background: rgb(39, 48, 68);
            background: linear-gradient(90deg, rgba(39, 48, 68, 1) 16%, rgba(226, 237, 255, 1) 76%);
        }
    </style>

</head>

<body>


    <x-navbar></x-navbar>
    <!-- hero -->
    <div class="container-flex jumbotron"
        style="height: 50vh; margin-top: 13vh; background-image: url(images/bantuan.png); background-size: cover; background-repeat: no-repeat;">
        <div class="row">
            <div class="col-12 text-center pt-5 mb-3">
                <h1>Bantuan</h1>
            </div>
            <div class="col-12 text-center mt-2 mb-2">
                <h5>Beri tahu kami apa masalah mu</h5>
            </div>
            <div class="col-12 d-flex justify-content-center">
                <form action="{{ route('dokumentasi') }}" method="GET" id="form-search" class="d-flex" role="search">
                    <input id="keyword" class="form-control me-2" type="search" name="q" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-dark" value="Cari" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-center mt-4 mb-5">
            <div class="col-8 text-center mb-4">
                <h2>FAQ</h2>
                <hr>
            </div>
            <div class="col-md-8">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Desa Wisata
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Desa wisata adalah sebuah desa yang
                                memiliki potensi wisata dan
                                dikembangkan sebagai destinasi wisata. Desa wisata menawarkan berbagai daya tarik
                                wisata, seperti wisata alam, wisata budaya, wisata agrowisata, dan wisata buatan
                                manusia.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                aria-controls="flush-collapseTwo">
                                Pembelian tiket
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Anda harus memiliki akun terlebih dahulu
                                untuk dapat melakukan
                                pembelian tiket</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Pembuatan Akun
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Anda dapat melakukan registrasi dengan
                                menggunakan akun email
                                anda. Setelah itu anda dapat login dengan akun email yang telah anda registrasikan</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Wisata Gowes
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Pengunjung akan diajak bersepeda
                                mengelilingi
                                desa Tingkir Lor Cengek dengan pemandangan yang indah.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseFive" aria-expanded="false"
                                aria-controls="flush-collapseFive">
                                Wisata Religi
                            </button>
                        </h2>
                        <div id="flush-collapseFive" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Pengunjung dipersilahkan untuk ziarah ke
                                makam Mbah Abdul Wahid yang berada di Tingkir Lor. Beliau merupakan salah satu keluarga
                                KH
                                Abdurrahman Wahid yang merupakan Presiden ke-4 Republik Indonesia</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSix" aria-expanded="false"
                                aria-controls="flush-collapseSix">
                                Wisata Edukasi Coklat Tempe
                            </button>
                        </h2>
                        <div id="flush-collapseSix" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Pengunjung akan diedukasi tentang
                                bagaimana proses pembuatan coklat tempe, pengunjung juga berkesempatan untuk membuat
                                coklat tempe bersama-sama</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseSeven" aria-expanded="false"
                                aria-controls="flush-collapseSeven">
                                Wisata Gamelan
                            </button>
                        </h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse"
                            data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body" style="color: #555555;">Pengunjung akan diajak untuk belajar dan
                                memainkan alat musik tradisional gamelan bersama para ahli, serta memahami sejarah dan
                                filosofi yang mendalam di balik setiap bunyi dan nada.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="content">
        <div class="row">
            <div class="col text-center mb-3 ms-5">
                <h3 id="login-page">Panduan Penggunaan Website</h3>
                <hr>

            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-8 mb-5">
                <h5>Halaman Login</h5>
                <ul>
                    <li>
                        Halaman login digunakan oleh pengguna dan admin untuk masuk ke sistem.
                    </li>
                    <li>
                        Pengguna memasukkan kredensial login mereka pada form yang disediakan.
                    </li>
                </ul>
                <h5>Halaman Utama</h5>
                <ul>
                    <li>
                        Halaman utama menampilkan informasi umum tentang Desa Tingkir Lor, Cengek.
                    </li>
                    <li>
                        Terdapat foto-foto dari desa wisata untuk memberikan gambaran kepada pengunjung.
                    </li>
                    <li>
                        Navigasi menu utama terletak di bagian atas halaman untuk memudahkan pengunjung mengakses
                        halaman lain.
                    </li>
                </ul>
                <h5>Halaman Wisata</h5>
                <ul>
                    <li>
                        Halaman ini berisi informasi detail tentang wisata yang ada di Desa Cengek.
                    </li>
                    <li>
                        Setiap objek wisata dijelaskan secara singkat beserta foto-foto terkait.
                    </li>
                    <li>
                        Pengunjung dapat menjelajahi berbagai pilihan wisata yang ditawarkan.
                    </li>
                </ul>
                <h5>Halaman Pemesanan Tiket</h5>
                <ul>
                    <li>
                        Halaman pemesanan tiket menampilkan daftar wisata yang tersedia.
                    </li>
                    <li>
                        Pengunjung dapat memilih paket wisata yang diinginkan.
                    </li>
                    <li>
                        Terdapat form pemesanan tiket yang harus diisi oleh pengunjung meliputi
                        Email,
                        Nomor HP,
                        Nama Wisatawan/Ketua Rombongan,
                        Usia,
                        Tanggal Kedatangan,
                        Pilihan Paket Wisata, dan
                        Jumlah Rombongan.
                    </li>
                </ul>
                <h5>Halaman Pengelola (khusus admin)</h5>
                <ul>
                    <li>
                        Setelah login, pada link web http://127.0.0.1:8000/ tambahkan admin di akhir menjadi
                        http://127.0.0.1:8000//admin, setelah itu akan masuk ke halaman admin
                    </li>
                    <li>
                        Admin dapat mengelola informasi pada halaman utama, halaman wisata, dan halaman pemesanan tiket.
                    </li>
                    <li>
                        Terdapat fitur laporan pemesanan tiket yang menampilkan data pemesanan dalam bentuk tabel
                    </li>
                    <li>
                        Admin dapat melakukan tindakan seperti mengedit, menyimpan, menghapus, dan mengunduh data
                        pemesanan
                    </li>
                </ul>
                <h5>Laporan Pemesanan Tiket</h5>
                <ul>
                    <li>
                        Laporan pemesanan tiket menampilkan data pemesanan dalam format tabel.
                    </li>
                    <li>
                        Informasi yang ditampilkan meliputi
                        Tanggal pemesanan,
                        Email pemesan,
                        Nomor HP pemesan,
                        Nama pemesan,
                        Tanggal kedatangan,
                        Pilihan paket,
                        Jumlah orang, dan
                        Status pemesanan.
                    </li>
                    <li>
                        Admin dapat melakukan tindakan seperti mengedit, menyimpan, menghapus, dan mengunduh data
                        pemesanan.
                    </li>
                </ul>
            </div>
        </div>
    </div>




    <!-- footer -->
    <div class="container-flex pb-5 text-white text-center" style="background-color: #273044;">
        <div class="col-md-12 pt-5">
            <h4 class="display-7">Desa Wisata Tingkir Lor</h4>
            <a href="https://www.instagram.com/desawisata_tingkirlor/" class="text-white fw-bold">Instagram <i
                    class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/@dewitingkirlor6946" class="text-white fw-bold">Youtube <i
                    class="bi bi-youtube"></i></a>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>