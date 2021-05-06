<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="halaman_utama.css">

    <!-- https://fonts.google.com/specimen/Viga?query=viga&sidebar.open=true&selection.family=Viga -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

    <title>Local Side</title>
  </head>
  <style>
  .grid-container {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    gap: 0px 0px;
    grid-template-areas:
        "gambar_baju gambar_baju deskripsi deskripsi deskripsi deskripsi"
        "gambar_baju gambar_baju deskripsi deskripsi deskripsi deskripsi"
        "gambar_baju gambar_baju deskripsi deskripsi deskripsi deskripsi"
        ". . deskripsi deskripsi deskripsi deskripsi";
    }
    .gambar_baju { grid-area: gambar_baju; padding-left:10%;}
    .deskripsi { grid-area: deskripsi; padding-left:10%; }
    img {
    max-width: 100%;
    height: auto;
    }
  </style>
  <body style="background-color: white (105, 128, 148);">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="bg-navbar">
      <div class="container-fluid">
        <a class="navbar-brand px-4 " href="#"> Local Side</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="#">
            <!-- Bootstrap icons dari link :https://icons.getbootstrap.com/icons/house-fill/ -->
            &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                <path fill-rdive="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
              </svg> Home</a>
          
            <a class="nav-item nav-link" href="catalog.php">
                <!-- Bootstrap icons dari link :https://icons.getbootstrap.com/icons/shop/ -->
                &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-shop" viewBox="0 0 16 16">
                    <path d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                  </svg> Catalog</a>
        
            <a class="nav-item nav-link active" href="payment.php">
                <!-- Bootstrap icons dari link :https://icons.getbootstrap.com/icons/credit-card-2-back-fill/ -->
                &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-credit-card-2-back-fill" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
                </svg> Payment</a>
          
          
            <a class="nav-item nav-link" href="contact.php">
                <!--Bootstrap icons dari link : https://icons.getbootstrap.com/icons/telephone-fill/ -->
                &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> Contact Us</a>
        
                <a class="nav-item nav-link" href="login.php">
                    <!-- Bootstrap icons dari link :https://icons.getbootstrap.com/icons/door-open-fill/ -->
                    &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
                        <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
                    </svg> LOGOUT
                </a>
             
            </div>
          </ul>
        </div>
      </div>
    </nav>
    <div>
        <h1 style="margin-top: 10%; text-align:center;">PAYMENT</h1>


    <?php 
        include 'koneksi.php';
        if ($c->connect_errno) {
            echo "Failed to connect to MySQL: " . $c->connect_error;
        }
        $idItem = 0;
        if (isset($_POST['detail_id'])) {
            $idItem = $_POST['detail_id'];
            echo $idItem;
        }
        
        $res = $c->query("SELECT deskripsi, id_barang, gambar, nama_barang, harga, format(harga, 0)
         as harga_f, ifnull(diskon, 0) diskon From barang where id_barang=".$idItem) 
            or die($mysqli->error);
            $row = $res->fetch_assoc();
            $gambar = $row['gambar'];
    ?>
    </div>
        <div class="grid-container">
        <div class="gambar_baju">
            <?php
            echo "<img src='gambar/".$gambar."'>";
            ?>
        </div>
        <div class="deskripsi">
        <?php
            echo "<p><b>".$row['nama_barang']."</b></p>";
            $hargaFinal = $row['harga'];
            if($row['diskon']>0){
                echo "<p><del>".$row['harga_f']."</del> -  DISC".$row['diskon']."%</p>";
                $hargaFinal = $row['harga']*$row['diskon']/100;
            }
            
            echo "<p style='text-color:red;'><b> IDR ".$hargaFinal."</b></p>";
            echo "<div sty>";

            echo "</div>";
            ?>
            <div style="background:#ff8474;">
            <p>
            <?= $row['deskripsi'];?>
            </p>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div style="background: #ffc996; padding:3%;">
                    <p ><b>Form Pembelian</b></p>
                    <label for="kota">Pilih Kota Terdekat:</label>
                    <select name="kota" id="kota">
                        <option value="Surabaya">Surabaya</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Batam">Batam</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bandung">Bali</option>
                        <option value="Bandung">Yogyakarta</option>
                        <option value="Bandung">Balige</option>
                        <option value="Bandung">Medan</option>
                        <option value="Bandung">Surabaya</option>
                    </select>
                    <br>
                    <label for="size">Pilih Ukuran:</label>
                    <select name="size" id="size">
                        <option value="XL">XXL</option>
                        <option value="XL">XL</option>
                        <option value="L">L</option>
                        <option value="M">M</option>
                        <option value="S">S</option>
                    </select>
                    <br><br>
                    <label for="">Jumlah</label><br>
                    <input type="number" value="1" max-value="40"><br>

                    <label for="">Nama:</label><br>
                    <input type="text" id="" cols="30" placeholder="nama penerima"><br>
                    <label for="">Alamat Lengkap:</label><br>
                    <textarea name="alamat" id="alamat" cols="30" rows="3"></textarea><br>
                    
                    <a href="" name="submit" id="deskripsi" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal1">Cek Pembayaran</a>

                </div>
                
            </form>
            <?php 

                if (isset($_POST['submit'])) {
                    echo "hailo";
                }
            ?>
        </div>
    </div>

      <footer id="footer" class="text-white" style="background: url(gambar/gambar.png); font-size: 17px;">
        <div class="container">
            <div class="row pt-3">
                <div class="col text-center">
                    <p>Copyright &copy; By Local Side 2021</p>
                </div>
            </div>
        </div>
    </footer>


  </body>
</html>

<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?= $data['nama']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php

        $ongkir = 19000; 
        $harga = $hargaFinal + $ongkir;
        $address = "test";
        $pembeli = "elisa01";

        echo $address;

        // $res = $c->query("INSERT INTO ORDER values(".$idItem.",1,".$hargaFinal.",".$ongkir.",'".$address."')") 
        //    or die($mysqli->error);
           $sql = "INSERT INTO `order` values ( ? , ? , ? , ? , ? )";
           if ($stmt = $c->prepare($sql)){

           $stmt->bind_param('isiis', $idItem, $pembeli, $harga, $ongkir, $address);
           $stmt->execute();
          }else{
            var_dump($c->error);
          }
           echo $c->error_list;
        ?>
        Terima kasih atas pesanan anda. Harga total yang harus dibayarkan adalah
        Rp<?=$harga?>. Silahkan cek email anda untuk melanjutkan pembayaran.

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
