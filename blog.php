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
    <title>Blog</title>
    <link rel="icon" href="Image/without BG.webp">
    <?php
     $connection = mysqli_connect('localhost', 'root', '','img2nft');

     if( !$connection ){
      die("Error - database connection failed");
     }
     // checking if url parameter is present
	if ( isset($_GET['blog_id']) ) {
		$blog_id = mysqli_real_escape_string($connection, $_GET['blog_id']);
		$query   = "SELECT * FROM blog WHERE blog_id = {$blog_id} LIMIT 1";		
	} else {
		// getting the latest blog post
		$query   = "SELECT * FROM blog ORDER BY blog_id DESC LIMIT 1";
	}
	// executing the query
	$result_set = mysqli_query($connection, $query);
	// checking if the query is successful
	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) == 1 ) {
			// prepare to display the record
			$blog_post = mysqli_fetch_assoc($result_set);
			$blog_title = stripslashes($blog_post['blog_title']);
			$blog_date = stripslashes($blog_post['blog_date']);
			$blog_text = stripslashes($blog_post['blog_text']);
      $blog_img = stripslashes($blog_post['blog_img']);
		}
	}
	// preparing a list of previous posts
	$query  = "SELECT blog_id, blog_short_title FROM blog ORDER BY blog_id LIMIT 10";
	$result_set = mysqli_query($connection, $query);
	$blog_nav = '<ul>';
	if ( $result_set ) {
		if ( mysqli_num_rows($result_set) > 0 ) {
			while ( $result = mysqli_fetch_assoc($result_set) ) {
				$blog_nav .= '<li><a href="blog.php?blog_id=' . $result['blog_id'] . '">' . $result['blog_short_title'] . '</a></li>';
			}
		}
	}
	$blog_nav .= '</ul>';
?>   
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
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-9">
              <div class="content clearfix">
                <div class="blog-post">
                  <h1 style="color: white;"><?php echo $blog_title; ?></h1>
                  <p class="blog-date-posted" style="color: white;">DATE POSTED: <?php echo $blog_date; ?></p>
                  <p style="color: white;"><?php echo $blog_text; ?></p>
                </div>
              </div>    
        </div>
        <div class="col-lg-3">
          <h3 style="color: white;">Previous Post</h3>
          <?php echo stripslashes($blog_nav); ?>
        </div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
