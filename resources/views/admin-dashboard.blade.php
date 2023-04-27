<x-layout title="Dashboard Amministratore">

    <div class="container">
        <div class="row mt-3 mb-3 center-flex">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Dashboard Amministratore
                </h1>
            </div>

            <div class="col-12 d-flex justify-content-center mt-5 mb-1">
                <h2 class="text-center text-white shadow-pink ff-orbitron fs-1" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="center-bottom">Richieste Utenti
                </h2>
            </div>
            <div class="col-12 col-md-10 mb-5 align-items-center justify-content-center dashboard">
                <x-dashboard-table :userRequests="$userRequests" />
            </div>

            <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                <h2 class="text-center text-white shadow-pink ff-orbitron fs-1" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="center-bottom">Gestione Tag
                </h2>
            </div>
            <div class="col-12 col-md-10">
                @if (session('messageUpdateTag'))
                    <div class="alert alert-success mt-2 text-center rounded-pill">
                        {{ session('messageUpdateTag') }}
                    </div>
                @endif

                @if (session('messageErrorTag'))
                    <div class="alert alert-warning mt-2 text-center rounded-pill">
                        {{ session('messageErrorTag') }}
                    </div>
                @endif

                @if (session('messageDeleteTag'))
                    <div class="alert alert-danger mt-2 text-center rounded-pill">
                        {{ session('messageDeleteTag') }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-10 mb-5 align-items-center justify-content-center dashboard">
                <x-dashboard-tags-table :tags="$tags" />
            </div>

            <div class="col-12 d-flex justify-content-center mt-3 mb-3">
                <h2 class="text-center text-white shadow-pink ff-orbitron fs-1" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="center-bottom">Gestione Categorie
                </h2>
            </div>
            <div class="col-12 col-md-10">
                @if (session('messageUpdateCategory'))
                    <div class="alert alert-success mt-2 text-center rounded-pill">
                        {{ session('messageUpdateCategory') }}
                    </div>
                @endif

                @if (session('messageErrorCategory'))
                    <div class="alert alert-warning mt-2 text-center rounded-pill">
                        {{ session('messageErrorCategory') }}
                    </div>
                @endif

                @if (session('messageDeleteCategory'))
                    <div class="alert alert-danger mt-2 text-center rounded-pill">
                        {{ session('messageDeleteCategory') }}
                    </div>
                @endif
            </div>
            <div class="col-12 col-md-10 mb-5 align-items-center justify-content-center dashboard">
                <x-dashboard-category-table :categories="$categories" />
            </div>
        </div>
    </div>

</x-layout>
