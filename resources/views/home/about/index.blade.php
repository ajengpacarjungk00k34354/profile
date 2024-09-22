<div class="wrapper">
    <img src="/img/banner.jpg" class="img-hero" width="100%" alt="">
    <div class="text-hero">
        <h4><b>Tentang kami</b></h4>
    </div>
</div>

<div class="container py-3">
    <div class="row">
        <div class="col-md-4">
            @if ($about && $about->cover)
                <img src="{{ $about->cover }}" width="100%" alt="About Image">
            @else
                <img src="/img/default-image.jpg" width="100%" alt="Default Image">
            @endif
        </div>
        <div class="col-md-8">
            @if ($about)
                {!! $about->desc !!}
            @else
                <p>Tidak ada informasi tentang kami.</p>
            @endif
        </div> 
    </div>
</div>
