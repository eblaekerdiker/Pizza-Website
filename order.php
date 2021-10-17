<html>
    <style>
body{
        background-image: url("3.jpg");
        
    }
    div{
      align:center;
      margin-top:150px;
      margin-left:400px;
      border:10px solid black;
      width:550px;
      height:400px;
      background-color:white;
    } 
   .p{
     color:red;
     text-align:center;
    }
    .checkbox{
      display: inline-block;
      margin-left:15px;
    }
    </style>
<body>
<form method="get ">
    <div>
    <p class="p"> Welcome to CSE216 Pizza ordering website. Please choose your region and type of ordering.</p><br><br>
    <p>Regions:</p><br><br>
    <input class="checkbox" type="radio" name="regions" value="Pozcu">Pozcu
    <input class="checkbox" type="radio" name="regions" value="Mezitli">Mezitli
    <input class="checkbox" type="radio" name="regions" value="Toros University">Toros University
    <input class="checkbox" type="radio" name="regions" value="Others">Others<br><br>
    <p>Type of ordering:</p><br><br>
    <input type="checkbox" class="checkbox" name="typeoforder" value="Pizza" onclick="location.href='pizza.php'">
    <label for="typeoforder">Pizza</label>
    <input type="checkbox" class="checkbox" name="typeoforder" value="beverage" onclick="location.href='beverage.php'">
    <label for="typeoforder">Beverage</label>
    <input type="checkbox" class="checkbox" name="typeoforder" value="dessert" onclick="location.href='dessert.php'">
    <label for="typeoforder">Dessert</label><br><br>
    </div>
    </form>
</body>
</html>