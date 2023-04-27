<x-layout title="Lavora con noi">

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Lavora con noi
                </h1>

            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="col-12 col-md-5 mb-5 align-items-center justify-content-center text-white article-form">
                <form method="POST" action="{{ route('work.with.us.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleName" class="form-label">Nome Utente</label>
                        <input name="userName" type="text" class="@error('userName') is-invalid @enderror form-control" id="userName"
                            value="{{ Auth::user() ? Auth::user()->name : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleEmail" class="form-label">E-mail</label>
                        <input name="email" type="email" class="@error('email') is-invalid @enderror form-control" id="userEmail"
                            value="{{ Auth::user() ? Auth::user()->email : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="exampleEmail" class="form-label">Ruolo</label>
                        <select name="role" class="@error('role') is-invalid @enderror form-select">
                            <option value="">Scegli il ruolo</option>
                            <option value="writer">Autore</option>
                            <option value="revisor">Revisore</option>
                            <option value="admin">Amministratore</option>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="exampleMessage" class="form-label">Come mai vuoi lavorare con noi?</label>
                        <textarea name="message" type="number" class="@error('message') is-invalid @enderror form-control" id="exampleMessage" cols="30" rows="10"
                            placeholder="Scrivi il tuo messaggio...">{{ old('message') }}</textarea>
                    </div>

                    <div class="center-flex">
                        <button type="submit"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-4">Invia la richiesta
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
