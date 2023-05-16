<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Hewan Langka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
      <h2 class="text-center mt-2">Edit Hewan Langka</h2> 
      <div class="container mt-3">
        <form action="{{ '/edit/'.$HewanLangka->id }}" method="POST">
          @csrf
          <div class="mb-3">
              <label for="nama_hewan" class="form-label">Nama Hewan Langka</label>
              <input type="text" class="form-control" id="nama_hewan" name="nama_hewan" value="{{ $HewanLangka->nama_hewan }}">

          </div>
          <div class="mb-3">
              <label for="keterangan" class="form-label">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" name="keterangan" value="{{ $HewanLangka->keterangan }}">
          </div>
          <a href="/" class="btn btn-danger">Kembali</a>
          <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

