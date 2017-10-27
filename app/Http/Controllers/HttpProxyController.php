<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HttpProxyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		//return view('home');
		$len1 = strlen($request->getContent());
		$content_len = unpack("n", $request->getContent())[1];
		//return $len1 . " " . strlen($request->getContent());
		$raw_request = gzinflate(substr($request->getContent(), 2, $content_len));
		//return "Hello Proxy";

		$req_arr = explode("\r\n", $raw_request);
		$method_arr = explode(" ", $req_arr[0]);

		$method = $method_arr[0];
		$url = $method_arr[1];

		//return $method . " " . $url;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);

		if(strtoupper($method) == "POST")
		{
			curl_setopt($ch, CURLOPT_POST, 1);
		}

		$output = curl_exec($ch);
		curl_close($ch);

		return $output;
    }
}
