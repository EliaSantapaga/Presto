<x-layout title="Modifica un articolo">

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Modifica un articolo
                </h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success mt-4 text-center rounded-pill">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="col-12 col-md-5 mb-5 align-items-center justify-content-center text-white article-form">
                <form method="POST" action="{{ route('article.update', compact('article')) }}"
                    enctype="multipart/form-data">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @csrf
                    @method('put')

                    <div class="mb-3">
                        <label for="exampleTitle" class="form-label">Nome del videogioco</label>
                        <input name="title" type="text" class="form-control" value="{{ $article->title }}"
                            id="exampleTitle">
                    </div>

                    <div class="mb-3">
                        <label for="authorName" class="form-label">Sviluppatore</label>
                        <input name="author" type="text" class="form-control" value="{{ $article->author }}"
                            id="authorName">
                    </div>

                    <div class="mb-3">
                        <label for="exampleCategories" class="form-label">Categorie</label>
                        <div>
                            @foreach ($categories as $category)
                                <input class="form-check-input mx-2" type="checkbox" name="categories[]"
                                    value="{{ $category->id }}" id="exampleCategories"
                                    @if (in_array($category->name, $article->getArrayCategories())) checked @endif>
                                {{ $category->name }}<br>
                            @endforeach
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleImg" class="form-label">Immagine:</label>
                        <img src="{{ Storage::url($article->img) }}" alt="" height="200"
                            class="mb-3 ms-3 rounded img-edit">
                        <input name="img" type="file" class="form-control" id="exampleImg">
                    </div>

                    <div class="mb-3">
                        <label for="exampleDescription" class="form-label">Descrizione</label>
                        <textarea name="description" type="number" class="form-control" id="exampleDescription" cols="30" rows="10"
                            placeholder="Scrivi la descrizione...">{{ $article->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleTag" class="form-label">Inserisci i tag</label>
                        <input name="tags" type="text" class="form-control" value="{{ $article->getTags() }}"
                            placeholder="Separa i tag con una virgola" id="exampleTag">
                    </div>

                    <div class="center-flex">
                        <button type="submit"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-4">Modifica
                            Articolo
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
