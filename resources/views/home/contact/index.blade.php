<div class="container">

    <div class="text-center my-5">
        <h4 class="">Kontak Kami</h4>
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

                        <button type="submit" class="btn btn-success mt-3">Kirim</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex">
                <i class="fas fa-phone fa-2x px-3"></i>
                <h3>(0262) 2248250</h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-envelope fa-2x px-3"></i>
                <h3>pdamgarut@tirtaintan.co.id</h3>
            </div>

            <div class="d-flex mt-3">
                <i class="fas fa-map-marker fa-2x px-3"></i>
                <h3>Jalan Cipanas Ruko Graha Praja Indah No.9A, Langensari, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat</h3>
            </div>
        </div>
    </div>
</div>
