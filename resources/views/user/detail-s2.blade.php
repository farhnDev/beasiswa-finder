@extends('user-app.app')

@section('content')
    <style>
        /* Icon Rating */
        .rating {
            display: flex;
            justify-content: start;
            flex-direction: row-reverse;
            gap: 0.3rem;
            --stroke: #666;
            --fill: #ffc73a;
        }

        .rating input {
            appearance: unset;
        }

        .rating label {
            cursor: pointer;
        }

        .rating svg {
            width: 2rem;
            height: 2rem;
            overflow: visible;
            fill: transparent;
            stroke: var(--stroke);
            stroke-linejoin: bevel;
            stroke-dasharray: 12;
            animation: idle 4s linear infinite;
            transition: stroke 0.2s, fill 0.5s;
        }

        @keyframes idle {
            from {
                stroke-dashoffset: 24;
            }
        }

        .rating label:hover svg {
            stroke: var(--fill);
        }

        .rating input:checked~label svg {
            transition: 0s;
            animation: idle 4s linear infinite, yippee 0.75s backwards;
            fill: var(--fill);
            stroke: var(--fill);
            stroke-opacity: 0;
            stroke-dasharray: 0;
            stroke-linejoin: miter;
            stroke-width: 8px;
        }

        @keyframes yippee {
            0% {
                transform: scale(1);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30% {
                transform: scale(0);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30.1% {
                stroke: var(--fill);
                stroke-dasharray: 0;
                stroke-linejoin: miter;
                stroke-width: 8px;
            }

            60% {
                transform: scale(1.2);
                fill: var(--fill);
            }
        }
    </style>

    <section class="pt-3">
        <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <header class="text-center">
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Detail Beasiswa S2</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Beasiswa S1 Glow & Lovely Bintang Beasiswa</h2>
            </header>
            <p>Hai Sobat Beasiswa.ID! Saat ini Glow & Lovely Bintang Beasiswa membuka kesempatan bagi Anda yang ingin
                melanjutkan pendidikan ke jenjang sarjana di sejumlah perguruan tinggi negeri (PTN) dalam negeri pada
                2024. Beasiswa S1 ini ditujukan bagi siswi kelas 12 atau lulusan SMA/MA/SMK dan sederajat di tanah air.
                Beasiswa ini spesial karena hanya ditujukan bagi kaum perempuan. Jadi, bila Anda adalah perempuan tamatan
                SMA/SMK atau MA atau siswi kelas 12, kesempatan ini sayang untuk dilewatkan.</p>
            <p>Glow & Lovely Bintang Beasiswa menawarkan bantuan biaya pendidikan tunai sebesar Rp 17.500.000 dengan rincian
                Tahun 1: Rp 10.000.000, Tahun 2: Rp 2.500.000, Tahun 3: Rp 2.500.000, dan Tahun 4: Rp 2.500.000.
                Beasiswa disalurkan kepada penerima setiap awal semester ganjil selama 4 tahun. Selain dukungan biaya
                pendidikan, kandidat penerima beasiswa juga memperoleh laptop serta pendampingan (capacity building) setiap
                tahunnya untuk 4 tahun perkuliahan. Materi pendampingan disesuaikan dengan kurikulum dari Hoshizora
                Foundation.</p>
            <p>Tahun ini, sebanyak 80 kandidat akan dipilih sebagai penerima beasiswa dari Glow & Lovely Bintang Beasiswa.
                Sasarannya adalah perempuan lulusan SMA/SMK/MA/sederajat yang memenuhi kriteria masuk PTN berakreditasi
                A atau B tahun 2024 serta memiliki gagasan untuk berkontribusi di masyarakat, berprestasi, dan memiliki
                motivasi tinggi namun memiliki keterbatasan secara finansial.</p>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Persyaratan</h2>
            </header>
            <ul>
                <li>Siswi kelas 12 atau lulusan SMA/SMK/MA/sederajat 3 tahun terakhir yang dapat mendaftar seleksi masuk PTN tahun 2024.</li>
                <li>Siswi mendaftarkan diri melalui salah satu jalur:
                    <ul>
                        <li>Seleksi Nasional Berdasarkan Prestasi (SNBP)/Seleksi Prestasi/sederajat.</li>
                        <li>Seleksi Nasional Berbasis Tes (SNBT)/sederajat.</li>
                    </ul>
                </li>
                <li>Memiliki potensi akademik dan non-akademik dibuktikan dengan fotokopi atau scan piagam prestasi lomba (jika ada).</li>
                <li>Memiliki rencana studi di PTN yang diinginkan dan gagasan untuk berkontribusi kepada masyarakat.</li>
                <li>Berkomitmen untuk menyelesaikan studi di universitas terpilih.</li>
            </ul>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Berkas Pendaftaran</h2>
            </header>
            <ul>
                <li>Pas foto terbaru ukuran 3X4</li>
                <li>Surat keterangan penghasilan dari kelurahan atau balai desa. (pilih salah satu dan harus ada nominalnya)</li>
                <li>Kartu Keluarga</li>
                <li>Scan raport semester 1 sampai 5 (ukuran max 10 mb, max 10 files)</li>
            </ul>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Mekanisme pendaftaran</h2>
            </header>
            <ol>
                <li>Sosialisasi online dilakukan mulai bulan Maret-April 2024 di seluruh Indonesia. Calon peserta mendaftarkan diri dengan submit data pada form di www.galbintangbeasiswa.com.</li>
                <li>Tim Hoshizora Foundation akan menyeleksi berkas pendaftar dan mengumumkan hasil seleksi berkas pada bulan Mei-Juni 2024.</li>
                <li>Calon peserta yang lolos seleksi berkas akan melanjutkan ke tahap seleksi interview secara online selama bulan Juni-Juli 2024.</li>
                <li>Peserta yang lolos seleksi interview akan melanjutkan ke tahap home-visit secara online selama bulan Juli-September 2024.</li>
            </ol>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Seleksi berkas</h2>
            </header>
            <section>
                <ul>
                    <li>Calon peserta beasiswa yang telah lulus tahap seleksi berkas akan mendapat undangan interview di waktu yang telah ditentukan.</li>
                    <li>Interview terhadap calon peserta beasiswa akan dilakukan tim Hoshizora Foundation menggunakan guideline yang telah ditentukan.</li>
                    <li>Interview dilakukan dengan media online seperti telepon atau video call.</li>
                </ul>
            </section>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Jadwal Beasiswa</h2>
            </header>
            <ul>
                <li>Pendaftaran: 22 Maret s/d 31 Mei 2024</li>
                <li>Seleksi Berkas: 1 Juni – 12 Juli 2024</li>
                <li>Seleksi Interview & Home Visit: 13 Juli s/d 6 September 2024</li>
                <li>Pengumuman penerima beasiswa: September 2024</li>
            </ul>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h2 style="font-size: 25px;">Kontak</h2>
            </header>
            <address>
                <p>[wa] 0821-3439-5655</p>
                <p>[e] galbeasiswa@hoshizora.org</p>
                <p>[w] <a href="https://www.kelasberbagicerah.com/id/beasiswa" target="_blank">https://www.kelasberbagicerah.com/id/beasiswa</a></p>
            </address>
            <hr class="mt-4">
        </article>

        <article class="container">
            <header>
                <h4>Berikan Rating Terbaikmu 🙂</h4>
            </header>
            <div class="rating">
                <input type="radio" id="star-1" name="star-radio" value="star-1">
                <label for="star-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-2" name="star-radio" value="star-1">
                <label for="star-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-3" name="star-radio" value="star-1">
                <label for="star-3">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-4" name="star-radio" value="star-1">
                <label for="star-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
                <input type="radio" id="star-5" name="star-radio" value="star-1">
                <label for="star-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path pathLength="360"
                            d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z">
                        </path>
                    </svg>
                </label>
            </div>
            <div class="mt-4">
                <h4>Berikan Komentar Anda 🙂</h4>
                <form id="commentForm">
                    <div class="form-group" style="width: 300px;">
                        <textarea class="form-control" id="studentComment" rows="3" placeholder="Write your comment here..." required></textarea>
                    </div>
                    <a href=""><button type="submit" class="btn btn-dark mt-3">Submit Comment</button></a>
                </form>
            </div>
        </article>
    </section>
    @include('user-app.footer')
@endsection
