<?php
require 'Instagram.php';

use MetzWeb\Instagram\Instagram;

$instagram = new Instagram(array(
    'apiKey' => 'a41171a75a0346e4916608a020241ea2',
    'apiSecret' => 'a9c8c31b75e84fea9d3fe16c5f7f4b1e',
    'apiCallback' => 'http://torqkd.com/instagram-success.php' // must point to success.php
));


// receive OAuth code parameter
$code = $_GET['code'];
// check whether the user has granted access
if (isset($code)) {
    // receive OAuth token object
    $data = $instagram->getOAuthToken($code);
    $username = $data->user->username;
    // store user access token
    $instagram->setAccessToken($data);
    // now you have access to all authenticated user methods
    $result = $instagram->getUserMedia();

    var_dump($data);
    var_dump($username);

} else {
    // check whether an error occurred
    if (isset($_GET['error'])) {
        echo 'An error occurred: ' . $_GET['error_description'];
    }

    echo 'dsfs';
}

?>
