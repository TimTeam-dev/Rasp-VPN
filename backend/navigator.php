<!DOCTYPE html>
<html>
    <head>
        <title>First code in php</title>
    </head>
    <body>
        <?php
            function correctURL($url) {
                if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
                    $url = "https://". $url;
                }

                $parsedURL = parse_url($url);
                $host = $parsedURL['host'] ?? '';

                if ($host && strpos($host, '.') === false) {
                    $url = str_replace($host, $host.'.com', $url);
                }

                return $url;
            }

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, correctURL($_POST['query']));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

            if (curl_errno($ch)) {
                echo 'Error cURL : '.curl_error($ch);
            } else {
                echo $response;
            }

            curl_close($ch);
        ?>
    </body>
</html>