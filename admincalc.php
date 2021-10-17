<html>
<style>
body{
        background-image: url("3.jpg");
        
}
.div{
  width: 300px;
  border: 15px solid black;
  padding: 50px;
  margin: auto;
  position:absolute;
  margin-left:500px;
  margin-top:150px;
  background-color:white;
}
</style>
<body>
    <form method="POST">
    <div class="div">
    Start Date: <input type="text" name="startdate"><br><br>
    End Date: <input type="text" name="enddate"><br><br>
    Total Sale: <input type="text" name="totalsale"><br><br>
    Gross Profit: <input type="text" name="grossprofit"><br><br>
    Net Income: <input type="text" name="netincome"><br><br>
    <input type="submit" value="Calculate" name="admincalc">
    </div>
    <textarea cols="30" rows="10">
    <?php
      if(isset($_POST['startdate'])&&isset($_POST['enddate'])&&isset($_POST['totalsale'])&&isset($_POST['grossprofit'])&&isset($_POST['netincome'])&&isset($_POST['admincalc'])){
        $conn=mysqli_connect('localhost','root','','project') or die ("not connect");
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $totalsale=$_POST['totalsale'];
        $grossprofit=$_POST['grossprofit'];
        $netincome=$_POST['netincome'];
        $admincalc=$_POST['admincalc'];
        $sql="INSERT INTO profittable (startdate,enddate,totalsale,grossprofit,netincome) VALUES ('$startdate','$enddate',' $totalsale ','$grossprofit' ,'$netincome')";
        $query=mysqli_query($conn,$sql);
        if($query)
            {
              echo("successfull..."); 
            }
      }
      if(isset($_POST['startdate'])&&isset($_POST['enddate'])&&isset($_POST['totalsale'])&&isset($_POST['grossprofit'])&&isset($_POST['netincome'])&&isset($_POST['admincalc'])){
        $conn=mysqli_connect('localhost','root','','project') or die ("not connect");
        $startdate=$_POST['startdate'];
        $enddate=$_POST['enddate'];
        $totalsale=$_POST['totalsale'];
        $grossprofit=$_POST['grossprofit'];
        $netincome=$_POST['netincome'];
        $admincalc=$_POST['admincalc'];
        $new=$totalsale*35/100;
        $new1=$totalsale*20/100;
        $query=mysqli_query("UPDATE profittable SET  grossprofit=$new and netincome=$new1");
        $query=mysqli_query($conn,$sql);
        if($query)
            {
              echo("successfull..."); 
            }
      }
      
       
    ?>
    </textarea>
    </form>
</body>
</html>