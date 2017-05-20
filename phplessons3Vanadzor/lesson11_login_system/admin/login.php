<!DOCTYPE html>
<html lang="en">
    <?php include("template/head.php"); ?>
    <?php
        require_once("../config.php");
        require_once("functions.php");
        $error = "";
        if(isset($_POST["login"]) && isset($_POST["password"])){
            $l = $_POST["login"];
            $p = $_POST["password"];
            if(checkUser($l,$p))
            {
                logInUser($l);
            }
            else
            {
                $error = "Սխալ մուտքի տվյալներ";
            }
        }
    ?>

<body>
    <?php include("template/nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-12">
                <form name="login" action="" method="POST">
                    <input type="text" name="login" class="form-control" placeholder="login"><br>
                    <input type="password" name="password" class="form-control" placeholder="password"><br>
                    <input type="submit" class="btn btn-primary" value="Ուղարկել">
                </form>             
                <?=$error ?>
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
