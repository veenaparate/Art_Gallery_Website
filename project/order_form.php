<?php

    $connection = mysqli_connect('localhost','root','','order_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $product = $_POST['pname'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];


        $request = " insert into order_form(name, email, phone, address, product, quantity, date) values ('$name','$email','$phone','$address','$product','$quantity','$date')";

        mysqli_query($connection, $request);
    
        ?>

        <script>alert('your data has been submitted')</script>
        
        
        <?php
        header('pname:order.php');
        }else{
        echo 'something went wrong try again';
        }
    ?>

