<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class="cont">
        <div class="row">
            <div class="col-md-3">
                            <?php

            session_start();
            if(isset($_SESSION['loguser']))
            echo "<h3>&emsp; &emsp; &emsp; Welcome &emsp; &emsp; ".$_SESSION['loguser']." &emsp;  &emsp;  <a href='lout.php' class='btn btn-danger'>Logout</a></h3>";

            else
header('location:login.php');

?>

            </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col">
                        <center><br><h2>Delete record page</h2><hr>
                        </div>
                    </div>
        </div>
    </div>
    </body>
</html>