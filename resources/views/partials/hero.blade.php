
<!-- Carrusel de imágenes como fondo -->

    <div id="carouselExampleDark" class="carousel carousel-dark slide @yield('body-class')">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000"><img src="{{asset('./img/banner1.jpg')}}" class="d-block w-100" alt="">
                <div class="banner-text d-flex justify-content-left align-items-left carousel-caption d-none d-md-block">
                    <div class="text-center text-white ">
                        <h1>¡Conecta con el Futuro Digital!</h1>
                        <p>En DigitConnection, transformamos tus ideas en soluciones web y móviles innovadoras. Tu éxito es nuestra prioridad.</p>
                        <a href="{{route('contacto')}}" class="btn btn-primary">Comienza tu Proyecto Hoy</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000"><img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
            <div class="carousel-item"><img src="..." class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"></div>
            </div>
        </div><!--<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></button><button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></button>-->
    </div