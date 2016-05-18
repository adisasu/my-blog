<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<h1>Page Articles</h1>
<div><a href = "addArticle">Add new Post</a></div>
<hr>
<div>

  <a href="articles?logout">Logout</a>

    <?php
        $comid = $article[0]["id"];?>

        <div>
            <div><?php echo $article[0]["id"]; ?></div>
            <div><h3><?php echo $article[0]["title"]; ?></h3></div>
            <div><?php echo $article[0]["body"]; ?></div>
            <img src="<?php echo BASE_URL . UPLOADS . $article[0]["image"]; ?>" alt="Article image"/>



            <br>
            <br>
            <h4>Comentezziii??!!</h4>
            <form action="" method="POST">
                <input placeholder="Enter your email" type="email" name="email"/><br><br>
                <textarea placeholder="Enter your opinion here" name="body" rows="4" cols="36"></textarea><br>

                <input type="submit" name="Submit Comment" value="SUBMIT"/>
            </form>
            <p><a href = "http://localhost/blogg/updateArticle?id=<?php echo $articles[$i]["id"]; ?>">Edit</a>  <a href = "http://localhost/blogg/deleteArticle?id=<?php echo $articles[$i]["id"]; ?>">Delete</a></p>
        </div>
        <div>
            Comentarii:


            <div><?php for ($n = 0; $n< count($comments); $n++) {
              if($comments[$n]['article_id']==$comid){?>
                <div class="comment-body"><?php echo $comments[$n]['body']; ?></div>
                <?php }
              }?>
            </div>

        </div>


</div>
