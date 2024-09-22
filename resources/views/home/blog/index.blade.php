<div class="container my-5">
    <div class="text-center">
        <h1 class="text-center">Blog</h1>
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

    <div class="bg-light my-5">
        <div class="container">
            <div class="text-dark text-center">
                <h5>Pelajari Tentang Kami</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat dolores commodi pariatur blanditiis sequi quos, delectus quas porro quis aliquam expedita repudiandae, nisi animi dolore quam iusto maxime odit non.</p>
            </div>
        </div>
    </div>
</div>
