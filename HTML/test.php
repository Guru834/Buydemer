
    <?php
    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';

    // }
    // else
    // {
    //     echo "No Data";
    // }

    if(filter_has_var(INPUT_POST, 'data')){
        $email = $_POST['data'];
        $email = strip_tags($email);
        echo "Strip_tags".$email; 
        $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
        echo $email;



        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo 'Email is valid';
        }
        else
        {
            echo 'Email not valid';
        }

    }
    ?>


    <form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <input type="text" name = "data1">
    <input type="text" name = "data2">
    <input type="text" name = "data3">
    <input type="text" name = "data4">
    <input type="text" name = "data5">
    
    <button type = "submit">Submit</button>

    </form>
</body>
</html>