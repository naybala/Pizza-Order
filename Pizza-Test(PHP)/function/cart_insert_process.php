<?php
if (isset($_POST['btnCart'])) {
    $customer_id = $_SESSION['customer_id'];
    $price = $_POST['price'];
    $product_id = $_POST['product_id'];
    if ($_POST['count'] <= 0) {
        $errorCount = 'at least one pizza count need';

    } else {
        $count = $_POST['count'];
        $sql = "SELECT product_id, quantity FROM cart_table WHERE product_id='$product_id' AND customer_id='$customer_id'";
        $result1 = $conn->query($sql) or die($conn->error);

        if ($result1->num_rows == 0) {
            $insertCount = $count;
            $total_price = (int) $insertCount * (int) $price;

            $insertCart = mysqli_query($conn, "INSERT INTO cart_table (customer_id , product_id , price , quantity ,total_price) VALUES ('" . $customer_id . "','" . $product_id . "','" . $price . "','" . $insertCount . "','" . $total_price . "') ");
            echo "<script>window.location.href='index.php?page=cartPage'</script>";
        } else {
            $row1 = $result1->fetch_assoc();
            $updateCount = (int) $row1['quantity'] + (int) $count;
            $updatePrice = (int) $updateCount * (int) $price;
            $updateCart = mysqli_query($conn, "UPDATE cart_table SET quantity='" . $updateCount . "',total_price='" . $updatePrice . "'WHERE customer_id='" . $customer_id . "' AND product_id='" . $product_id . "'");
            echo "<script>window.location.href='index.php?page=cartPage'</script>";
        }
    }

}