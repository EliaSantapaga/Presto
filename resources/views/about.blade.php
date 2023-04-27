<x-layout title="Chi siamo">

    <!-- HEADER ------------------------------------>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 d-flex justify-content-center text-center">

                <h1 class="pb-2 border-bottom text-center text-white shadow-pink ff-orbitron" data-aos="fade-up"
                    data-aos-delay="100" data-aos-anchor-placement="center-bottom">Chi siamo
                </h1>

            </div>

            @foreach ($members as $member)
                <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center mt-5" data-aos="fade-up"
                    data-aos-delay="200" data-aos-anchor-placement="top-bottom">

                    <div class="feature profile-card d-flex align-items-center justify-content-between flex-column"
                        data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top-bottom">

                        <img src="{{ $member['img'] }}" alt="{{ $member['role'] }}" class="profile-p2">

                        <div class="space-trailer"></div>

                        <h3 class="text-center px-2 ff-orbitron shadow-pink text-trailer">{{ $member['name'] }}
                            {{ $member['surname'] }}
                        </h3>

                        <h5 class="text-center px-2 ff-orbitron shadow-pink fs-5 mb-2">{{ $member['role'] }}
                        </h5>

                        <p class="text-center px-4 ff-orbitron text-trailer fs-5 mt-4">Lorem ipsum, dolor sit amet
                            consectetur adipisicing elit. Vel odit ut commodi repellendus dolorem cum ex voluptates nisi
                            expedita perferendis. Sequi ipsum culpa molestiae doloribus error impedit fuga amet
                            similique!
                        </p>

                        <div class="menu-slider mt-4 mb-5 mb-md-4">
                            <a href="https://www.facebook.com" class="item" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="https://www.instagram.com" class="item" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="https://twitter.com" class="item" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="https://github.com" class="item" target="_blank">
                                <i class="fa fa-github"></i>
                            </a>
                            <a href="https://discord.com" class="item" target="_blank">
                                <i class="fa-brands fa-discord"></i>
                            </a>
                            <div class="slider"></div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
