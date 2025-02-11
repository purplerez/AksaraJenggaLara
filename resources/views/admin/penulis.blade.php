@extends("layout.appadmin")

@section("content")
        <div class="row">
            <div class="col-6">
            <h2>Input Penulis </h2>
                <form method="post" >
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Penulis</label>
                        <input type="text" class="form-control" name="nama" >
                    </div>

                    <div class="mb-3">
                        <label for="sinopsis">Deskripsi Penulis</label>
                        <textarea name="deskripsi" class="form-control" placeholder="Leave a comment here" id="" for="sinopsis"></textarea>
                    </div>


                    <div class="mb-3">
                        <input type="submit" value="Input Kategori" class="btn btn-primary" name="btnKategori">
                    </div>


                </form>
            </div>
        </div>

@endsection
