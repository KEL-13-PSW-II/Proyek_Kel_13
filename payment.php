
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
    <link rel="stylesheet" href="payment.css">

    <!-- https://fonts.google.com/specimen/Viga?query=viga&sidebar.open=true&selection.family=Viga -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">

    <title>Local Side</title>
  </head>
  <body style="background-color: white (105, 128, 148);">

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" id="bg-navbar">
      <div class="container-fluid">
        <a class="navbar-brand px-4 " href="#"> Local Side</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link" href="halaman_utama.php">
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
          
          
            <a class="nav-item nav-link" href="contact.html">
                <!--Bootstrap icons dari link : https://icons.getbootstrap.com/icons/telephone-fill/ -->
                &nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> Contact Us</a>
        <!--  -->
                <a class="nav-item nav-link" href="logout.html">
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
    <section class="hero col-md-10">     
    
              <br><br><div >    
                <img src="gambar/baju wanita kotakkotak.jpg" width="350px" height="350px" style ="float:left" /><u> Kemeja Kotak-kotak / Atasan / Biru Dongker / Unisex</u>  
                <br><span style="text-decoration: line-through;">Rp115.000</span> &nbsp; Rp95.450 &nbsp; 17%OFF
                 
                <div style="border: 0px #006400 solid; padding: 3px; background-color: PINK ; overflow: auto; height: 100px; width: 750px; text-align: left;"> Deskripsi Produk</div>
                Ukuran &nbsp; M  &nbsp; L  &nbsp; XL  &nbsp; Pengiriman Ke  &nbsp; 
                <br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Ongkos Kirim 
                <br> Jumlah  &nbsp; -  &nbsp; 1 &nbsp; +  &nbsp; &nbsp;&nbsp;Bayar melalui 
                <br> <div style="border: 0px #006400 solid; padding: 3px; background-color: RED ; overflow: auto; height: 60px; width: 700px; text-align: left;"><center> Pesan Sekarang</div>
                <br> Share : <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="gambar/fb.png" width="50px" height="50px"></a> 
                <a href="whatsapp://send?text=Hello&phone=+6295346052247"><img src="gambar/wa.jpg" width="50px" height="50px"></a>
                <a href="whatsapp://send?text=Hello&phone=+6295346052247"><img src="gambar/twit.jpg" width="50px" height="50px"></a>
                <div id="fb-root"></div>

</div>
            </div>

            
          </div>
        </div>
    </section>