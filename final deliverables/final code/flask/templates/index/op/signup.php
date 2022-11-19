<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          <label>Password</label>
          <?php if (isset($_GET['pword'])) { ?>
               <input type="text" 
                      name="pword" 
                      placeholder="password"
                      value="<?php echo $_GET['pword']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="pword" 
                      placeholder="password"><br>
          <?php }?>
	  <label>Mobile Number</label>
          <?php if (isset($_GET['mobile'])) { ?>
               <input type="number" 
                      name="mobile" 
                      placeholder="Mobile Number"
                      value="<?php echo $_GET['mobile']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="mobile" 
                      placeholder="Mobile Number"><br>
          <?php }?>
	  <label>Email</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email"><br>
          <?php }?>
	  <label>Address</label>
          <?php if (isset($_GET['address'])) { ?>
               <input type="text" 
                      name="address" 
                      placeholder="Address"
                      value="<?php echo $_GET['address']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="address" 
                      placeholder="Address"><br>
          <?php }?>
	  <label>District</label>
          <?php if (isset($_GET['district'])) { ?>
               <input type="text" 
                      name="district" 
                      placeholder="District"
                      value="<?php echo $_GET['district']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="district" 
                      placeholder="District"><br>
          <?php }?>
	  <label>State</label>
          <?php if (isset($_GET['state'])) { ?>
               <input type="text" 
                      name="state" 
                      placeholder="State"
                      value="<?php echo $_GET['state']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="state" 
                      placeholder="State"><br>
          <?php }?>



	  <h2>WORK REGISTRATION</h2>
	  <label>Job name</label>
          <?php if (isset($_GET['job'])) { ?>
               <input type="text" 
                      name="job" 
                      placeholder="Job Name"
                      value="<?php echo $_GET['job']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="job" 
                      placeholder="Job Name"><br>
          <?php }?>
	  <label>Product Produced</label>
          <?php if (isset($_GET['product'])) { ?>
               <input type="text" 
                      name="product" 
                      placeholder="Product Produced"
                      value="<?php echo $_GET['product']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="product" 
                      placeholder="Product Produced"><br>
          <?php }?>
	
	  <label>Sector</label>
          <?php if (isset($_GET['sector'])) { ?>
               <input type="text" 
                      name="sector" 
                      placeholder="Sector"
                      value="<?php echo $_GET['sector']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="sector" 
                      placeholder="Sector"><br>
          <?php }?>
	  <label>Yearly Turnover</label>
          <?php if (isset($_GET['turnover'])) { ?>
               <input type="number" 
                      name="turnover" 
                      placeholder="Yearly Turnover"
                      value="<?php echo $_GET['turnover']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="turnover" 
                      placeholder="Yearly Turnover"><br>
          <?php }?>
	  <label>Range/Scale</label>
          <?php if (isset($_GET['rangesc'])) { ?>
               <input type="number" 
                      name="rangesc" 
                      placeholder="Range/Scale"
                      value="<?php echo $_GET['rangesc']; ?>"><br>
          <?php }else{ ?>
               <input type="number" 
                      name="rangesc" 
                      placeholder="Range/Scale"><br>
          <?php }?>

     	  <button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
	  
     </form>
</body>
</html>
