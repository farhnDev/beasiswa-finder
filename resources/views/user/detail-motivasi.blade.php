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
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Motivasi Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Beasiswa S1 Glow & Lovely Bintang Beasiswa</h2>
            </header>
            <p>“Jon, sebenarnya apa sih kunci meraih beasiswa?” tanya Tono.
                “Kuncinya ada pada diri masing-masing Ton, kayak kamu yang punya kunci atas kamarmu sendiri, begitu juga dengan aku,” jawab Jono.</p>
            <p>Itu tadi percakapan antara Tono dan Jono mengenai kunci untuk bisa mendapatkan beasiswa ke luar negeri, yang ternyata Jono menjawab ada pada diri kita sendiri. Dari ilustrasi jawaban Jono, maka dapat dijabarkan secara rinci beserta contohnya berikut ini:</p>
            <p>Terkadang saat kita melihat si kawan peraih beasiswa memposting kegiatan foto-fotonya yang di luar negeri melalui timeline Facebook, Instagram dan beragam sosial media seakan jiwa ini terusik. Antara rasa iri dan penyemangat untuk segera mendaftar beasiswa keluar negeri. Padahal tentu tak ada jalan mudah untuk menggapai sebuah cita-cita, terutama meraih beasiswa. Juga tak sulit bagi mereka yang sudah tahu jalan untuk meraih beasiswa. Namun adakah yang membuat kita, terutama yang baru pertama kali mencoba mendaftar beasiswa, bisa meraihnya dengan mudah?</p>
            <p>Saya menyebutnya percaya diri sebagai awal dari semua langkah kita bila ingin meraih beasiswa. Mengapa? Bila kita dari awal sudah tak ada rasa percaya diri, buat apa kita jauh-jauh memikirkan hiruk pikuk dan langkah demi langkah proses seleksi yang masih jauh rasanya. Meskipun kadang tak dipungkiri kita lemah di beberapa persyaratan, misalkan Bahasa Inggris dan bahasa penunjuang lainnya, tergantung negara mana yang mau dituju. Wajar bila kita kadang kurang percaya diri, namun bukan berarti kamu tak mau belajar dari hal-hal yang dianggap kamu anggap kurang. Maka ada beberapa langkah yang perlu kamu ambil agar percaya diri itu tumbuh.</p>
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
        </article>
    </section>
    @include('user-app.footer')
@endsection
