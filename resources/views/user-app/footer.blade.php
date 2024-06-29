<style>

    /* Tampilan Icon Sosmed */
    .Btn {
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        background-color: transparent;
        position: relative;
        /* overflow: hidden; */
        border-radius: 7px;
        cursor: pointer;
        transition: all .3s;
    }
    .svgContainer {
        width: 65%;
        height: 65%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
        backdrop-filter: blur(4px);
        letter-spacing: 0.8px;
        border-radius: 10px;
        transition: all .3s;
    }
    .BG {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        background: #141E27;
        z-index: -1;
        border-radius: 9px;
        pointer-events: none;
        transition: all .3s;
    }
    .Btn:hover .BG {
        transform: rotate(35deg);
        transform-origin: bottom;
    }
    .Btn:hover .svgContainer {
        background-color: rgba(156, 156, 156, 0.466);
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
</style>

<footer class="footer text-dark mt-5 animated-element">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-2">
                <img src="/assets/logoo.png" class="img-fluid" style="width: 250px; height: auto;" alt="">
            </div>
            <div class="col-md-3">
                <h5 class="pt-5"><b>BeasiswaFinder</b></h5>
                <p class="text-secondary">BeasiswaFinder adalah sebuah platform web yang dirancang untuk membantu mahasiswa dalam menemukan informasi tentang berbagai jenis beasiswa yang tersedia.</p>
                <ul class="list-inline social-icons d-flex justify-content-start gap-4" style="font-size: 35px;">
                    <a href=""><button class="Btn">
                        <span class="svgContainer">
                            <svg fill="white" class="svgIcon" viewBox="0 0 448 512" height="1.5em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                            </svg>
                        </span>
                    <span class="BG"></span>
                    </button></a>
                    <a href=""><button class="Btn">
                        <span class="svgContainer">
                            <svg fill="white" class="svgIcon" viewBox="0 0 320 512" height="1.5em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M279.14 288l14.22-92.66h-88.91V117.15c0-25.35 12.42-50.06 52.24-50.06H295V6.26S261.11 0 225.36 0C141.09 0 89.5 54.29 89.5 153.31V195.3H0v92.66h89.5V512h107.84V288z"></path>
                            </svg>
                        </span>
                        <span class="BG"></span>
                    </button></a>
                    <a href=""><button class="Btn">
                        <span class="svgContainer">
                            <svg fill="white" class="svgIcon" viewBox="0 0 24 24" height="1.5em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 4v16h24V4H0zm22 2v.511l-10 6.99-10-6.99V6h20zM2 18v-9.233l9.505 6.642a.997.997 0 0 0 1.02 0L22 8.767V18H2z"></path>
                            </svg>                                                       
                        </span>
                        <span class="BG"></span>
                    </button></a>
                </ul>
            </div>
            <div class="col-md-2">
                <h5 class="pt-5"><b>Kategori Beasiswa</b></h5>
                <div class="list-unstyled pt-2">
                    <p><a href="menu" class="text-decoration-none text-secondary">Beasiswa S1</a></p>
                    <p><a href="menu" class="text-decoration-none text-secondary">Beasiswa S2</a></p>
                    <p><a href="menu" class="text-decoration-none text-secondary">Beasiswa S3</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <h5 class="pt-5"><b>Trending Beasiswa</b></h5>
                <div class="list-unstyled pt-2">
                    <p><a href="#" class="text-decoration-none text-secondary">Beasiswa Uggulan</a></p>
                    <p><a href="#" class="text-decoration-none text-secondary">Beasiswa di Indonesia</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <h5 class="pt-5"><b>Tentang Kami</b></h5>
                <div class="list-unstyled pt-2">
                    <p><a href="about" class="text-decoration-none text-secondary">Profil Kami</a></p>
                    <p><a href="about" class="text-decoration-none text-secondary">Hubungi Kami</a></p>
                    <p><a href="#" class="text-decoration-none text-secondary">Syarat & Ketentuan</a></p>
                    <p><a href="#" class="text-decoration-none text-secondary">Kebijakan Privasi</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="container-fluid mt-5" style="background-color: #141E27; width: 100%; height: 80px;">
    <div class="container ps-5">
        <div class="d-flex justify-content-beetween pt-4">
            <p class="text-light" style="margin-top: 4px;">Copyright © 2024. BeasiswaFinder. All rights reserved.</p>
        </div>
    </div>
</footer>

<script>
    window.addEventListener("scroll", function() {
        var animatedElements = document.querySelectorAll(".animated-element");
        animatedElements.forEach(function(element) {
            if (isElementInViewport(element)) {
                element.classList.add("visible");
            }
        });

        const form = document.querySelector("form");
        form.addEventListener("submit", function (e) {
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
