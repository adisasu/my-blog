<style>
    input,textarea {
        display: block;
        margin-top: 10px;
    }
</style>
<h1>Add Article</h1>

<form action="" method="POST" enctype="multipart/form-data">
    <input placeholder="Title" type="text" name="title"/>
    <textarea placeholder="Enter your article here" name="body" rows="20" cols="40"></textarea>
    <input type = "file" name = "file" value = "Adauga un fisier"/>
    <input type="submit" name="Submit" value="SUBMIT"/>
</form>
