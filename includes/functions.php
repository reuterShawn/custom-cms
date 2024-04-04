<?php

function secure()
{
    if (!isset($_SESSION['id'])) {
        echo 'Please login first to view this page';
        header('Location: /');
        die();
    }
}

function set_message($message)
{ {
        $_SESSION['message'] = $message;
    }
}

// function get_message() {
//     if (isset($_SESSION['message'])) {
//         echo "<script type=text "
//     }
// }