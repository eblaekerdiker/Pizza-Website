<html>
<style>
  body{
        background-image: url("3.jpg");
        
    }
.div1{
  width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: auto;
  position:absolute;
  margin-left:500px;
  margin-top:150px;
  background-color:white;
}
.btn{
  position:absolute;
}
</style>
<body>
<form method="POST">
<div class="div1">
    Customer Number : <input type="text" name="customernumber"><br><br>
    <input type="submit" value="Log In" name="clogin"><br><br>  
    <p><b>If you visit our website for the first time please register first...</b></p><br> 
    Username: <input type="text" name="username"><br><br>
    Address: <input type="text" name="addresss"><br><br>
    <input class="btn" type="submit" value="Register" name="register">
</div>
  <textarea cols="30" rows="10">
    <?php
          if(isset($_POST['username'])&&isset($_POST['addresss'])&&isset($_POST['register']))
          {
            $username=$_POST['username'];
            $addresss=$_POST['addresss'];
            $register=$_POST['register'];
            $conn=mysqli_connect('localhost','root','','project') or die ("not connected");
            $sql="INSERT INTO customers (username, addresss) VALUES ('$username','$addresss')";
            $query=mysqli_query($conn,$sql);
            if($query==1)
            {
              echo("You have registered successfully..."); 
            }
            $conn=mysqli_connect('localhost','root','','project') or die ("not connected");
            $sql1="SELECT customernumber FROM customers WHERE username='$username'";
            $queryInject=mysqli_query($conn,$sql1);
            while($customers=mysqli_fetch_array($queryInject))
            {
              echo $customers['customernumber']."  ";
            }
          
          }
          if(isset($_POST['customernumber'])&&isset($_POST['clogin']))
          {
            $customernumber=$_POST['customernumber'];
            $connection=mysqli_connect('localhost','root','','project');
            $sql2="SELECT * FROM customers WHERE customernumber='$customernumber'";
            $query=mysqli_query($connection,$sql2);
            if($query)
            {
              echo"Welcome";
              header ("Location:order.php");
            }
          }
    ?>
  </textarea>
</form>
</body>
</html>