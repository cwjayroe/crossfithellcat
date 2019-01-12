<?php 
try {
    $from = $_POST['formemail'];
    $phone = $_POST['formphone'];
    $name = $_POST['formname'];
    $comments = $_POST['formcomments'];

    if(!empty($from) && !empty($phone) & !empty($name) & !empty($comments)){
        $to = "jayroe.will@gmail.com";
        $subject = "New Form submission";

        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
        echo "True";
    } else {
        echo "False";
    }
} catch (Exception $e) {
    http_response_code(500);
}
?>