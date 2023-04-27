<x-layout title="Homepage">

    <!-- HEADER ----------------------------------->

    <header class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex align-items-center justify-content-center header text-center p-5 flex-column">

                <h2 class="ff-orbitron text-white text-uppercase glitch">
                    Press
                </h2>

                <h2 class="ff-orbitron text-white text-uppercase glitch glitch-start">
                    start!
                </h2>

                <h3 class="mt-5 ff-orbitron header-text text-white shadow-pink">Trova il tuo videogioco!</h3>

                <i class="fa-solid fa-angles-down my-4 mb-5 text-white neon arrow"></i>

            </div>
        </div>
    </header>


    <!-- GAME LIST -------------------------------->

    <section class="container-fluid game-list mt-5">
        <div class="row">
            <div class="col-12 p-0">

                <div class="swiper myGameList">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/NieR Automata.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Horizon Zero Dawn.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Ori and the Will of the Wisps.png" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Elden Ring.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Sekiro.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Stray.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Forza Horizon V.jpg" />
                            </a>
                        </div>

                        <div class="swiper-slide">
                            <a href="#">
                                <img alt="Game Cover" src="/img/Dead Cells.jpg" />
                            </a>
                        </div>

                    </div>
                </div>
    </section>


    <!-- TRAILER ---------------------------------->

    <section class="container-fluid trailer" data-aos="fade-up" data-aos-delay="200"
        data-aos-anchor-placement="top-bottom">

        <div class="row">

            <div class="col-12 col-lg-7 trailer-col d-flex align-items-end justify-content-center p-3">

                <div class="feature game-card trailer-card d-flex align-items-center justify-content-between flex-column"
                    data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top-bottom">

                    <div class="video-trailer">
                        <iframe
                            src="https://www.youtube.com/embed/uMR0kw09n2A?controls=0&amp;start=25&loop=1&autoplay=1&mute=1"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>

                    <div class="space-trailer"></div>

                    <h3 class="text-center px-2 ff-orbitron shadow-pink text-trailer">Oltre
                        <span class="ff-orbitron neon" id="games-number">0</span>
                        videogiochi <br> disponibili...
                    </h3>

                    <h3 class="text-center px-4 ff-orbitron shadow-pink  text-trailer">...e moltissimi altri in arrivo!
                    </h3>

                    <a href="{{ route('services') }}">
                        <button class="ff-orbitron text-uppercase cardbutton trailer-button my-4">
                            Scopri di più
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </section>


</x-layout>
