<div class="container my-5">
    <div class="text-center">
        <h4 class="text-center">Blog</h4>
        <p>Apa Saja Kabar Hari Ini? Kami Akan Beri Tahu Anda</p>
    </div>

    <div class="row">
        @foreach($blog as $item)
            <div class="col-md-3 my-3">
                <div class="card shadow-sm">
                    <div class="wrapper-card-blog"></div>
                    <img src="/{{ $item->cover }}" class="img-card-blog" alt="">
                </div>
                <div class="p-1">
                    <a href="/blog/show/{{ $item->id }}"><h5>{{ $item->title }}</h5></a> <!-- Gunakan $item -->
                    {!! Illuminate\Support\Str::limit($item->body, 100) !!}
                    <a href="">Selengkapnya &RightArrow;</a>
                </div>
            </div>
        @endforeach

        <div class="text-center mt-3">
            <a href="" class="btn btn-success px-5">selengkapnya <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>

    <div class="bg-light my-5">
        <div class="container">
            <div class="text-dark text-center">
                <h5>Pelajari Tentang Kami</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores commodi pariatur blanditiis sequi quos, delectus quas porro quis aliquam expedita repudiandae, nisi animi dolore quam iusto maxime odit non.</p>
            </div>
        </div>
    </div>
</div>
