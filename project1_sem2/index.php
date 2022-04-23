<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>KALKULATOR BMI</title>
  </head>
  <body>
   <div class="container d-flex justify-content-center mt-4">
       <div class="card shadow" style="width:18rem">
           <div class="caer-body">
                <form action="" method="get">
                    <div class="form-group">
                        <label for="">Tinggi Badan</label>
                        <input type="text" class="form-control" name="tb">
                    </div>
                    <div class="form-group">
                        <label for="">Berat Badan</label>
                        <input type="text" class="form-control" name="bb">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm-2">Hitung</button>
                </form>
           </div>
           <?php
                if(isset($_GET['hitung'])){
                    $tb = $_GET['tb'];
                    $bb = $_GET['bb'];
                    $hasil = $bb / ($tb * $tb);

                    if($hasil <= 18.5){
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan    : <b>'.$tb.'</b><br>
                                    Berat Badan     : <b>'.$bb.'</b><br>
                                    Hasil           : <b>'.$hasil.'</b><br>
                                    Keterangan      : <b> Kurus</b><br>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif($hasil <= 25){
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan    : <b>'.$tb.'</b><br>
                                    Berat Badan     : <b>'.$bb.'</b><br>
                                    Hasil           : <b>'.$hasil.'</b><br>
                                    Keterangan      : <b> Kurus</b><br>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }elseif($hasil <= 30){
                        echo'
                            <div class="card-footer">
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Tinggi Badan    : <b>'.$tb.'</b><br>
                                    Berat Badan     : <b>'.$bb.'</b><br>
                                    Hasil           : <b>'.$hasil.'</b><br>
                                    Keterangan      : <b> Gemuk</b><br>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        ';
                    }
                }

           ?>
       </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>