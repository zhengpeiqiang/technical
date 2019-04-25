<?php

function GetM($key,$return = '')
{
	if (isset($_GET[$key])) {
		return $_GET[$key];
	}else{
		return $return;
	}
}

function PostM($key,$return = '')
{
	if (isset($_POST[$key])) {
		return $_POST[$key];
	}else{
		return $return;
	}
}

/**
 *
 * CURL POST 数据
 *
 * @param string $url
 * @param array $data
 * @param array $timeOut 超时时间 (秒)
 * @return array
 */
function curlPost($url, $data, $post = true, $timeOut = false)
{
    $postData = array();

    foreach ($data as $k => $v) {
        if (is_array($v)) {
            foreach ($v as $_k => $_v) {
                $postData[] = $k . '[' . $_k . ']=' . $_v;
            }
        } else {
            $postData[] = $k . '=' . $v;
        }
    }
    $postData = implode('&', $postData);

    $headers = getAllHeaders();
    $headerArr = isset($headers['Serverfortest']) && strpos(strtolower($headers['Serverfortest']), 'test') !== false ? [
        "ServerForTest: Test"
    ] : [];

    $url = $post === true ? $url : $url . '&' . $postData;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArr);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIE, isset($headers['Cookie']) ? $headers['Cookie'] : '');
    if ($timeOut !== false) {
        curl_setopt($ch, CURLOPT_TIMEOUT, $timeOut);
    }
    if ($post === true) {
        // 指定post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // 添加变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    }
    $result = curl_exec($ch);
    if ($result === false) { // 出错则显示错误信息
        errorLog('curl 返回错误：' . curl_error($ch)); // 输出错误 $msg
    }
    curl_close($ch);

    return $result;
}

function get_client_ip(){
	if ($_SERVER['REMOTE_ADDR']) {
		$cip = $_SERVER['REMOTE_ADDR'];
	} elseif (getenv("REMOTE_ADDR")) {
		$cip = getenv("REMOTE_ADDR");
	} elseif (getenv("HTTP_CLIENT_IP")) {
		$cip = getenv("HTTP_CLIENT_IP");
	} else {
		$cip = "unknown";
	}
	return $cip;
}





?>