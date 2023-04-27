<table class="table table-striped bg-white bg-opacity-75 rounded-top text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Tag</th>
            <th scope="col">Modifica</th>
            <th scope="col">Elimina</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tags as $tag)
            <tr>
                <th scope="row" class="pt-3">{{ $loop->iteration }}</th>
                <td class="pt-3">{{ $tag->name }}</td>
                <td>
                    <form method="POST" action="{{ route('admin.tags.update', compact('tag')) }}">
                        @method('put')
                        @csrf
                        <input type="text" class="rounded-pill text-center border-light" name="tag">
                        <button class="text-success btn">Modifica</button>
                    </form>
                </td>

                <td>
                    <form method="POST" action="{{ route('admin.tags.delete', compact('tag')) }}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-danger btn">Elimina</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
