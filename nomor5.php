<?php
 
 function generateRandomString($total) {
    $length = 32;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    
    // Looping berapa kali mau di cetak
    for($i=1; $i<=$total; $i++){
        $randomString = '';
        
        // Setting Random 32 String
        for ($j = 0; $j < $length; $j++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }        
        
        // Cetak String
        echo $randomString."\r\n";
    }
}

generateRandomString(3);