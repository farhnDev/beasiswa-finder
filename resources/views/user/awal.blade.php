@extends('user-app.app')

@section('content')
    <style>
        /* tampilan button */
        :root {
            --color: #ffffff;
        }

        button {
            position: relative;
            padding: 7px 10px;
            background: var(--color);
            font-size: 17px;
            font-weight: 500;
            color: #181818;
            border: 3px solid var(--color);
            border-radius: 8px;
            box-shadow: 0 0 0 #fec1958c;
            transition: all .3s ease-in-out;
            cursor: pointer;
        }

        .star-1 {
            position: absolute;
            top: 20%;
            left: 20%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all 1s cubic-bezier(0.05, 0.83, 0.43, 0.96);
        }

        .star-2 {
            position: absolute;
            top: 45%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all 1s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-3 {
            position: absolute;
            top: 40%;
            left: 40%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all 1s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-4 {
            position: absolute;
            top: 20%;
            left: 40%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all .8s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-5 {
            position: absolute;
            top: 25%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all .6s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-6 {
            position: absolute;
            top: 5%;
            left: 50%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #fffdef);
            z-index: -5;
            transition: all .8s ease;
        }

        button:hover {
            background: transparent;
            color: var(--color);
            box-shadow: 0 0 25px #fec1958c;
        }

        button:hover .star-1 {
            position: absolute;
            top: -80%;
            left: -30%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        button:hover .star-2 {
            position: absolute;
            top: -25%;
            left: 10%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        button:hover .star-3 {
            position: absolute;
            top: 55%;
            left: 25%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        button:hover .stars {
            display: block;
            filter: drop-shadow(0 0 10px #fffdef);
        }

        button:hover .star-4 {
            position: absolute;
            top: 30%;
            left: 80%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        button:hover .star-5 {
            position: absolute;
            top: 25%;
            left: 115%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        button:hover .star-6 {
            position: absolute;
            top: 5%;
            left: 60%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 10px #fffdef);
            z-index: 2;
        }

        .fil0 {
            fill: #ffffff
        }

        /* Animasi Move Up & Down Gambar */
        @keyframes moveUp {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        @keyframes moveDown {
            0% { transform: translateY(0); }
            50% { transform: translateY(20px); }
            100% { transform: translateY(0); }
        }

        .move-up {
            animation: moveUp 2s ease-in-out infinite alternate;
        }

        .move-down {
            animation: moveDown 2s ease-in-out infinite alternate;
        }

        /* Animasi Move Up */
        .animated-element {
            opacity: 0;
            transform: translateY(15%);
            transition: opacity 1s ease, transform 1.5s ease;
        }

        .animated-element.visible {
            opacity: 1;
            transform: translateY(0%);
        }

        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-15px);
        }
    </style>

    {{-- Section Rectangel Beasiswa --}}
    <section class="container-fluid text-dark rounded-5 mt-3" style="background-color: #141E27; width: 87%; height: 600px;">
        <div class="row d-flex justify-content-around ms-3">
            <div class="col-md-6">
                <div class="bg-transparent py-5 ms-5">
                    <div class="bg-transparent py-5 ms-5">
                        <div class="card-body py-5">
                            <p class="text-light fw-lighter h6" style="font-size: 20px">Pintu Menuju Masa Depan Yang Cerah</p>
                            <p class="text-light" style="font-size: 57px;  font-family: Poetsen One, sans-serif;">DAPATKAN
                                <br>BEASISWA IMPIANMU
                            </p>
                            <p class="text-light fw-lighter" style="font-size: 18px">Akses peluang beasiswa dengan mudah.
                                <br>Mulai langkah pertama menuju masa depan yang indah.
                            </p>
                            <div class="pt-2">
                                <a href="menu"><button>Learn More
                                    <div class="star-1">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="star-2">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="star-3">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="star-4">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="star-5">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="star-6">
                                        <svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 784.11 815.53"
                                            style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd"
                                            version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                                            <defs></defs>
                                            <g id="Layer_x0020_1">
                                                <metadata id="CorelCorpID_0Corel-Layer"></metadata>
                                                <path
                                                    d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"
                                                    class="fil0"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6  d-flex justify-content-center">
                <img src="{{ asset('assets/bg1.svg') }}" class="pb-5 move-up" style="width: 70%;" alt="">
            </div>
        </div>
    </section>

    {{-- Section Manfaatn 1 --}}
    <section class="container">
        <p class="text-center pt-5" style="  font-family: Platypi, serif; font-size: 20px;">Manfaat Mengikuti Beasiswa</p>
        <div class="d-flex justify-content-between pt-3">
            <div class="d-flex">
                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px" height="100px"
                        viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M4 24h10v2H4zm0-6h10v2H4zm22-4H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h20a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2M6 6v6h20V6zm20 22h-6a2 2 0 0 1-2-2v-6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2m-6-8v6h6v-6z" />
                    </svg>
                </div>
                <div class="ms-4 mt-1">
                    <p style="font-size: 20px;"><b>Experience</b></p>
                    <p>Mendapatkan Banyak Pengalaman <br>Mendapatkan Pendidikan Berkualitas</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px" height="100px"
                        viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="M26 30h-2v-3a5.006 5.006 0 0 0-5-5h-6a5.006 5.006 0 0 0-5 5v3H6v-3a7.01 7.01 0 0 1 7-7h6a7.01 7.01 0 0 1 7 7zM5 6a1 1 0 0 0-1 1v9h2V7a1 1 0 0 0-1-1" />
                        <path fill="currentColor"
                            d="M4 2v2h5v7a7 7 0 0 0 14 0V4h5V2Zm7 2h10v3H11Zm5 12a5 5 0 0 1-5-5V9h10v2a5 5 0 0 1-5 5" />
                    </svg>
                </div>
                <div class="ms-4 mt-1">
                    <p style="font-size: 20px;"><b>Education</b></p>
                    <p>Membuka Peluang Karir<br>Meningkatkan Prestasi Akademik</p>
                </div>
            </div>
            <div class="d-flex">
                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px" height="100px"
                        viewBox="0 0 32 32">
                        <path fill="currentColor"
                            d="m24 17l1.912 3.703l4.088.594L27 24l.771 4L24 25.75L20.229 28L21 24l-3-2.703l4.2-.594zM6 16h6v2H6zm0-4h10v2H6zm0-4h10v2H6z" />
                        <path fill="currentColor"
                            d="M16 26H4V6h24v10h2V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v20a2 2 0 0 0 2 2h12Z" />
                    </svg>
                </div>
                <div class="ms-4 mt-1">
                    <p style="font-size: 20px;"><b>Sertificate</b></p>
                    <p>Mendapatkan Sertifikat<br>Memperluas Jaringan & Relasi</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Info Beasiswa --}}
    <section class="container-fluid text-dark mt-5" style="background-color: #141E27; width: 100%; height: 670px;">
        <p class="text-white pt-5 ms-5 ps-5 animated-element" style="font-size: 30px;"><b>Beasiswa Finder Menyediakan</b></p>
        <p class="text-secondary ms-5 ps-5 animated-element" style="font-size: 20px;">Beasiswa Finder memiliki banyak informasi dan
            kebutuhan
            untuk mahasiswa mendapatkan beasiswa.</p>
        <div class="d-flex justify-content-center gap-5 pt-4 animated-element">
            <div class="card" style="width: 18rem;">
                <img src="https://lh4.googleusercontent.com/proxy/N2zJv0z98cc76eJNclf0haIL__9qWD0PpcnWFmb8ozPHhzMM0l7RxzoXFI3VGCZwWDbV6KsEwVnrhcoUPXuIVE5q"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 18px;"><b>Informasi Beasiswa Terbaru</b></p>
                    <p class="card-text">Memberikan informasi terbaru tentang beasiswa yang baru dibuka untuk pendaftaran,
                        persyaratan dan lainnya</p>
                </div>
            </div>
            <div class="card rounded img-fluid shadow" style="width: 18rem;">
                <img src="https://lh4.googleusercontent.com/proxy/N2zJv0z98cc76eJNclf0haIL__9qWD0PpcnWFmb8ozPHhzMM0l7RxzoXFI3VGCZwWDbV6KsEwVnrhcoUPXuIVE5q"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 18px;"><b>Cerita Sukses</b></p>
                    <p class="card-text">Berbagi cerita sukses dari mahasiswa yang berhasil mendapatkan beasiswa.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://lh4.googleusercontent.com/proxy/N2zJv0z98cc76eJNclf0haIL__9qWD0PpcnWFmb8ozPHhzMM0l7RxzoXFI3VGCZwWDbV6KsEwVnrhcoUPXuIVE5q"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 18px;"><b>Pengumuman Penerimaan Beasiswa</b></p>
                    <p class="card-text">Memberikan pengumuman tentang penerimaan beasiswa, termasuk nama-nama penerima dan
                        lainnya.</p>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="https://lh4.googleusercontent.com/proxy/N2zJv0z98cc76eJNclf0haIL__9qWD0PpcnWFmb8ozPHhzMM0l7RxzoXFI3VGCZwWDbV6KsEwVnrhcoUPXuIVE5q"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <p style="font-size: 18px;"><b>Tips dan Trik</b></p>
                    <p class="card-text">Menyediakan tips dan trik bagi mahasiswa untuk meningkatkan peluang mereka dalam
                        mendapatkan beasiswa.</p>
                </div>
            </div>
    </section>

    {{-- Alasan Mengambil Beasiswa --}}
    <section>
        <p class="text-dark pt-5 mt-5 ms-5 ps-5 animated-element" style="font-size: 30px;"><b>Mengapa Ingin Mendapatkan Beasiswa</b></p>
        <p class="text-secondary ms-5 ps-5 animated-element" style="font-size: 20px;">Beasiswa akan membantu dalam mencapai tujuan
            pendidikan dan menjadi peluang besar untuk meraih mimpi.</p>
        <div class="container pt-4 animated-element">
            <div class="row">
                <div class="col-6 mb-5"><img class="rounded-3 img-fluid shadow"
                        src="{{ asset('assets/diskusi.svg') }}" /></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div class="row gap-5 ms-3">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px"
                                        height="100px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m14.75 11.8l4-2.3l-4-2.3l-4 2.3zm0 3.05l2.75-1.6v-2.1l-2.75 1.6l-2.75-1.6v2.1zM20 20h-5q0-.5-.038-1t-.112-1H20V6H4v1.15q-.5-.075-1-.112T2 7V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20M2 20v-3q1.25 0 2.125.875T5 20zm5 0q0-2.075-1.463-3.537T2 15v-2q2.925 0 4.963 2.038T9 20zm4 0q0-1.875-.712-3.512t-1.926-2.85t-2.85-1.925T2 11V9q2.275 0 4.275.863t3.5 2.362t2.363 3.5T13 20z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">Mendapatkan beasiswa adalah suatu kesempatan yang diharapkan oleh
                                banyak individu karena memberikan akses ke pendidikan yang berkualitas tanpa membebani
                                secara finansial.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px"
                                        height="100px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M5 21q-1.275 0-1.812-1.137t.262-2.113L9 11V5H8q-.425 0-.712-.288T7 4t.288-.712T8 3h8q.425 0 .713.288T17 4t-.288.713T16 5h-1v6l5.55 6.75q.8.975.263 2.113T19 21zm2-3h10l-3.4-4h-3.2zm-2 1h14l-6-7.3V5h-2v6.7zm7-7" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">Beasiswa merupakan kesempatan untuk mengakses sumber daya
                                tambahan, seperti program pengembangan diri, seminar, atau magang, yang dapat memperkaya
                                pengalaman pendidikan.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px"
                                        height="100px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M14.75 15v.75q0 .325.213.538t.537.212t.538-.213t.212-.537V15H17q.425 0 .713-.288T18 14v-4q0-.425-.288-.712T17 9h-3q-.425 0-.712.288T13 10v4q0 .425.288.713T14 15zM7.5 13h2v1.25q0 .325.213.538t.537.212t.538-.213t.212-.537v-4.5q0-.325-.213-.537T10.25 9t-.537.213t-.213.537v1.75h-2V9.75q0-.325-.213-.537T6.75 9t-.537.213T6 9.75v4.5q0 .325.213.538T6.75 15t.538-.213t.212-.537zm7 .5v-3h2v3zM4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm0-2h16V6H4zm0 0V6z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">Mendapatkan beasiswa juga mendorong keberagaman dan inklusi dalam
                                pendidikan. Dengan memberikan kesempatan yang sama bagi semua individu untuk mengakses
                                pendidikan yang berkualitas.</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                <div class="rounded-3" style="background-color: #203239; width: 100px; height: 100px;">
                                    <svg class="text-light" xmlns="http://www.w3.org/2000/svg" width="100px"
                                        height="100px" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="m3 19l4.5-7L3 5h12q.5 0 .938.225t.712.625L21 12l-4.35 6.15q-.275.4-.712.625T15 19zm3.65-2H15l3.55-5L15 7H6.65l3.25 5zm3.25-5L6.65 7zl-3.25 5z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3">Dengan mendapatkan beasiswa akan membantu mereka untuk mencapai
                                potensi mereka yang penuh dalam membentuk masa depan yang lebih baik.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- Ajakan Mencari Beasiswa --}}
    <section class="container-fluid mt-5"
        style="background-image: url('/assets/animasi.svg'); width: 100%; height: 350px;">
        <div class="background-image animated-element">
            <div class="centered-text">
                <p class=" text-center text-light"
                    style="font-size: 30px; padding-top: 100px; font-family: Lato, sans-serif;"><b>Temukan peluang terbaik
                        untuk masa depan Anda!</b></p>
                <p class=" text-center fw-lighter text-light" style="font-size: 18px;">Jelajahi berbagai beasiswa yang
                    tersedia dan buat langkah pertama menuju pencapaian impian pendidikan Anda.</p>
            </div>
            <div class="text-center centered-button pt-2">
                <a href="menu" class="btn btn-outline-light">Mencari Beasiswamu</a>
            </div>
        </div>
    </section>
    @include('user-app.footer')
    <script>
    window.addEventListener("scroll", function() {
        var animatedElements = document.querySelectorAll(".animated-element");
        animatedElements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add("visible");
            }
        });
    });
    
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
        );
    }
    </script>
@endsection
