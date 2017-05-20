<?php

require_once("../config.php");

if(isset($_POST["title"]) && isset($_POST["content"]) &&  $_POST["title"]!="" && $_POST["content"]!="")
{

    $title=$_POST["title"];
    $content = $_POST["content"];

    $content = addslashes($content);
    
        if(mysqli_connect_errno($link) == NULL)
        {

            $sql = "INSERT INTO blog 
                          (`title`,`content`) 
                    VALUES('$title','$content')";

            $result = mysqli_query($link,$sql);     
            
            $latestID = mysqli_insert_id($link);        
            
            if($result)
            {
                header("Location: edit.php?id=$latestID");                 
            }
            else
            {
                echo mysqli_error($link);   
                
            }


        }
        else
        {
            echo mysqli_connect_error();
        }
        
        mysqli_close($link);
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include("template/head.php"); ?>
<body>

    <?php include("template/nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
                <h1>Create New Article</h1>
                <form action="" method="post">
                    <input type="text" name="title" placeholder="title" class="form-control"></input>
                    <br>
                    <textarea name="content" placeholder="text" class="form-control" id="creationForm"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Save">
                </form> 

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

            </div>

        </div>
        <!-- /.row -->

        <hr>
    
        <?php include("template/footer.php"); ?>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!-- include summernote css/js-->
    <link href="wysiwyg/summernote.css" rel="stylesheet">
    <script src="wysiwyg/summernote.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
              $('#creationForm').summernote();
        });


    </script>

</body>

</html>
