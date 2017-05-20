<?php

require_once("config.php");

if(isset($_GET["id"]) && (int)$_GET["id"]>=0)
{
    $id=$_GET["id"];

    if(mysqli_connect_errno($link) == NULL)
    {

        $sql = "SELECT * 
                FROM blog 
                WHERE id=$id"; 
        $result = mysqli_query($link,$sql);     
        
        if($result)
        {
            $article = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $title=$article["title"];
            $content=$article["content"];
            $date=$article["datecreated"];                                
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

<? include("template/head.php"); ?>
<body>

<? include("template/nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">
            <h2>
                <?php echo $title; ?>
            </h2>
            <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo $date; ?></p>
            <?php echo $content; ?>
            <br>
            <br>
            <!-- Pager -->
            <ul class="pager">
                <li class="previous">
                    <a href="#">&larr; Older</a>
                </li>
                <li class="next">
                    <a href="#">Newer &rarr;</a>
                </li>
            </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

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

</body>

</html>
