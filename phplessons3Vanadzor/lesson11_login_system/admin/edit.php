<?php

require_once("../config.php");
require_once("functions.php");
    if(!isLoggedIn())
    {
        redirect();
    }

// UPDATE
if(isset($_POST["id"]) && (int)$_POST["id"]>=0) //Ստուգել նաև մյուս դաշտերի առկայությունը
{
    $id=$_POST["id"];
    $title = $_POST["title"];
    $content = $_POST["content"];
    $content = addslashes($content);
    if(mysqli_connect_errno($link) == NULL)
        {

        $sql = "UPDATE blog 
                SET title='$title' 
                ,content='$content'
                WHERE id=$id";    


            $result = mysqli_query($link,$sql);     
            
            if($result)
            {
                echo "Sucsessfully updated";
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
        

}    

// GET DATA
if(isset($_GET["id"]) && (int)$_GET["id"]>=0)
{

    $id=$_GET["id"];
   
        if(mysqli_connect_errno($link) == NULL)
        {

            $sql = "SELECT * FROM blog WHERE id='$id'"; 

            $result = mysqli_query($link,$sql);     
            
            if($result)
            {
                    $article = mysqli_fetch_array($result); 
                    $title = $article["title"];
                    $content = $article["content"];
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
                <h1>Edit Article</h1>
                <form action="" method="post">
                    <input type="text" name="title" placeholder="title" class="form-control" value="<?php echo $title; ?>"></input>
                    <br>
                    <textarea name="content" placeholder="text" class="form-control" id="creationForm"><?php echo $content; ?></textarea>
                    <br>
                    <input type="hidden" name="id" value="<?php echo $id?>">
                    <input type="submit" class="btn btn-primary" value="Update">

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
