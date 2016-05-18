<h1>Page Articles</h1>
<div><a href = "addArticle">Add new Post</a></div>
<hr>
<div>

    <?php for($i=0; $i<count($articles); $i++) {?>
      
        <div>
            <div><?php echo $articles[$i]["id"]; ?></div>
            <div><h3><?php echo $articles[$i]["title"]; ?></h3></div>
            <div><?php echo $articles[$i]["body"]; ?></div>


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


                    <div><?php echo $comments[$i]["id"]; ?></div>
                    <div>E-mail: <?php echo $comments[$i]["email"]; ?></div>
                    <div>Comentariu: <?php echo $comments[$i]["body"]; ?></div>
                </div>

        </div>
    <?php }?>/

</div>
