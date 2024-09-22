<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carousel Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
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
              <h1 class="dark" style="color: #333;">Selamat datang di Website PDAM</h1>
              <p style="color: #777;">Pengelola sistem air bersih dilaksanakan oleh Seksi Air Minum yang berada dibawah<br>Dinas Pekerjaan Umum Kabupaten Daerah Tingkat II Kabupaten Garut.</p>
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

  <div class="container px-4 py-5" id="featured-3">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">
      
        <h4>Pelayanan Yang Memuaskan</h4>
        <p>Meningkatkan kepuasan pelanggan dan memperluas jangkauan layanan PDAM​</p>
        <a class="btn btn-primary btn-small" href="#">Selengkapnya</a>
      </div>
      <div class="feature col">
        <h4>Karyawan Berdaya Sejahtera</h4>
        <p>konsep yang berfokus pada kesejahteraan karyawan dalam berbagai aspek, termasuk fisik, mental, emosional, dan profesional.</p>
        <a class="btn btn-primary btn-small" href="#">Selengkapnya</a>
      </div>
      <div class="feature col">
        <h4 class="">Kontribusi PAD Kab.Garut</h4>
        <p>Optimalisasi sektor lain seperti pajak daerah dan retribusi, yang menjadi fokus pemerintah Garut untuk memperkuat keuangan daerah selama beberapa tahun terakhir</p>
        <a class="btn btn-primary btn-small" href="#">Selengkapnya</a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="container mt-5">
    <div class="text-center">
      <h2>Tentang Kami</h2>
      <p>Anda Tahu Kami? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row g-4 py-5">
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
      <h2>Services</h2>
      <p>Apa yang kami lakukan? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row g-4 py-5">
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
  </div>

  <!-- Blog Section -->
  <div class="container my-2">
    <div class="text-center">
      <h2>Blog</h2>
      <p>Apa Saja Kabar Hari Ini? Kami Akan Beri Tahu Anda</p>
    </div>
    <div class="row g-4 py-5">
    @foreach($blog as $item)
      <div class="col-md-3">
    
       <div class="card shadow-sm" style="width: 18rem;">
          <img src="/{{ $item->cover }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{!! Illuminate\Support\Str::limit($item->body, 100) !!}</p>
              <a href="/blog/show/{{ $item->id }}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
      
      </div>
      @endforeach  
    </div>
  </div>

  <div class="container my-5 mb-5">
    <div class="row g-4 py-5 text-center">
      
    <div class="text-center">
      <h4>Hubungi Kami</h4>
      <p>Anda dapat bertanya langsung ke kami</p>
      <a href="" class="btn btn-primary px-5" target="blank"><i class="fas fa-phone"></i> Hubungi Kami di Whatsapp</a>
    </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
