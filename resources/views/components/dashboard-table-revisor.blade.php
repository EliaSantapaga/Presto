<table class="table table-striped bg-white bg-opacity-75 rounded-top text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Categorie</th>
            <th scope="col">Sviluppatore</th>
            <th scope="col">Articolo</th>
            <th scope="col">Accetta</th>
            <th scope="col">Rifiuta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $article->title }}</td>
                <td>
                    @foreach ($article->categories as $category)
                        @if ($loop->last)
                            {{ $category->name }}
                        @else
                            {{ $category->name }} -
                        @endif
                    @endforeach
                </td>
                <td>{{ $article->author }}</td>

                <td>
                    <a href="{{ route('revisor.article.detail', compact('article')) }}"
                        class="text-primary text-decoration-none">Dettaglio</a>
                </td>
                <td>
                    <a href="{{ route('revisor.choice', ['choice' => true, 'article' => $article]) }}"
                        class="text-success text-decoration-none">Accetta</a>
                </td>
                <td>
                    <a href="{{ route('revisor.choice', ['choice' => 0, 'article' => $article]) }}"
                        class="text-danger text-decoration-none">Rifiuta</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
