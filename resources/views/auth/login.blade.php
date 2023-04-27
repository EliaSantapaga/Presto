<x-layout title="Login">

    <div class="container mb-5">
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Esegui il login
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

            <div class="col-12 col-md-5 align-items-center justify-content-center text-white">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">E-mail</label>
                        <input name="email" type="email" class="form-control" id="registerEmail">
                    </div>

                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="registerPassword">
                    </div>

                    <div class="d-flex align-items-center justify-content-around">
                        <button type="submit"
                            class="cardbutton btn btn-prezzo ff-orbitron d-flex align-items-center justify-content-center text-white linkCard mt-4">Login
                        </button>
                    </div>
                </form>

                <div class="col-12 align-items-center justify-content-center text-white text-center mt-4">
                    <p>Se non hai un account, <a href="{{ route('register') }}" class="text-white ff-orbitron">fai click
                            qui per registrarti.</a></p>
                </div>
            </div>
        </div>
    </div>

</x-layout>
