<?php 
try {
    $from = $_POST['formemail'];
    $phone = $_POST['formphone'];
    $name = $_POST['formname'];
    $comments = $_POST['formcomments'];

    if(!empty($from) && !empty($phone) & !empty($name) & !empty($comments)){
        $to = "info@crossfithellcat.com";
        $subject = "New Web Form submission";
        $body = "Web form filled out by: " . $name . "\r\nEmail address: " . $from . "\r\nPhone #: " . $phone . "\r\nComments: " . $comments;
        $headers = "From:" . $from;
        mail($to,$subject,$body,$headers);
        echo "True";
    } else {
        echo "False";
    }
} catch (Exception $e) {
    http_response_code(500);
}
?>