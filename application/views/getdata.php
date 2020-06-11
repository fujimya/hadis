<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Pencarian Hadis</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><b>APLIKASI PENCARIAN HADIS</b></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

      </ul>
      <form class="form-inline my-2 my-lg-0" role="form" action="<?php echo base_url(); ?>GetData/filter" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" id="cari" name="cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
      <table  border="2" id="example1" class="table" width="100%">
        <thead class="thead-dark">
          <tr >
            <th>No</th>
            <!-- <th>Kategori</th> -->
            <th style="text-align: center;">Arab</th>
            <th style="text-align: center;">Terjemahan</th>
            <th>Perawi</th>
          </tr>
        </thead>
        <tbody style="text-align: justify;">
          <!-- nampilin data -->
          <?php $no = $this->uri->segment('3') + 1; foreach ($hadis as $ahm) {?>
            <tr>
              <td><?php echo $no; ?></td>
             <!--  <td><?php echo $ahm->Kategori; ?></td> -->
              <td ><?php echo $ahm->Isi_Arab; ?></td>
              <td><?php echo $ahm->Isi_Indonesia; ?></td>
              <td><?php echo $ahm->Perawi; ?></td>
            </tr>
          <?php $no++; }?>
        </tbody>
        <tfoot>
          <tr>
            <th>No</th>
            <!-- <th>Kategori</th> -->
            <th>Arab</th>
            <th>Terjemahan</th>
            <th>Perawi</th>
          </tr>
        </tfoot>
      </table>
      <nav aria-label="Page navigation example" style="width: 100%; text-align: center;">
        <?php echo $this->pagination->create_links(); ?>
      </nav>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>