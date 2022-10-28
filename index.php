<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
 <link rel="stylesheet" href="assets/style.min.css">
 <link rel="stylesheet" href="assets/slim.select.css">
 <link rel="stylesheet" href="style.css">
 <title>Image to NFTs</title>
 <link rel="icon" href="Image/without BG.webp">
</head>
<body>
  <div class="container-fluid p-0">
    <div class="row">
        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-black">
                <div class="container-fluid">
                  <a class="navbar-brand">
                   <img src="Image/without BG.webp" alt="logo" height="90vh" width="130vh">  
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                      <a class="nav-link active" href="CryptoNews.php">Crypto News</a>
                      <a class="nav-link active" href="Blog.php">Blog</a>
                      <a class="nav-link active" href="contact.php">Contact</a>
                    </div>
                  </div>
                </div>
              </nav>
        </div>
    </div>
  </div>  
<section class="working">
  <div class="wrap">
  <h2>Turn Image to NFT</h2>
  <p>You can try pixel It live here, you can use the default image (just change some value) or upload an image to start see the changes.</p> 
<!-- max width -->
 <div class="container maxwidth" id="tryit">
  <div class="selectors">
    <!--upload image -->
    <label id="uploadimage" for="pixlInput">Upload Image<input type="file" class="inputbtn" id="pixlInput"  style="background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%); border-radius: 30px;"></label>
    <!-- block size -->
    <label for="blocksize" class="inputbtn" style="border-radius: 30px;">Block size<span id="blockvalue">7</span><input value="7" type="range" min="2" max="25" id="blocksize" style="background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%); border-radius: 30px;"></label>
    <!-- greyscale -->
    <label for="greyscale" class="inputbtn" style="border-radius: 30px;">Greyscale<input type="checkbox" id="greyscale"></label>
    <!-- palette -->
    <label for="palette" class="inputbtn" style="border-radius: 30px;">palette<input type="checkbox"  id="palette"></label>
    <!-- max height -->
    <label for="maxheight" class="inputbtn" style="border-radius: 30px;">Max Height<input type="input"  id="maxheight" placeholder="in px"></label>
    <!-- max width -->
    <label for="maxwidth" class="inputbtn" style="border-radius: 30px;">Max Width<input type="input" id="maxwidth" placeholder="in px"></label
  </div> 
  <div class="infoselects">
   <!-- color palette example-->
   <div class="colorpalette">
    <div class="text">
      <button class="btn small" id="changepalette" style="background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);">Select palette</button>
      <select name="paletteselector" id="paletteselector" style="background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);"></select>
    </div>
    <div class="icons" id="palettecolor">
    </div>
   </div>
   <div class="dothings">
   <!-- download image -->
   <Button id="downloadimage" class="btn small call" style="background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);">Download Image</Button>
   </div>
    </div>
 </div>
  <canvas id="pixelitcanvas"></canvas>
  </div>
</section>

</section>
  <img src="assets/sky.jpg"  id="pixelitimg" alt="">
  <!--<img style="visibility: hidden;" id="pixlimg" alt="">  -->
  <script src="js/pixelit.min.js"></script>
  <script src="js/slim.select.min.js"></script>
  <script src="js/main.min.js"></script>
  <!-- loader-->
 <div class="loader">
    <div class="lds-spinner">
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
 </body>

</html>
