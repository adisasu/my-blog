<!-- <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<h1>Page Articles</h1>
<div><a href = "addArticle">Add new Post</a></div>
<hr>
<div>


  <a href="articles?logout">Logout</a> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <div><a href = "addArticle">Add new Post</a></div>

<div>
  <?php for($i=0; $i<count($articles); $i++) {
    $readid = $articles[$i]["id"];?>

    <div>
      <section class="34u">
      <div><?php echo $articles[$i]["id"]; ?></div>
      <a href="#" class="image full"><img src="<?php echo BASE_URL . UPLOADS . $articles[$i]["image"]; ?>" alt="Article image"/>
        <header>
      <h2><a href="article?id=<?php echo $articles[$i]["id"]?>"><?php echo $articles[$i]["title"]; ?></a></h2>
    </header>
      <p><?php if (strlen($articles[$i]["body"]) > 295){
                $croppedBody = substr($articles[$i]["body"], 0, strpos(wordwrap($articles[$i]["body"], 300), "\n"));
              } else {
                $croppedBody = substr($articles[$i]["body"], 0, 300);
              }
              if (strlen($croppedBody) < strlen($articles[$i]["body"])){
                $body = $croppedBody."...<a class=\"btn btn-primary\" href=article?id='".$articles[$i]["id"]."'>Citeste mai mult</a>" ;
              } else {
                $body = $articles[$i]["body"];
              }
              echo $body; ?></p>
      <br>
      <br>
      <p><a class="btn btn-info" href = "http://localhost/blogg/updateArticle?id=<?php echo $articles[$i]["id"]; ?>">Edit</a>  <a class="btn btn-danger" href = "http://localhost/blogg/deleteArticle?id=<?php echo $articles[$i]["id"]; ?>">Delete</a></p>
      <hr>
      </section>


    </div>
    <?php }?>


    <div>

      <nav>
        <ul class="pagination">
          <?php for($b=1; $b<=$a; $b++) {?>
          <li id='pagination' class='pagination'><a href = "articles?page=<?php echo $b; ?>"><?php echo $b." ";?></a></li>
          <?php  }?>

        </ul>
      </nav>


      </div>

    </div>
