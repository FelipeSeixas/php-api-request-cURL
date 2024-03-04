<?php 
// Developer: Felipe Seixas
// Contact: https://www.linkedin.com/in/felipe-seixas/
// https://www.php.net/manual/pt_BR/book.curl.php
// https://curl.se/
// Step by step https://www.youtube.com/watch?v=V5vZWHP-RqU
// https://reintech.io/blog/getting-started-php-curl-library-guide

// Check to descovery cURL lib is installed:
    // phpinfo();
    /*
    if (extension_loaded('curl')) {
        echo 'cURL is installed';
    } else {
        echo 'cURL is not installed';
    }
    */

echo "Example in cURL lib\n\n";

$url = 'https://api.publicapis.org/entries';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

$response = curl_exec($curl);


if (!$response) {
    die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
}

// curl_close($curl);

echo $response;

?>