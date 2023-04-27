<x-layout title="Catalogo">

    <!-- HEADER ------------------------------------>

    <div class="container">
        @if (session('delete'))
            <div class="alert alert-danger mt-4 text-center rounded-pill">
                {{ session('delete') }}
            </div>
        @endif

        @if (session('message'))
            <div class="alert alert-success mt-4 text-center rounded-pill">
                {{ session('message') }}
            </div>
        @endif
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center text-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron mb-5" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Catalogo
                </h1>

            </div>

            @foreach ($articles as $article)
                <div class="card d-flex justify-content-center text-center card-annunci m-3 px-0 articles"
                    style="width: 18rem; height:400px;">

                    <img src="{{ Storage::url($article->img) }}" class="card-img" alt="{{ $article->title }}">

                    <div class="card-body d-flex justify-content-between align-items-center flex-column">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h6 class="card-text">{{ $article->author }}</h6>

                    <div>
                        @foreach ($article->categories as $category)
                            {{-- @if (!$loop->last)
                                <span class="card-text">{{ $category->name }}, </span>
                            @else --}}
                            <a href="{{ route('category.articles', ['category' => $category->id]) }}"
                                class="text-decoration-none text-dark">
                                <div class="card-text fs-7 category">[ {{ $category->name }} ]</div>
                            </a>
                            {{-- @endif --}}
                        @endforeach
                    </div>

                        <a href="{{ route('article.detail', compact('article')) }}"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-3">Start</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
