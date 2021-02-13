<?php
        //connect databazen
        $conn = mysqli_connect("localhost", "root", "", "userdb");
        $name = $_POST['name'];
        $email = $_POST['contact-email'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];
        $is_done = $conn->query("INSERT INTO `contact_us`( `name`, `email`, `subject`, `msg` ) VALUES( '$name','$email','$subject','$msg' )");
        if ($is_done == TRUE) {
            $success = "success";
            $_SESSION['success'] = $success;
            header("Location: success.html");
        }
    }
}