<?php

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == "true") {
        echo "
        <script>
            alert('Register successfully')
        </script>
        ";
    } else if ($_GET['msg'] == "invalid_input_data") {
        echo " 
        <script>
            alert('please check your input again')
        </script>
        ";
    } else if ($_GET['msg'] == "account_has_been_exist") {
        echo " 
        <script>
            alert('This account has been exist')
        </script>
        ";
    } else if ($_GET['msg'] == "false") {
        echo "
        <script>
            alert('Wrong username or password! Please try again')
        </script>
        ";
    } else if ($_GET['msg'] == "add-success") {
        echo "
        <script>
            alert('Added Product Successfully!')
        </script>
        ";
    }
}
