<?php
$url = "http://localhost/pwd10/getdatamhs.php";
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($client);
$result = json_decode($response);
foreach($result as $r) {
    echo "<p>";
    echo "nim : " . $r->nim . "<br />";
    echo "nama : " . $r->nama . "<br />";
    echo "jk : " . $r->jk . "<br />";
    echo "alamat : " . $r->alamat . "<br />";
    echo "tgl_Lahir : " . $r->tgl_lahir . "<br />";
    echo "</p>";
}