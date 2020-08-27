<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="author" content="colorlib.com">
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/search/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body><nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Cari Hadis</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Tentang">Tentang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Dokumentasi">Dokumentasi</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="s003">
  <form action="<?php echo base_url(); ?>GetData/filter" method="post">
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="ahmad">
      <label class="form-check-label" for="exampleCheck1">Ahmad</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="annasai">
      <label class="form-check-label" for="exampleCheck1">Annasai</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="bukhari">
      <label class="form-check-label" for="exampleCheck1">Bukhari</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="ibnu_majah">
      <label class="form-check-label" for="exampleCheck1">Ibnu Majah</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="malik">
      <label class="form-check-label" for="exampleCheck1">Malik</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="muslim">
      <label class="form-check-label" for="exampleCheck1">Muslim</label>
      <input type="checkbox" class="form-check-input" id="imam" name="imam[]" value="tirmizi">
      <label class="form-check-label" for="exampleCheck1">Tirmizi</label>
    </div>
    <br>
    <div class="inner-form">
          <!-- <div class="input-field first-wrap">
            <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="">Imam</option>
                <option>New Arrivals</option>
                <option>Sale</option>
                <option>Ladies</option>
                <option>Men</option>
                <option>Clothing</option>
                <option>Footwear</option>
                <option>Accessories</option>
              </select>
            </div>
          </div> -->

          <div class="input-field second-wrap">
            <input id="cari" name="cari" type="text" placeholder="Cari Kata Dalam Hadis" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
    <script src="<?php echo base_url(); ?>assets/search/js/extention/choices.js"></script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
  </html>
