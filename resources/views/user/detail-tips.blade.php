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
                <h1 class="text-light" style="padding-top: 80px; font-family: Poetsen One, sans-serif;">Tips Beasiswa</h1>
            </header>
        </div>
    </section>

    <section>
        <article class="container">
            <header>
                <h2 class="pt-5" style="font-size: 25px;">Beasiswa S1 Glow & Lovely Bintang Beasiswa</h2>
            </header>
            <p>Ada banyak cara untuk melanjutkan kuliah keluar negeri, salah satunya adalah mendaftarkan diri melalui program Beasiswa Pendidikan Indonesia yang dikelola oleh LPDP. Beasiswa LPDP membuka kesempatan Anda untuk melanjutkan program magister dan doktor di dalam dan luar negeri. Berikut ini adalah wawancara eksklusif langsung dari penerima beasiswa LPDP yang akan menjelaskan tips raih beasiswa LPDP 2017</p>
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
