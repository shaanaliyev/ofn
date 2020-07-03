<?php
require_once 'security_config.php';
function s_hide($value){
    return htmlspecialchars(quotemeta($value));
}
function s_show($value){
    return htmlentities(stripcslashes(htmlspecialchars_decode($value)));
}
function s_show_2($value){
    return stripcslashes(htmlspecialchars_decode($value));
}

/*=======================================================================
[G] //image type oyrenen funksiya
=========================================================================*/
function s_get_img_type($filename, $svg64=0){
    if (file_exists($filename)) {
        $last_ext=explode('.',$filename);
        //coxlu slash olan fayllarda axirinci slashdan sonraki hisseni yoxlamaq ucun
        if ($svg64===1 && mime_content_type($filename)==='image/svg+xml'){
            return 'svg+xml';
        }
        if ($svg64===1 && end($last_ext)==='svg'){
            return 'svg+xml';
        }
        return pathinfo($filename, PATHINFO_EXTENSION);
    }
}

/*=======================================================================
[G] //Base 64 encode img
=========================================================================*/


function s_img_enc_base64 ($filename, $svg64=0){
    if (file_exists($filename)){
        if ($svg64===1){
            $filetype=s_get_img_type($filename,1);
        }
        else{
            $filetype=s_get_img_type($filename,0);
        }
        $imgbinary = fread(fopen($filename, 'rb'), filesize($filename));
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }
}


/*=======================================================================
[G] //ENCRYPT by key
=========================================================================*/
//ENCRYPT
function s_enc_by_key($data,$key)
{
    $encryption_key = base64_decode($key);
    try {
        $sh = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        $encrypted = openssl_encrypt($data, 'aes-256-cbc', $encryption_key, 0, $sh);
        return base64_encode($encrypted . ':shabanaliyev:' . $sh);
    }
    catch (Exception $e) {
    }
}
//decrypt
function s_dec_by_key($data,$key) {
    $encryption_key = base64_decode($key);
    list($encrypted_data, $sh) = explode(':shabanaliyev:', base64_decode($data), 2);
    return openssl_decrypt($encrypted_data, 'aes-256-cbc', $encryption_key, 0, $sh);
}

/*=======================================================================
[G] //COOKIE
=========================================================================*/
//COOKIE SET
function s_setcookie($cname,$ccontent,$cday=400)
{


    $secure_cookie_content=s_enc_by_key($ccontent,'COOKIE_KEY');


    setcookie($cname,$secure_cookie_content,strtotime("+$cday day"), '/','invaler.com',null,true);
    // ilk null domain ( .facebook.com  edende butun subdomain falan da alir) . ikinci null secure https ucun. ucuncu null httpOnly
}
//COOKIE GET
function s_getcookie($cname){
    return s_dec_by_key($_COOKIE[$cname],'COOKIE_KEY');
}

/*=======================================================================
[G] //SESSION
=========================================================================*/
//SESSION SET
function s_setsession($sname,$svalue)
{
    $secure_cookie_content=s_enc_by_key($svalue,'SESSION_KEY');
    $_SESSION[$sname]=$secure_cookie_content;
}
//SESSION GET
function s_getsession($sname){
    return s_dec_by_key($_SESSION[$sname],'SESSION_KEY');
}
