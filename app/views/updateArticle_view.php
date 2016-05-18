
<style>
    input,textarea {
        display: block;
        margin-top: 10px;
    }
</style>

    <form action="" method="post">

            <input type="text" name="title" value="<?php echo $arti[0]["title"]; ?>" required="required" />
            <textarea name="body" rows="5" cols="35" required="required"><?php echo $arti[0]['body'];?></textarea>
        <p><input type="submit" name="edit_submit" value="Update" /></p>
    </form>
    <?php echo $_GET["id"]; ?>
