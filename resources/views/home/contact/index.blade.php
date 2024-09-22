<div class="container">

    <div class="text-center my-5">
        <h1 class="">Kontak Kami</h1>
        <p>Berikan Saran dan Masukan Untuk Kami</p>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="/contact/send" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="text" class="form-control" name="name" placeholder="Masukan nama anda" required>
                        </div>

                        <div class="form-group mt-4">
                            <label for="Pesan">Isi Pesan</label>
                            <textarea name="desc" cols="30" rows="10" class="form-control" placeholder="Masukan pesan anda" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-phone fa-1x px-3"></i>
                <p>(0262) 2248250</p>
            </div>

            <div class="d-flex mt-2">
                <i class="fas fa-envelope fa-1x px-3"></i>
                <p>pdamgarut@tirtaintan.co.id</p>
            </div>

            <div class="d-flex mt-2">
                <i class="fas fa-map-marker fa-1x px-3"></i>
                <p>Jalan Cipanas Ruko Graha Praja Indah No.9A, Langensari, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat</p>
            </div>
        </div>
    </div>
</div>
