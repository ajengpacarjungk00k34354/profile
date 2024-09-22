<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .wrapper-img-banner {
      max-width: 100%;
      max-height: 400px;
      overflow: hidden;
    }
    .img-banner {
      width: 100%;
      object-fit: cover;
    }
  </style>
</head>
<body>
  <!-- Carousel Section -->
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="wrapper-img-banner">
          <img src="/img/banner.jpg" class="img-banner" alt="Banner Image">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>Example headline.</h1>
              <p>Some representative placeholder content for the first slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="/login/">Sign up today</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- About Section -->
  <div class="container mt-5">
    <div class="text-center">
      <h4>Tentang Kami</h4>
      <p>Anda Tahu Kami? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row">
      <div class="col-md-6">
        @if ($about)
          <img src="{{ $about->cover }}" class="img-fluid" alt="About Image">
        @else
          <p>Tidak ada informasi tentang kami.</p>
        @endif
      </div>
      <div class="col-md-6">
        {{ $about->desc ?? 'Deskripsi tidak tersedia.' }}
      </div>
    </div>
  </div>

  <!-- Services Section -->
  <div class="container my-4">
    <div class="text-center">
      <h4>Services</h4>
      <p>Apa yang kami lakukan? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row">
      @foreach ($services as $item)
        <div class="col-md-3 my-3">
          <div class="text-center">
            <i class="{{ $item->icon }} fa-3x text-success"></i>
            <h5><b>{{ $item->title }}</b></h5>
            <p>{{ $item->desc }}</p>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center mt-3">
      <a href="" class="btn btn-success px-5">selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>

  <!-- Blog Section -->
  <div class="container my-2">
    <div class="text-center">
      <h4>Blog</h4>
      <p>Apa Saja Kabar Hari Ini? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row">
      @foreach($blog as $item)
        <div class="col-md-3">
          <div class="card shadow-sm">
            <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
          </div>
          <div class="p-1">
            <a href="" class="text-decoration-none"><h5>{{ $item->title }}</h5></a>
            <p>
              {!! Illuminate\Support\Str::limit($item->body, 100) !!}
            </p>
            <a href="/blog/show/{{ $item->id }}">Selengkapnya&RightArrow;</a>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-center mt-3">
      <a href="" class="btn btn-success px-5">selengkapnya <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>

  <div class="container my-2 mb-5">
    <div class="text-center">
      <h4>Hubungi Kami</h4>
      <p>Anda dapat bertanya langsung ke kami</p>
      <a href="" class="btn btn-success px-5" target="blank"><i class="fas fa-phone"></i>Hubungi Kami di Whatsapp</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
