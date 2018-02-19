<?php if (!defined("IN_WALLET")) { die("Auth Error!"); } ?>
<?php
//To enable developer mode (no need for an RPC server, replace this file with the snipet at https://gist.github.com/d3e148deb5969c0e4b60 

class Client {
	private $uri;
	private $jsonrpc;

	function __construct($host, $port, $user, $pass)
	{
		##$this->uri = "http://" . $user . ":" . $pass . "@" . $host . ":" . $port . "/json_rpc";
		$this->jsonrpc = new jsonRPCClient($this->uri);
	}

	function getBalance($user_session)
	{
	$ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getbalance"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
		##return $this->jsonrpc->getbalance("zelles(" . $user_session . ")", 6);
		//return 21;
	}

       function getAddress($user_session)
        {
	       $ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getaddress"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
	       
	       
                ##return $this->jsonrpc->getaccountaddress("zelles(" . $user_session . ")");
	}

	function getAddressList($user_session)
	{
		
		$ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getbalance"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
		
		##return $this->jsonrpc->getaddressesbyaccount("zelles(" . $user_session . ")");
		//return array("1test", "1test");
	}

	function getTransactionList($user_session)
	{
		
		
		$ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getbalance"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
		#return $this->jsonrpc->listtransactions("zelles(" . $user_session . ")", 10);
	}

	function getNewAddress($user_session)
	{
		
		$ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getbalance"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
		
		#return $this->jsonrpc->getnewaddress("zelles(" . $user_session . ")");
		//return "1test";
	}

	function withdraw($user_session, $address, $amount)
	{$ch = curl_init("127.0.0.1:18082/json_rpc");
		$headers = array(
    'Content-Type' => 'application/json'
);
$data = '{"jsonrpc":"2.0","id":"0","method":"getbalance"}';
		curl_setopt($ch, CURLOPT_HEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
return curl_exec($ch);
		
		#return $this->jsonrpc->sendfrom("zelles(" . $user_session . ")", $address, (float)$amount, 6);
		//return "ok wow";
	}
}
?>
