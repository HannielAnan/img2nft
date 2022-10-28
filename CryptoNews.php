<?php
    $api=file_get_contents("Your API key");
    $news=json_decode($api,true); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="style.css">
    <title>Crypto News</title>
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
<div class="container">
  <div class="row">
    <div class="col-lg-10">
    <?php foreach($news['articles'] as $value) {?>
    <div class="media">
  <img class="align-self-start mr-3" src="<?=$value['urlToImage']?>" style="height: 250ox; width: 250px;">
  <div class="media-body">
    <h5 class="mt-0" style="color: white;"><?=$value['title']?></h5>
    <p style="color: white;"><?=$value['description']?></p>    
    <a href="<?=$value['publishedAt']?>" style="color: white;"></a>
    <button type="button" class="btn btn-primary"><a href="<?=$value['url']?>" style="color:white;">Read More...</a></button>
  </div>
</div>
<?php } ?> 
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
