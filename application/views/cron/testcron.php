<?php

//$con = mysqli_connect("localhost", "root", "", "test");
//// Check connection
//if (mysqli_connect_errno()) {
//    echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//mysqli_query($con, "INSERT INTO test (value)
//VALUES ('This is fine')");
//
//$query = mysqli_query($con, "INSERT INTO test (value)
//VALUES ('And this too')");
//if ($query)
//    echo "data innserted successfully";
//
//mysqli_close($con);
$headers = 'From:' . 'afeefaktk@gmail.com' . "\r\n" .
        'Reply-To: ' . 'afeefaktk@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
mail('afeefaktk@gmail.com', 'TEsting cron', 'Testing cron job', $headers);
