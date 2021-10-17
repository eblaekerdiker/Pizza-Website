<html>
<style>
  body{
        background-image: url("3.jpg");
        
    }
.div{
    align:center;
      margin-top:250px;
      margin-left:500px;
      border:8px solid black;
      width:350px;
      height:140px;
      background-color:white;
}
.butn{
    align:center;
}
</style>
<body>
    <form method="POST">
    <div class="div">
    Adminstrator:<input type="text" name="adminstrator"><br><br>
    <input class="butn" type="submit" name="adminlogin" value="Log In">
    </div>
    <?php
    if(isset($_POST['adminstrator'])&&isset($_POST['adminlogin']))
    {
     $adminstrator=$_POST['adminstrator'];
     $conn=mysqli_connect('localhost','root','','project') or die ("not connected");
     $sql="SELECT adminstrator FROM adminbase WHERE adminstrator='$adminstrator'";
     $query=mysqli_query($conn,$sql);
    if($query){
      header("Location:admincalc.php");
    }
    }
    ?>
    </form>
</body>
</html>