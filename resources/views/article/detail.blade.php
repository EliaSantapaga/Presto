<x-layout title='{{ $article->title }}'>

    <div class="container">
        @if (session('message'))
            <div class="alert alert-success mt-4 text-center rounded-pill">
                {{ session('message') }}
            </div>
        @endif
        <div class="row my-5">
            <div class="col-12 d-flex justify-content-center mb-5">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">{{ $article->title }}
                </h1>

            </div>

            <div class="col-12 col-lg-5 me-md-3 description">
                <div class="center-flex">
                    <img src="{{ Storage::url($article->img) }}" alt="{{ $article->title }}"
                        class="img-article mb-4 mb-md-none">
                    <a href="{{ route('user.articles', ['user' => $article->user->id]) }}"
                        class="d-flex justify-content-end text-decoration-none text-dark mb-3 text-center">
                        <h6 class="rounded-pill p-2 px-3 box-shadow-pink text-decoration-none mx-3 author">
                            
                            {{ $article->user->name }}</h6>
                    </a>
                </div>

                <div class="d-flex align-items-center justify-content-center mt-4">
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <td>
                            <a href="{{ route('revisor.choice', ['choice' => true, 'article' => $article]) }}"
                                class="bg-light-trans rounded-pill p-2 px-3 box-shadow-pink text-success text-decoration-none mx-3 button-choice">Accetta</a>
                        </td>
                        <td>
                            <a href="{{ route('revisor.choice', ['choice' => 0, 'article' => $article]) }}"
                                class="bg-light-trans rounded-pill p-2 px-3 box-shadow-pink text-danger text-decoration-none mx-3 button-choice">Rifiuta</a>
                        </td>
                    @endif
                </div>

                <div class="d-flex align-items-center justify-content-center my-4">
                    @if (Auth::user() && Auth::user()->is_writer)
                        <td>
                            <a href="{{ route('article.edit', compact('article')) }}"
                                class="bg-light-trans rounded-pill p-2 px-3 box-shadow-pink text-success text-decoration-none mx-3 button-choice">Modifica</a>
                        </td>
                        <td>
                            <form action="{{ route('article.delete', compact('article')) }}" method="post">
                                @csrf
                                @method('delete')
                                <button
                                    class="bg-light-trans rounded-pill p-2 px-3 box-shadow-pink text-danger text-decoration-none mx-3 button-choice border-0"
                                    type="submit">
                                    Elimina
                                </button>
                            </form>
                        </td>
                    @endif
                </div>
            </div>

            <div class="col-12 col-lg-6 px-2 article">
                <div class="bg-light-trans px-5 py-4">
                    <div class="d-flex justify-content-center">
                        <h4 class="mb-3">Sviluppatori: {{ $article->author }}</h4>
                    </div>
                    <p class="mb-4">{{ $article->description }}</p>

                    <div class="text-center">
                        @if (count($article->tags))
                            @foreach ($article->tags as $tag)
                                <p
                                    class="bg-light-trans rounded-pill p-1 px-2 box-shadow-pink-small fs-7 mx-2 d-md-inline mt-2">
                                    {{ $tag->name }}</p>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>
