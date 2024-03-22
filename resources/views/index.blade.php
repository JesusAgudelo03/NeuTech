@extends('layouts.app')

@section('content')
<div class="container">

<div style="margin-bottom: 50px">
    <h1 style=" color:white">NeuTech</h1>
    <p style="color:white">Explora el universo de la tecnología informática con NeuTech. Encuentra componentes de última generación para potenciar tu experiencia digital. ¡Descubre nuestra amplia selección hoy mismo!</p>
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://dlcdnwebimgs.asus.com/gain/E2FBCE41-80E0-4EE5-9ADE-478B8DBC068E/fwebp" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dlcdnwebimgs.asus.com/gain/E06E359D-97C0-48B7-9864-8D399715839A" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://dlcdnwebimgs.asus.com/gain/CEFFC149-0C07-4C1E-B947-11568B23B620" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
    <div class="w-full bg-primary">
        <p class="text-primary">a</p>
    </div>


    <div style="margin-top: 8em; margin-bottom: 8em; display: flex; justify-content: center; align-items: center;">
    <h2 style="color: white;">Nuestros productos más TOP 🔥</h2>
</div>


    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://redragon.es/content/uploads/2023/07/K552RGB_PNGWEB_1.png" class="card-img-top"
        alt="Hollywood Sign on The Hill" />
      <div class="card-body">
        <h5 class="card-title">KUMARA K552</h5>
        <p class="card-text">
        El Kumara
        es un teclado mecánico TKL (sin pad numérico);
        compacto, pero ampliamente funcional. Y fuerte
        —muy fuerte—, gracias a que su estructura está
        reforzada con acero. Es virtualmente irrompible
        y tiene una durabilidad extraordinaria.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div style="width:400px" class="card">

    <img  style="width: 100%;height: 100%; object-fit: cover;" src="https://redragon.es/content/uploads/2022/02/1-Ruby-caracteristica-Panel-VA-de-alta-nitidez.jpg" class="card-img-top"
        alt="Palm Springs Road" />

      
      <div class="card-body">
        <h5 class="card-title">RUBY 144/165 HZ</h5>
        <p class="card-text">
        Con una frecuencia de actualización de 144Hz o 165Hz
        (según versión disponible) , el Ruby te otorga valiosos
        milisegundos de ventaja que sabrás exprimir al máximo
        en el fragor de la batalla. Los movimientos rápidos se
        ven fluidos y suaves gracias a la alta frecuencia de
        actualización de la imagen, lo que garantiza una experiencia
        competitiva mucho más satisfactoria.
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img style="object-fit: cover;"  src="https://redragon.es/content/uploads/2023/06/WHEELJACK-B-C.png" class="card-img-top"
        alt="Los Angeles Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">WHEELJACK GC606</h5>
        <p class="card-text">El Wheeljack es un gabinete gamer diseñado para albergar componentes de alto rendimiento, con mucho espacio, un óptimo manejo de cables y excelentes posibilidades de refrigeración.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img style="object-fit: cover;" src="https://redragon.es/content/uploads/2021/09/ZEUS-X-B.png" class="card-img-top"
        alt="Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">ZEUS X</h5>
        <p class="card-text">
        Potentes, hermosos, totales. Con retroiluminación RGB, un micrófono excepcional, construcción cómoda y robusta, y —lo más importante— una calidad de sonido arrolladora, los aclamados Zeus vuelven con más.
        </p>
      </div>
    </div>
  </div>
</div>
    
</div>
@endsection
