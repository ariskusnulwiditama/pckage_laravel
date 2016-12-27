<?php
namespace Malescast\Rate;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;

/**
* 
*/
class RateController extends Controller
{
	protected $guzzle;
	function __construct(Client $guzzle)
	{
		$this->guzzle = $guzzle;
	}

	public function index($from, $to){
		$request = $this->guzzle->request('GET','http://api.fixer.io/latest?base='.$from);
		$data = json_decode($request->getBody());
		echo "Rate untuk 1 $from ke $to adalah ".$data->rates->$to;
	}
}