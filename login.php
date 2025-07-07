<html>
<head>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>



<div class="count">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4" style="border: 2px solid gray; padding: 20px;">
            <form>
                ENTER USER NAME
                <input type="text" class="form-control" name="u"><br>
                 ENTER PASSWORD
                <input type="text" class="form-control" name="p"><br>
                <input type="submit" class="btn btn-success" name="submit" value="login"><br>
            </form>

<br>
<hr>
<?php
if(isset($_REQUEST['submit']))
{
    $n=$_REQUEST['u'];
    $p=$_REQUEST['p'];
$con=mysqli_connect('localhost','root','','db');
    $q="select * from uinfo where uname=$'$n'&& password='$p'";
    $rs=mysqli_query($con,$q);
    $x=mysqli_num_rows($rs)or die("Could not Update ".mysqli_error($con));
    if($x>0)
    {
        session_start();
        $_SESSION['loguser']=$n;
        header('location:home.php');
    }
    else
    echo"<h3>Invalid user name or password";

}
?>
<hr>

        </div>
    </div>


    </body>
</html>