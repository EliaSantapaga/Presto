<x-layout title="Servizi">

    <!-- GAME CARD -------------------------------->

    <section class="container px-4 py-5" id="featured-3">

        <div class="row">

            <div class="col-12 d-flex justify-content-center text-center">

                <h2 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="300" data-aos-anchor-placement="center-bottom">Servizi per ogni console!</h2>

            </div>
        </div>

        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

            <div class="col-12 col-lg-4 cardContainer">
                <div class="feature game-card d-flex align-items-center justify-content-between flex-column"
                    data-aos="flip-left" data-aos-delay="100" data-aos-duration="1100">

                    <img src="/img/PlayStation Plus.png" alt="PlayStation Plus" class="img-fluid img-card">

                    <h3 class="text-white text-center px-4">Ecco il nuovo PlayStation®Plus</h3>

                    <p class="text-white text-center px-4">Libera il potere di PlayStation e scopri il tuo nuovo gioco
                        preferito con una nuova selezione di piani di abbonamento.</p>

                    <a target="_blank"
                        href="https://www.playstation.com/it-it/ps-plus/?emcid=pa-co-445764&gclid=Cj0KCQjwr4eYBhDrARIsANPywChaApCAlP8rNuTVhVlIf9HmA9VHdn6S9SFKNvwhaBRsZy1kOmjexNUaAhjdEALw_wcB&gclsrc=aw.ds">
                        <button class="ff-orbitron text-uppercase cardbutton playstationbutton my-4 mx-1">Vai al
                            sito</button>
                    </a>

                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="feature game-card d-flex align-items-center justify-content-between flex-column xbox-game-card"
                    data-aos="flip-left" data-aos-delay="200" data-aos-duration="1100">

                    <img src="/img/Xbox Game Pass.png" alt="Xbox Game Pass" class="img-fluid img-card">

                    <h3 class="text-white text-center px-4">Ecco il nuovo <br> Xbox Game Pass</h3>

                    <p class="text-white text-center px-4">Gioca ai nuovi titoli il giorno del lancio. In più, gioca con
                        gli amici a centinaia di titoli di grande qualità su console, PC o cloud. </p>

                    <a target="_blank" href="https://www.xbox.com/it-IT/xbox-game-pass">
                        <button class="ff-orbitron text-uppercase cardbutton xboxbutton my-4">Vai al sito</button>
                    </a>

                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="feature game-card switch-game-card d-flex align-items-center justify-content-between flex-column"
                    data-aos="flip-left" data-aos-delay="300" data-aos-duration="1100">

                    <img src="/img/Nintendo Switch Online.png" alt="Nintendo Switch Online" class="img-fluid img-card">

                    <h3 class="text-white text-center px-4">Ecco il nuovo <br> Nintendo Switch Online</h3>

                    <p class="text-white text-center px-4">Goditi la tua esperienza su Nintendo Switch con il gioco
                        online, il cloud, un catalogo di giochi classici e altro ancora!</p>

                    <a target="_blank"
                        href="https://www.nintendo.it/Nintendo-Switch-Online/Nintendo-Switch-Online-1183143.html">
                        <button class="ff-orbitron text-uppercase cardbutton switchbutton my-4">Vai al sito</button>
                    </a>

                </div>
            </div>
        </div>
    </section>



    <!-- GAME LIBRARY ------------------------------------>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 d-flex justify-content-center text-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Cerca il videogioco che fa per te!
                </h1>

            </div>
        </div>
    </div>


    <!-- ACCORDION --------------------------->

    <section class="container">
        <div class="row justify-content-center">
            {{-- <div class="col-12 col-lg-6 px-5 mt-4">

                <div class="accordion" id="accordionPresto" data-aos="fade-up" data-aos-delay="300"
                    data-aos-anchor-placement="center-bottom">


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Categoria
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionPresto">
                            <div class="accordion-body" id="categoriesWrapper">

                                <input class="form-check-input" type="radio" name="Categories" id="All">

                                <label class="form-check-label" for="All">
                                    Tutte le Categorie
                                </label>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Prezzo
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionPresto">
                            <div class="accordion-body d-flex align-items-center">

                                <input type="range" class="form-range mt-2" min="0" max=""
                                    value="70" step="5" id="priceInput">

                                <label for="priceInput" class="form-label text-center ms-5 fs-4 mt-2"
                                    id="priceValue">€70</label>

                            </div>
                        </div>
                    </div>


                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Parola chiave
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionPresto">

                            <div class="accordion-body">

                                <input id="wordInput" class="word-input" type="text"
                                    placeholder="Cerca il nome del tuo gioco...">

                            </div>

                        </div>
                    </div>
                </div>
            </div> --}}


            <!-- CARDS ------------------------------------->

            <div class="col-12 d-flex justify-content-around flex-wrap mt-5" id="cardWrapper" data-aos="fade-up"
                data-aos-delay="500">

                @foreach ($services as $service)
                    <div class="card d-flex justify-content-center text-center card-annunci my-3"
                        style="width: 18rem; height:345px;">

                        <img src="{{ $service['img'] }}" class="card-img-top card-img" alt="{{ $service['name'] }}">

                        <div class="card-body d-flex justify-content-between align-items-center flex-column">
                            <h5 class="card-title">{{ $service['name'] }}</h5>
                            <p class="card-text">{{ $service['category'] }}</p>

                            <a href="#"
                                class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard">Prezzo:
                                € {{ $service['price'] }}</a>

                            {{-- href= ${(mediaQuery.matches ? "./404-Phone.html" : "./404.html")} --}}

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div id="spaceWrapper"></div>


</x-layout>
