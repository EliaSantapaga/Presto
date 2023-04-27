<x-layout title="Registrati">

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Registrati
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

            <div class="col-12 col-md-5 mb-5 align-items-center justify-content-center text-white">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="exampleName" class="form-label">Nome Utente</label>
                        <input name="name" type="text" class="form-control" id="exampleName">
                    </div>

                    <div class="mb-3">
                        <label for="exampleEmail" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="exampleEmail">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword">
                    </div>

                    <div class="mb-3">
                        <label for="exampleConfPassword" class="form-label">Conferma Password</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="exampleConfPassword">
                    </div>

                    <div class="center-flex">
                        <button type="submit"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-4">Registrati
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>
