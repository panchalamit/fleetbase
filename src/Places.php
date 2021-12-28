<?php 
namespace Fleetbase;

$docRoot = dirname(__DIR__);
$basepath = str_replace("/vendor/amitpanchal/fleetbase","", $docRoot);
require_once $basepath.'/vendor/autoload.php';


class Places {
    /*
       Get drivers list api
    */
    public function view() 
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

    /*
       Create new driver api
    */
    public function create($request) 
    {
        $params = $request;
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
       
        $r = $client->request('POST', 'https://api.fleetbase.io/v1/drivers', ['form_params' =>$params]);
        $response = $r->getBody()->getContents();
        
        return $response;
    }

      /*
       find one particular driver record
    */
    public function findOne($request) 
    {
        $driverId = $request->id;
        // $headers= array('Authorization' => 'Bearer'.$bearerToken);
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');
        
        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $r = $client->request('GET', 'https://api.fleetbase.io/v1/drivers/'.$driverId);
        $response = $r->getBody()->getContents();

        return $response;
    }

    /*
       delete driver record api
    */
    public function delete($request) 
    {
        $driverId = $request->id;
        // $headers= array('Authorization' => 'Bearer'.$bearerToken);
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $r = $client->request('DELETE', 'https://api.fleetbase.io/v1/drivers/'.$driverId);
        $response = $r->getBody()->getContents();

        return $response;
    }

    /*
       update driver record api
    */
    public function update($request) 
    {
        $driverId = $request->id;

        // $headers= array('Authorization' => 'Bearer'.$bearerToken);
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');
        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);
        $request = $client->request('PUT','https://api.fleetbase.io/v1/drivers/'.$driverId, ['form_params' => $request]);
        $response = $request->getBody()->getContents();
        
        return $response;
    }
    
}
$places = new Places();
$places->list();

?>
