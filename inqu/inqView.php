<?php

@include 'inqConfig.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!--css link-->
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php include 'viewHead1.php'; ?>

<div class="container">

<section class="products">

   <h1 class="heading">latest products</h1>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `inq`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">
           
            <input type="hidden" name="product_firstName" value="<?php echo $fetch_product['firstName']; ?>">
            <input type="hidden" name="product_lastName" value="<?php echo $fetch_product['lastName']; ?>">
            <input type="hidden" name ="prodcut_Address" value= "<?php echo $fetch_product['address']?>">
            <input type="hidden" name="product_email" value="<?php echo $fetch_product['email']; ?>">
            <input type="hidden" name="product_sno" value="<?php echo $fetch_product['sno']; ?>">
            <input type="hidden" name="product_Description" value="<?php echo $fetch_product['inq_des']; ?>">


            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            <input type="submit" class="btn" value="more details" name="more_details">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>