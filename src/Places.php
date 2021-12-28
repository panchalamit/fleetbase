<?php 
namespace Fleetbase;

$docRoot = dirname(__DIR__);
$basepath = str_replace("/vendor/amitpanchal/fleetbase","", $docRoot);
require_once $basepath.'/vendor/autoload.php';


class Places {
    //
    public function index() 
    {
        // $bearerToken = $request->bearerToken();
        // $headers= array('Authorization' => 'Bearer'.$bearerToken);

        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $r = $client->request('GET', 'https://api.fleetbase.io/v1/drivers');
        $response = $r->getBody()->getContents();

        return $response;
    }

    //
    public function create($request) 
    {
        $params = $request->input();
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
       
        $r = $client->request('POST', 'https://api.fleetbase.io/v1/drivers', ['form_params' =>$params]);
        $response = $r->getBody()->getContents();

        return $response;
    }
    
}

// $a = new Places();
// $a->list();


?>
