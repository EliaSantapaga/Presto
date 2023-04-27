<table class="table table-striped bg-white bg-opacity-75 rounded-top text-center">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome Utente</th>
            <th scope="col">Ruolo Richiesto</th>
            <th scope="col">Accetta</th>
            <th scope="col">Rifiuta</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($userRequests as $user)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $user->name }}</td>
                @switch($user->role)
                    @case('admin')
                        <td>Amministratore</td>
                    @break

                    @case('revisor')
                        <td>Revisore</td>
                    @break

                    @case('writer')
                        <td>Autore</td>
                    @break

                    @default
                @endswitch
                <td>
                    <a href="{{ route('admin.choice', ['choice' => true, 'user' => $user]) }}"
                        class="text-success text-decoration-none">Accetta</a>
                </td>
                <td>
                    <a href="{{ route('admin.choice', ['choice' => 0, 'user' => $user]) }}"
                        class="text-danger text-decoration-none">Rifiuta</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
