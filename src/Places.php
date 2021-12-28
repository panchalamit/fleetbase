<?php 
namespace Fleetbase;

$docRoot = dirname(__DIR__);
$basepath = str_replace("/vendor/amitpanchal/fleetbase","", $docRoot);
require_once $basepath.'/vendor/autoload.php';


class Places {
     /**
     * get IP address of the user
     *
     * @return void
     */
    public function list()
    {
        $headers= array('Authorization' => 'Bearer flb_live_6pHEcNFoSKHLFqsWc3Sm');

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        
        // $client = new \GuzzleHttp\Client([
        //     'headers' => $headers
        // ]);
 
        $r = $client->request('GET', 'https://api.fleetbase.io/v1/drivers');
        $response = $r->getBody()->getContents();
        
        echo "working";
        echo $response;die;
    }
}

// $a = new Places();
// $a->list();


?>
