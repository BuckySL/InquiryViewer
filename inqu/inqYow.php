
<?php
require_once 'inqConfig.php';

//...

if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message"><span>'. $msg. '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
    }
}

include 'viewHead1.php';

?>

<div class="container">
    <section class="products">
        
        <div class="box-container">
            <?php
            $stmt = $conn->prepare("SELECT * FROM `inq`");
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($fetch_product = $result->fetch_assoc()) {
                   ?>
                    <div class="box">
                        <h2><?= $fetch_product['firstName']. ' ' . $fetch_product['lastName']?></h2>
                        <p><?= $fetch_product['address']?></p>
                        <p><?= $fetch_product['email']?></p>
                        <p><?= $fetch_product['inq_des']?></p>
                        <form action="" method="post">
                            <input type="hidden" name="product_sno" value="<?= $fetch_product['sno']?>">
                        </form>
                    </div>
                    <?php
                }
            } else {
                echo "No products found.";
            }
            ?>
        </div>
    </section>
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- Link to custom CSS file -->
<link rel="stylesheet" type="text/css" href="newStyle.css">
