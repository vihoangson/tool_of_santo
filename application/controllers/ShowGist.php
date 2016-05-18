<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShowGist extends MY_Controller {

	public function index()
	{
		//============ ============  ============ ============
		//  Link guide: https://developer.github.com/v3/gists/
		//  API gist.github.com
		//============ ============  ============ ============

		// 
		$this->gist_user();

		// 
		$this->gist_detail_raw();
	}

	private function gist_user(){
		// Lấy list của 1 user
		$value = "https://api.github.com/users/vihoangson/gists";
		$result = $this->curl_get($value);
		$m = json_decode($result);
		?>
		<pre>
			<?php var_dump($m); ?>
		</pre>
		<?php
	}

	private function gist_detail_raw(){
		// Lấy chi tiết của 1 gist
		$value = "https://gist.githubusercontent.com/vihoangson/89ab60fe9bfa1d34892b/raw/384cfe35243fe625e1b71595ca5ad31c59e662a8/B%C3%AD%20k%C3%ADp%20v%C3%B5%20c%C3%B4ng%201000%20b%C3%A0i%20k%E1%BB%B9%20thu%E1%BA%ADt%20l%E1%BA%ADp%20tr%C3%ACnh%20c%E1%BB%A7a%20Nguy%E1%BB%85n%20T%E1%BA%A5n%20Tr%E1%BA%A7n%20Minh%20Khang.md";
		$result = $this->curl_get($value);
		echo "<pre>";
		echo htmlentities($result);
		echo "</pre>";
	}


	private function curl_get($url){
		$cookie = tmpfile();
		$userAgent = 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31' ;
		//$userAgent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';
		$ch = curl_init($url);
		$options = array(
			CURLOPT_CONNECTTIMEOUT => 20 ,
			CURLOPT_USERAGENT => $userAgent,
			CURLOPT_AUTOREFERER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_COOKIEFILE => $cookie,
			CURLOPT_COOKIEJAR => $cookie ,
			CURLOPT_SSL_VERIFYPEER => 0 ,
			CURLOPT_SSL_VERIFYHOST => 0
			);
		curl_setopt_array($ch, $options);
		$kl = curl_exec($ch);
		if($kl==false){
			$kl = file_get_contents($url);
		}
		$kl=preg_replace('/<script\b[^>]*>(.*?)<\/script>/i', "", $kl);
		$kl = preg_replace('#<script[^>]*>.*?</script>#is', '', $kl);
		$kl=preg_replace('/<ins\b[^>]*>(.*?)<\/ins>/i', "", $kl);
		curl_close($ch);
		return $kl;
	}		

}

/* End of file testGist.php */
/* Location: ./application/controllers/testGist.php */