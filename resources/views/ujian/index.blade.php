<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Ujian Web Service!</title>
  </head>


  <body>
      <div class="container"><br><br>
        @if (session('sukses'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('sukses')}}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
          <div class="row">
              <div class="col-6">
                  <h1>List Data</h1>
              </div>
              <div class="col-6">
                  <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" 
                        data-target="#exampleModal">
                    Tambah Data
                </button>
              </div>
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nama Matakuliah</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Jumlah Soal</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data_kuliah as $data)
                        <tr>
                            <th scope="row">{{$data -> id}}</th>
                            <td>{{$data -> nama_mk}}</td>
                            <td>{{$data -> dosen}}</td>
                            <td>{{$data -> jumlah_soal}}</td>
                            <td>{{$data -> keterangan}}</td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            
                <form action="/ujian/tambah" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                      <label for="nama_mk">Nama Matakuliah</label>
                      <input type="text" class="form-control" id="nama_mk" name="nama_mk">
                    </div>
                    <div class="form-group">
                      <label for="dosen">Dosen Pengampu</label>
                      <input type="text" class="form-control" id="dosen" name="dosen">
                    </div>
                    <div class="form-group">
                      <label for="jumlah_soal">Jumlah soal</label>
                      <input type="text" class="form-control" id="jumlah_soal" name="jumlah_soal">
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea class="form-control" id="keterangan" rows="3" name="keterangan"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </form>    
        </div>
        </div>
        </div>
    </div>

</body>
</html>