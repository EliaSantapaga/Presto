<x-layout title="Contattaci">

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Contattaci!
                </h1>
            </div>
        </div>
        <div class="row justify-content-center mt-5">

            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>

            <div class="col-12 col-md-5 mb-5 align-items-center justify-content-center text-white article-form">
                <form method="POST" action="{{ route('contacts.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="userName" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="userName">
                    </div>
                    <div class="mb-3">
                        <label for="userSurname" class="form-label">Cognome</label>
                        <input name="surname" type="text" class="form-control" id="userSurname">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="userEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="userTel" class="form-label">Numero di Telefono</label>
                        <input name="tel" type="number" class="form-control" id="userTel">
                    </div>
                    <div class="center-flex">
                        <button type="submit"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-4">Invia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
