@extends('user-app.app')

@section('content')
    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-15px);
        }

        .bookmark-icon {
            width: 30px;
            height: 30px;
            fill: #e8eaed;
            stroke: black;
            transition: fill 0.3s, stroke 0.3s;
            filter: drop-shadow(2px 2px 2px rgba(0, 0, 0, 0.4));
        }

        .bookmark-icon:hover {
            fill: black;
        }

        .bookmark-icon.saved {
            fill: black;
            stroke: black;
        }
    </style>

    <section class="pt-3">
        <div class="container-fluid" style="background-image: url('/assets/animasi.svg'); width: 100%; height: 250px;">
            <p class="text-light text-center"
                style="padding-top: 80px; font-size: 50px; font-family: Poetsen One, sans-serif;">Dashboard</p>
        </div>
    </section>

    <section class="container d-flex justify-content-center pt-5 mt-3">
        <div class="row gap-5">
            @foreach ($beasiswas as $beasiswa)
                <article class="card shadow" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $beasiswa->image) }}" class="card-img-top" alt="{{ $beasiswa->title }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h2 class="card-title">{{ $beasiswa->title }}</h2>
                            <a href="{{ route('saveBookmark', ['beasiswa' => ':beasiswaId']) }}"
                                onclick="handleBookmarkClick(event, {{ $beasiswa->id }})">
                                <!-- SVG Bookmark Icon -->
                                <svg xmlns="http://www.w3.org/2000/svg"  class="bookmark-icon {{ $beasiswa->bookmark ? 'saved' : '' }}" id="bookmark-icon-{{ $beasiswa->id }}" height="30px" viewBox="0 -960 960 960"
                                    width="24px" fill="#e8eaed">
                                    <path
                                        d="m480-240-168 72q-40 17-76-6.5T200-241v-519q0-33 23.5-56.5T280-840h400q33 0 56.5 23.5T760-760v519q0 43-36 66.5t-76 6.5l-168-72Z" />
                                </svg> </a>
                        </div>
                        <p class="card-text">{{ $beasiswa->description_short }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fas fa-clock"></i><span
                                class="ps-1">{{ \Carbon\Carbon::parse($beasiswa->waktu)->format('d-m-Y') }}</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-map-marker-alt"></i><span class="ps-2"> {{ $beasiswa->tempat }}</span>
                        </li>
                        <li class="list-group-item">
                            <i class="fas fa-users"></i><span class="ps-1"> {{ $beasiswa->kuota }}</span>
                        </li>
                    </ul>
                    <div class="card-body text-center">
                        <a href="{{ route('detail', ['id' => $beasiswa->id]) }}" class="card-link"
                            style="text-decoration: none;">Read More >></a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    @include('user-app.footer')

    <script>
        function handleBookmarkClick(event, beasiswaId) {
            event.preventDefault();
            const bookmarkIcon = document.getElementById('bookmark-icon-' + beasiswaId);
            bookmarkIcon.classList.toggle('saved');

            // Send Ajax request to toggle bookmark status
            fetch(`{{ route('saveBookmark', ['beasiswa' => ':beasiswaId']) }}`.replace(':beasiswaId', beasiswaId), {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data); // Optional: handle response if needed
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>
@endsection
