<x-layout title="Dashboard Revisore">

    <div class="container">
        <div class="row mt-3 mb-3 center-flex">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Revisor Dashboard
                </h1>
            </div>

            <div class="col-12 d-flex justify-content-center mt-5 mb-1">
                <h2 class="text-center text-white shadow-pink ff-orbitron fs-1" data-aos="fade-up" data-aos-delay="100"
                    data-aos-anchor-placement="center-bottom">Articoli da pubblicare
                </h2>
            </div>
            <div class="col-12 col-md-10 mb-5 align-items-center justify-content-center dashboard">
                <x-dashboard-table-revisor :articles="$articles" />
            </div>

            @if (\App\Models\Article::revisorArticlesCount() < 6)
                <div class="space-footer"></div>
            @endif
        </div>
    </div>

</x-layout>
