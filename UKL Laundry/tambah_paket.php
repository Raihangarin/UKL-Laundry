<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/litera/bootstrap.min.css" integrity="sha384-enpDwFISL6M3ZGZ50Tjo8m65q06uLVnyvkFO3rsoW0UC15ATBFz3QEhr3hmxpYsn" crossorigin="anonymous">
<style>
  p {text-align: center;}
</style>
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_tambah_paket.php" method="post">
        <p href="https://imgbb.com/"></p>
        <h3 align="center">Tambah Paket</h3>
        Jenis Paket :
        <select name="jenis_paket" class="form-control">
            <option></option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
        </select>
        Harga : 
        <input type="text" name="harga" value="" class="form-control">
        Deskripsi : 
        <textarea name="deskripsi" class="form-control" rows="4"></textarea>
        <br>
        <p><input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary"></p>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>