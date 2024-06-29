@extends('user-app.app')

@section('content')

<style>
    .article-link {
        text-decoration: none;
    }
</style>

<section class="pt-3">
    <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
        <h1 class="text-light text-center" style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Motivasi</h1>
    </div>
</section>

<section class="container">
    <article class="pt-5">
        <header>
            <h2 style="font-size: 25px;"><strong>Percaya Diri, Kunci Meraih Beasiswa ke Luar Negeri</strong></h2>
        </header>
        <p>“Jon, sebenarnya apa sih kunci meraih beasiswa?” tanya Tono. “Kuncinya ada pada diri masing-masing Ton, kayak kamu yang punya kunci atas kamarmu sendiri, begitu juga dengan aku,” jawab Jono. Itu tadi percakapan antara Tono dan Jono mengenai kunci untuk bisa mendapatkan beasiswa ke luar negeri, yang ternyata Jono menjawab ada pada diri kita sendiri. Dari ilustrasi jawaban […]</p>
        <div class="card-body">
            <a href="detail-motivasi" class="article-link">Read More >></a>
        </div>
        <hr class="mt-4" style="width: 1305px;">
    </article>

    <article>
        <header>
            <h2 style="font-size: 25px;"><strong>Tips Raih Beasiswa LPDP 2017/2018 di Luar Negeri</strong></h2>
        </header>
        <p>Ada banyak cara untuk melanjutkan kuliah keluar negeri, salah satunya adalah mendaftarkan diri melalui program Beasiswa Pendidikan Indonesia yang dikelola oleh LPDP. Beasiswa LPDP membuka kesempatan Anda untuk melanjutkan program magister dan doktor di dalam dan luar negeri. Berikut ini adalah wawancara eksklusif langsung dari penerima beasiswa LPDP yang akan menjelaskan tips raih beasiswa LPDP 2017, simak</p>
        <div class="card-body">
            <a href="#" class="article-link">Read More >></a>
        </div>
        <hr class="mt-4" style="width: 1305px;">
    </article>

    <article>
        <header>
            <h2 style="font-size: 25px;"><strong>Cerita Inspirasi: Siswi Madrasah Lolos 9 Beasiswa Universitas di Luar Negeri</strong></h2>
        </header>
        <p>Halo teman-teman pencari beasiswa di seluruh nusantara! Kali ini Beasiswa.ID akan membagikan pengalaman nyata dari teman kita Frisca Intan Luzia yang berhasil mendapatkan 9 tawaran beasiswa di universitas luar negeri, sekolah kedinasan serta berhasil lolos SBMPTN. Semoga cerita inspirasi dari Frisca bisa membuat kalian lebih semangat dan melakukan persiapan yang matang sebelum mengajukan aplikasi beasiswa.</p>
        <div class="card-body">
            <a href="#" class="article-link">Read More >></a>
        </div>
        <hr class="mt-4" style="width: 1305px;">
    </article>

    <article>
        <header>
            <h2 style="font-size: 25px;"><strong>Pengalaman Beasiswa LPDP dari Achmad Rofi Irsyad</strong></h2>
        </header>
        <p>Berbicara mengenai beasiswa pendidikan semua orang pasti sangat ingin mendapatkan beasiswa tersebut, LPDP salah satunya. Beasiswa LPDP merupakan beasiswa paling bergengsi yang di sediakan oleh pemerintah indonesia khusus anak indonesia yang memiliki jiwa kepemimpinan, berprestasi dan berjiwa sosial. Dengan Beasiswa Pendidikan Indonesia (BPI) oleh Lembaga Pengelola Dana Pendidikan (LPDP). Melanjutkan kuliah program master dan doktor</p>
        <div class="card-body">
            <a href="#" class="article-link">Read More >></a>
        </div>
        <hr class="mt-4" style="width: 1305px;">
    </article>
</section>

@include('user-app.footer')

@endsection
