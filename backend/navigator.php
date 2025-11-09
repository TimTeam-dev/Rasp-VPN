<!DOCTYPE html>
<html>
    <head>
        <title>First code in php</title>
    </head>
    <body>
        <?php
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://meetup.ovh/");
            $response = curl_exec($ch);
            curl_close($ch);
            echo $response;
        ?>
    </body>
</html>