@extends('user-app.app')

@section('content')
    <style>
        .about-section {
            padding: 50px 0;
        }

        .about-card {
            background-color: #FFFFFF;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .about-card:hover {
            transform: translateY(-10px);
        }

        .about-image {
            height: 200px;
            object-fit: cover;
        }
    </style>

    <section>
        <div class="container text-dark rounded-5 mt-4" style="background-color: #141E27; width: 87%; height: 600px;">
            <div class="row">
                <div class="col-6 mb-5"><img class="img-fluid" src="{{ asset('assets/about.svg') }}" alt="About Us Image" /></div>
                <div class="col d-md-flex align-items-md-end align-items-lg-center mb-5">
                    <div class="gap-5 ms-3 text-light">
                        <h1 style="font-size: 40px; font-family: 'Poetsen One', sans-serif;">About Us</h1>
                        <p>Beasiswa Finder adalah platform digital yang dirancang untuk membantu mahasiswa Indonesia menemukan peluang beasiswa yang sesuai dengan kebutuhan dan kualifikasi mereka. Website ini berfungsi sebagai portal informasi yang komprehensif, menyediakan daftar beasiswa dari berbagai sumber.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header class="about-header text-center pt-5 mt-5">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Mengenal lebih jauh tentang Beasiswa Finder</p>
        </div>
    </header>

    <section class="about-section pt-3">
        <div class="container">
            <div class="row">
                <article class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://www.eficode.com/hubfs/Team%20spirit.png#keepProtocol" class="card-img-top about-image" alt="Our Team">
                        <div class="card-body">
                            <h3 class="card-title">Tim Kami</h3>
                            <p class="card-text">Tim kami terdiri dari para profesional yang berdedikasi dan berpengalaman
                                dalam bidang pendidikan dan pengelolaan beasiswa.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://res.infoq.com/articles/who-is-on-the-team/en/headerimage/who-is-on-the-team-header-1612952290708.jpg" class="card-img-top about-image" alt="Our Values">
                        <div class="card-body">
                            <h3 class="card-title">Nilai-Nilai Kami</h3>
                            <p class="card-text">Kami menjunjung tinggi integritas, transparansi, dan komitmen untuk
                                memberikan yang terbaik dalam setiap layanan kami.</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 mb-4">
                    <div class="card about-card">
                        <img src="https://sites.duke.edu/lodtraininghub/files/2023/06/Effective-Communication-in-Healthcare_header-676x290.jpg" class="card-img-top about-image" alt="Contact Us">
                        <div class="card-body">
                            <h3 class="card-title">Hubungi Kami</h3>
                            <p class="card-text">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau
                                membutuhkan informasi lebih lanjut tentang layanan kami.</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    @include('user-app.footer')
@endsection
