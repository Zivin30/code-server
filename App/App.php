<?php
/* 
 ==================================
 Author   : Rdp |--
 Version  : 1.0.0 |--
 Telegram : t.me/rdp |--
 ==================================
*/
define("a","\033[1;30m");
define("d","\033[0m");
define("m","\033[1;31m");
define("h","\033[01;38;5;35m");
define("hm","\033[1;32m");
define("k","\033[1;33m");
define("b","\033[1;34m");
define("u","\033[1;35m");
define("c","\033[1;36m");
define("p","\033[1;37m");
define("o","\033[01;38;5;214m");
define("mp","\033[101m\033[1;37m");
define("hp","\033[102m\033[1;37m");
define("kp","\033[103m\033[1;37m");
define("bp","\033[104m\033[1;37m");
define("up","\033[105m\033[1;37m");
define("cp","\033[106m\033[1;37m");
define("pm","\033[107m\033[1;31m");
define("ph","\033[107m\033[1;32m");
define("pk","\033[107m\033[1;33m");
define("pb","\033[107m\033[1;34m");
define("pu","\033[107m\033[1;35m");
define("pc","\033[107m\033[1;36m");
define("rr","\r                                         \r");
define("r","\r");
define("n","\n");
define("line",p." ".str_repeat("─",55).n);
define("panah",k." › ");
define("panah1"," [›] ".p);
define("w",m);
define("w2",k);
define("w3",m);
define("cpm",["","√","+","-","!"]);
define("inpo",["",p." [".mp."ERROR".d.p."] ",p." [".h."INFO ".p."] "]);
define("inpo1",["",p." [".mp." ERROR ".d.p."] ",p." [".pu." INFO  ".d.p."] "]);
define("inpo2",[""," ".m."❯".d.p," ".m."❯".d.p," ".m."❯".d.p]);
define("ApiError", Pesan(0,"Apikey")."Error | 0 ".n);
define("App","App/App.php");
define("Server","https://raw.githubusercontent.com/Zivin30/code-server/main/");
define("Data","Data/");
Function TimeZone(){$api = json_decode(file_get_contents("http://ip-api.com/json"),1);if($api){$tz = $api["timezone"];date_default_timezone_set($tz);return $api["country"];}else{date_default_timezone_set("UTC");return "UTC";}}
Function curl($u, $h = 0, $p = 0,$c = 0) {while(true){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $u);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);curl_setopt($ch, CURLOPT_COOKIEFILE,Data."cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,Data."cookie.txt");if($p) {curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $p);}if($h) {curl_setopt($ch, CURLOPT_HTTPHEADER, $h);}curl_setopt($ch, CURLOPT_HEADER, true);$r = curl_exec($ch);$c = curl_getinfo($ch);if(!$c) return "Curl Error : ".curl_error($ch); else{$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);if(!$bd){print k." Check Your Connection!";sleep(2);print "\r                             \r";continue;}return array($hd,$bd)[1];}}}
Function gas($url, $post = 0, $httpheader = 0, $proxy = 0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_TIMEOUT, 60);curl_setopt($ch, CURLOPT_COOKIE,TRUE);if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($httpheader){curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);}if($proxy){curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);curl_setopt($ch, CURLOPT_PROXY, $proxy);}curl_setopt($ch, CURLOPT_HEADER, true);$response = curl_exec($ch);$httpcode = curl_getinfo($ch);if(!$httpcode) return "Curl Error : ".curl_error($ch); else{$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($header, $body);}}
Function Efek($str,$usleep){$arr = str_split($str);foreach ($arr as $az){print $az;usleep($usleep);}}
Function Ambil($res,$depan,$belakang,$nomor){$data=explode($belakang,explode($depan,$res)[$nomor])[0];return $data;} 
Function Ambil_1($res,$pemisah){$data=explode($pemisah,$res)[0];return $data;}
Function AntiBot($res,$Nomor){$AntiBot = Ambil($res,'rel=\"','\"',$Nomor);return $AntiBot;}
Function Save($file){if(file_exists(Data.$file)){$data = file_get_contents(Data.$file);}else{$data = readline(k." Input ".p.$file." : ".n);print n;file_put_contents(Data.$file,$data);}return $data;}
Function multi($wallet){$tambah = readline(" ".w3."Input ".$wallet." :".p);$save = fopen($wallet, "a");fwrite($save, $tambah.n);fclose($save);sleep(1);print p." Success add ".w3.$wallet.n.p;sleep(1);}
Function get($url){return curl($url,h());}
Function post($url,$data){return curl($url,h(),$data);}
Function postt($url,$data, $ua){return curl($url, $data, $ua)[1]; }
Function line(){return p.str_repeat('─',55).n;}
Function FirCF($r){(preg_match('/Cloudflare/',$r) || preg_match('/Just a moment.../',$r))? $data['cf']=true:$data['cf']=false;return $data;}
Function getUserAgent(){
	$userAgentArray[] = "Mozilla/5.0 (Linux; Android 11; Pixel C Build/RQ1A.210205.004) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/89.0.4389.90 Safari/537.36 GNews/2021022310";
    $userAgentArray[] = "Mozilla/5.0 (Linux; Android 10; SM-G960F) AppleWebKit/537.36 (KHTML, like Gecko) Brave Chrome/89.0.4389.86 Mobile Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Linux; Android 9; SM-N976N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/101.0.4951.40 Mobile Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Linux; Android 10; ZTE A2020G Pro) AppleWebKit/537.36 (KHTML, like Gecko) Brave Chrome/89.0.4389.86 Mobile Safari/537.36";
    $userAgentArray[] = "Mozilla/5.0 (Linux; Android 12; RMX3627 Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/116.0.0.0 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/430.0.0.23.113;]";
    $userAgentArray[] = "Mozilla/5.0 (Linux; Android 12; RMX3624 Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/99.0.4844.88 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/387.0.0.24.102;]";
	$getArrayKey = array_rand($userAgentArray);
	return $userAgentArray[$getArrayKey];
}
Function load(){
    print rr;
    $wait =[
        p." Wait ".o."─".p."───────",
        p." Wait ──".o."─".p."─────",
        p." Wait ───".o."─".p."────",
        p." Wait ────".o."─".p."───",
        p." Wait ─────".o."─".p."──",
        p." Wait ──────".o."─".p."─",
        p." Wait ───────".o."─".p
    ];
    for($i=1; $i<3; $i++){
        foreach($wait as $waitt){
            usleep(300000);
            print $waitt.p.r;
        }
    }
    print rr;
}
Function bps_cap(){
    print rr;
    $delay =2;
    Efek(w2." Bypass Captcha √",10000);
    sleep($delay);
    print rr;}
Function bps_anbot(){
    print rr;
    $delay =2; 
    Efek(w2." Bypass Antibot √",10000);
    sleep($delay);
    print rr;
}
Function cl(){
    system("clear");
}
Function Del(){
    $co=["cookie.txt",cok];
    unlink(Data.$co[0]);
    unlink(Data.$co[1]);
}
Function EngCek(){
    print n.n.n.n.n.n.n.n.n.n;
    print hm." Checking Update ...";sleep(2);print r;
    if(!is_dir("App")){
        system("mkdir App");
    }
    $Lokal = file_get_contents(App);
    $Server = file_get_contents(Server.App);
    $Ver_server = Ambil($Server,"Version  : "," |--",1);
    $Ver_lokal  = Ambil($Lokal,"Version  : "," |--",1);
    if($Ver_server > $Ver_lokal){
        unlink(App);
        file_put_contents(App,$Server);
        Print p." Updated Engine ".p."[".k."v".$Ver_server.p."] Done".n.n;
        Print p." Please re run [".k."php bot.php".p."]".n;die;
    }else{print p." Latest Version :".$Ver_lokal;sleep(2);print r;}
}
Function Api_Bal($api_url){
    $apikey = file_get_contents("Data/Apikey");
	$r = json_decode(file_get_contents($api_url."/res.php?action=userinfo&key=".$apikey),1);
    if(!$r["balance"]){
        print ApiError;
    }
    return $r["balance"];
}
Function ban(){
    cl();
    $res = file_get_contents(App);
    $versi=Ambil($res,"Version  : "," |--",1);
    $tele =Ambil($res,"Telegram : "," |--",1);
    echo p." ┌───────────┐┌────────────────────────────────────────┐".n;
    echo p." │".w2."  ┌─┐┌┐┌┬┐ ".p."│   Bot App  ".panah.w2.$versi.n;
    echo p." │".o ."  ┌─┘├┴┐o  ".p."│   Script   ".panah.o.host[0]." v.".version.n;
    echo p." │".w3."  └─┘└─┘┴  ".p."│   Telegram ".panah.w3.$tele.n;
    echo p." │".p ."  Zerobot  ".p."│   Status   ".panah.p."Free Not For Sale".n;
    echo p." └───────────┘└────────────────────────────────────────┘".n;
    echo line;
}
Function init(){
    cl();
    $r = file_get_contents(Server.App);
    if(!$r){
        file_put_contents(App);
        $x=file_get_contents(App);
        $d = Ambil($x,'eng","','");',1);
        print k." Downloaded Engine v".$d.n;
        Print p." Please re run [ ".k."php bot.php".p." ]".n;die;
    }
    cl();
    EngCek();
}
Function tim($tmr){
    date_default_timezone_set("UTC");
    $panah = array(w."❯".p."❯❯❯❯",p."❯".w."❯".p."❯❯❯",p."❯❯".w."❯".p."❯❯",p."❯❯❯".w."❯".p."❯",p."❯❯❯❯".w."❯");
    $rand = rand(0,2);
    $timr = (time()+$tmr)+$rand;
    while(true):
        foreach($panah as $pan){
            print r;$res=$timr-time();
            if($res < 1){break;}
            print p."   ".date('H',$res).":".p.date('i',$res).":".p.date('s',$res)." | $pan"."\r";usleep(200000);
        }if($res < 1){break;}
    endwhile;  
}
Function _cIcon($token,$theme){
    $ts= round(microtime(true) * 1000);
    $data = ["payload" => base64_encode(json_encode([
    "i"  => "1",
    "a"  => "1",
    "t"  => "dark",
    "ts" => $ts]))];
	$r = json_decode(base64_decode(post(web.'/system/libs/captcha/request.php', $data)));
	print rr;
	print p."   Bypass ".p."[".w3."1".p."]";
	sleep(3);
	$header[] = "accept: */*";
	$header[] = 'sec-ch-ua: "Chromium";v="107", "Not=A?Brand";v="24"';
	$header[] = "origin: ".web;
	$header[] = "sec-ch-ua-mobile: ?1";
	$header[] = 'sec-ch-ua-platform:"Android"';
	$header[] = "sec-fetch-site: same-origin";
	$header[] = "sec-fetch-mode: cors";
    $header[] = "sec-fetch-dest: image";
    $header[] = "accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7";
    $header[] = "dnt: 1";
    $header[] = "referer: ".web."/";
    $header[] = "accept: image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8";
    $r=gas(web.'/system/libs/captcha/request.php?payload='.base64_encode('{"i":1,"ts":'.$ts.'}'), 0,array_merge($header,h()));
    print rr;
	print p."   Bypass ".p."[".w3."2".p."]";
	sleep(3);
	print rr;
    $x = x();
    $y = y();
    $w = w();
	$data = ['payload' => base64_encode(json_encode([
	"i"  => "1",
	"x"  => $x,
	"y"  => $y,
	"w"  => $w,
	"a"  => "2",
	"ts" => $ts]))];
	$r = gas(web.'/system/libs/captcha/request.php', $data, h())[0];
    $data = "a=getFaucet&token=".$token."&captcha=3&challenge=false&response=false&ic-hf-id=1&ic-hf-se=".$x.",".$y.",".$w."&ic-hf-hp=";
    $r= json_decode(post(web."/system/ajax.php", $data) ,1);
    
    if($r['status'] == 200){
        bps_cap();
        suc($r["reward"], $r["number"]);
    }else{
        echo " ".w2.strip_tags($r['message']);
        sleep(3);
        print rr;
    }
}
Function _cIconX($token,$theme){
    $header   = h();
	$header[] = "origin: ".web."/";
	$header[] = "x-iconcaptcha-token: ".$token;
	$header[] = "x-requested-with: XMLHttpRequest";
    $timestamp = round(microtime(true) * 1000);
    $initTimestamp = $timestamp - 2000;
    $widgetID = widgetId();
    $x = x();
    $y = y();
    $data = ["payload"      => base64_encode(json_encode([
            "widgetId"	    => $widgetID,
            "action" 	    => "LOAD",
            "theme" 	    => "$theme",
            "token" 	    => $token,
            "timestamp"	    => $timestamp,
            "initTimestamp"	=> $initTimestamp
        ]))
    ];
    echo rr;
    echo p."   Bypass ".p."[".w3.".  ".p."]";
    sleep(2);
    $r = json_decode(base64_decode(postt(web."/icaptcha/req",$header,$data)),1);
    $base64Image = $r["challenge"];
    $challengeId = $r["identifier"];
    $data = ["payload"      => base64_encode(json_encode([
            "widgetId"		=> $widgetID,
            "challengeId"	=> $challengeId,
            "action"		=> "SELECTION",
            "x"				=> $x,
            "y"				=> $y,
            "width"			=> 320,
            "token" 		=> $token,
            "timestamp"		=> $timestamp,
            "initTimestamp"	=> $initTimestamp
        ]))
    ];
    echo rr;
    echo p."   Bypass ".p."[".w3.".. ".p."]";
    $r = json_decode(base64_decode(postt(web."/icaptcha/req",$header, $data)),1);
    sleep(1);
    echo rr;
    if(!$r['completed'])return;
    echo p."   Bypass ".p."[".w3."...".p."]";
    sleep(2);
    $data = [];
    $data['captcha'] = "icaptcha";
    $data['_iconcaptcha-token']=$token;
    $data['ic-rq']=1;
    $data['ic-wid'] = $widgetID;
    $data['ic-cid'] = $challengeId;
    $data['ic-hp'] = '';
    return $data;
}
Function widgetId() {
	$uuid = '';
	for ($n = 0; $n < 32; $n++) {
		if ($n == 8 || $n == 12 || $n == 16 || $n == 20) {
				$uuid .= '-';
		}
		$e = mt_rand(0, 15);
		if ($n == 12) {
			$e = 4;
		} elseif ($n == 16) {
			$e = ($e & 0x3) | 0x8;
		}
		$uuid .= dechex($e);
	}
	return $uuid;
}
Function RecaptchaV3($anchor){
    while(true){
        $r = curl($anchor,array());
        $token = Ambil($r,'<input type="hidden" id="recaptcha-token" value="','">',1);
        $sitekey = explode("&",$anchor)[1];
        $co = explode("&",$anchor)[2];
        $v = explode("&",$anchor)[4];
        $r = curl("https://www.google.com/recaptcha/api2/reload?".$sitekey,array(),"$v&reason=q&c=$token&$v&$co");
        $res = explode('"',explode('["rresp","',$r)[1])[0];
        if($res){return $res;}
    }
}
Function Captcha($source,$api_url,$apikey, $sitekey, $pageurl,$delay){
    if(preg_match("/sctg/"    ,$api_url)){return captchaXev($source,$api_url,$apikey, $sitekey, $pageurl,$delay);}
    if(preg_match("/multibot/",$api_url)){return captchaMul($source,$api_url,$apikey, $sitekey, $pageurl,$delay);}
    if(preg_match("/tertuyul/",$api_url)){return captchaTer($source,$api_url,$apikey, $sitekey, $pageurl,$delay);}
}
Function captchaXev($source,$api_url,$apikey, $sitekey, $pageurl,$delay){
    if(preg_match("/h-captcha/"   ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=hcaptcha&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/g-recaptcha/" ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=userrecaptcha&googlekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/cf-turnstile/",$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=turnstile&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/authkong/"    ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=authkong&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    $status = $r["status"];
        if($status == 0){ApiError;return 0;}
        $id = $r["request"];
        while(true){
            load();
            $r = json_decode(file_get_contents($api_url."/res.php?key=".$apikey."&action=get&id=".$id."&json=1"),1);
            $status = $r["status"];
            if($r["request"] == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}
            if($status == 1){print rr;print bps_cap();return $r["request"];}
            return 0;
        }
}
Function captchaMul($source,$api_url,$apikey, $sitekey, $pageurl,$delay){
    if(preg_match("/h-captcha/"   ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=hcaptcha&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/g-recaptcha/" ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=userrecaptcha&googlekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/cf-turnstile/",$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=turnstile&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/authkong/"    ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=authkong&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    $status = $r["status"];
        if($status == 0){ApiError;return 0;}
        $id = $r["request"];
        while(true){
            load();
            $r = json_decode(file_get_contents($api_url."/res.php?key=".$apikey."&action=get&id=".$id."&json=1"),1);
            $status = $r["status"];
            if($r["request"] == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}
            if($status == 1){print rr;print bps_cap();return $r["request"];}
            return 0;
        }
}
Function captchaTer($source,$api_url,$apikey, $sitekey, $pageurl,$delay){
    if(preg_match("/recaptchav2/" ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=userrecaptcha&googlekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/recaptchav3/" ,$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=userrecaptcha&googlekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    if(preg_match("/turnstile/",$source)){$r = json_decode(file_get_contents($api_url."/in.php?key=".$apikey."&method=turnstile&sitekey=".$sitekey."&pageurl=".$pageurl."&json=1"),1);}
    $status = $r["status"];
        if($status == 0){ApiError;return 0;}
        $id = $r["request"];
        while(true){
            load();
            $r = json_decode(file_get_contents($api_url."/res.php?key=".$apikey."&action=get&id=".$id."&json=1"),1);
            $status = $r["status"];
            if($r["request"] == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}
            if($status == 1){print rr;print bps_cap();return $r["request"];}
            return 0;
        }
}
Function anti_bot($source,$api_url,$apikey,$delay){
    if(preg_match("/sctg/"    ,$api_url)){return antibotXev($source,$api_url,$apikey,$delay);}
    if(preg_match("/multibot/",$api_url)){return antibotMul($source,$api_url,$apikey,$delay);}	
}
Function antibotMul($source,$api_url,$apikey,$delay){
    $main = explode('"',explode('<img src="',explode('Bot links',$source)[1])[1])[0];
	$antiBot["main"] = $main;
	$src = explode('rel=\"',$source);
	foreach($src as $x => $sour){
		if($x == 0)continue;
		$no = explode('\"',$sour)[0];
		$img = explode('\"',explode('<img src=\"',$sour)[1])[0];
		$antiBot[$no] = $img;
	}
	$ua = "Content-type: application/x-www-form-urlencoded";
        $data = ["key"=>$apikey,"method"=>"antibot","json"=>1] + $antiBot;
        $opts = ['http' =>['method'  => 'POST','header' => $ua,'content' => http_build_query($data)]];
        $r = json_decode(file_get_contents($api_url.'/in.php', false, stream_context_create($opts)),1);
        $id = $r["request"];
        while(true){
            load();
            $r = json_decode(file_get_contents($api_url."/res.php?key=".$apikey."&action=get&id=".$id."&json=1"),1);
            $status = $r["status"];
            if($r["request"] == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}
            if($status == 1){print rr;print bps_anbot();$r["request"];return "+".str_replace(",","+",$r["request"]);}
            return 0;
        }
}
Function antibotXev($source,$api_url,$apikey,$delay){
    a:
    $bot1=explode('\"',explode('rel=\"',$source)[1])[0];
    $bot2=explode('\"',explode('rel=\"',$source)[2])[0];
    $bot3=explode('\"',explode('rel=\"',$source)[3])[0];
    $main = explode('"',explode('data:image/png;base64,', $source)[1])[0];
    $img1 = explode('"',explode('data:image/png;base64,', $source)[2])[0];
    $img2 = explode('"',explode('data:image/png;base64,', $source)[3])[0];
    $img3 = explode('"',explode('data:image/png;base64,', $source)[4])[0];
    if(!$bot1){ goto a;}
    $ua = "Content-type: application/x-www-form-urlencoded";
    $data = array('key' => $apikey,'method' => 'antibot','main' => $main,$bot1 => $img1,$bot2 => $img2,$bot3 => $img3);
    $opts = array('http' => array('header'  => $ua,'method' => 'POST','content' => http_build_query($data)));
    $context  = stream_context_create($opts);
    $response = file_get_contents($api_url."/in.php", false, $context);
    $task = explode('OK|', $response)[1];
    if($task){
        while(true){$r2 = file_get_contents($api_url."/res.php?key=".$apikey."&id=".$task);
            $hasil = explode('OK|', $r2)[1];
            $antb = explode(',', $hasil);
            if($hasil){
                print rr;print bps_anbot();
                return "+".implode("+", $antb);
                break;
            }else if($r2 == "CAPCHA_NOT_READY"){print rr;load();sleep($delay);print rr;continue;}else{return 0;}
        }
    }else{goto a;}
}
Function Pesan($data=null,$isi){
    $len = 9;$lenstr = $len-strlen($isi);
    if($data == 0 ){
        return w3." [".p.$isi.w3."] ".p;
    }elseif($data == 1){
        return w3." [".p.$isi.str_repeat(" ",$lenstr).w3."]".panah.p;
    }elseif($data == 2){
        return inpo[$isi];
    }elseif($data == 3){
        return inpo1[$isi];
    }elseif($data == 4){
        return inpo2[$isi];
    }elseif($data == 5){
        return " ".mp." ".$isi." ".d." ";
    }
}
Function Inpoku($isi){
    return inpo[$isi];
}
Function Menu($no, $menu){
    return print w3." [".p.$no.w3."] ".p.$menu.n;
}
Function Select($nomor){
    return print " Input : ";
}
Function Riwayat($newdata,$data=0){
    if(!$data){$data = [];}
    return array_merge($data,$newdata);
}
Function SaveCokUa(){
    cl();
    ban();
    if(!file_exists(cok)){
        Print p." cookie :".n;
        Save(cok);
    }
    if(!file_exists(uag)){
        Print p." useragent :".n;
        Save(uag);
    }
}
