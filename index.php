<?php 

include('connection.php');

?>

<!DOCTYPE html>
<head>
<link rel = "stylesheet" href = "index.css">
</head>
<body>
  
<header class="header">
      <div class="dash">
        <h5>TATU CITY HUB</h5>    
      <div class="flex">
            <li> 
                <ul>       
                <a href="admin_pannel.php">Home</a>
                <a href="#admin_user">Products</a>
                <a href="#admin_products">About</a>
                <a href="#admin_orders">Contacts</a>
            </ul>
        </li>
        
</div>
<div class="log">
        </div>
        <form method="POST">
            <button type= "submit" id="btn_log" class="btn_log"><a href ="login.php">logIn</button> 
            <button type= "submit" class="btn_reg"><span class="material-symbols-outlined"><a href="register.php">Register</span></button>
        </form>
</div>
    </header>            

</body>
</html>