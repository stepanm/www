<?php
// Include the WURFL Cloud Client
require_once 'WURFL/Client/Client.php';
 
// Create a configuration object
$config = new WurflCloud_Client_Config();
 
// Set your WURFL Cloud API Key - Change this to your own key
$config->api_key = '657055:JiyHgUhmxq3YsI4KjbzMXtAN7dB8aTEk';
 
// Create the WURFL Cloud Client
$client = new WurflCloud_Client_Client($config);
 
// Detect your device
$client->detectDevice();
// Use the capabilities 
if ($client->getDeviceCapability('is_Tablet')) { 
    echo "This is a Tablet device"; 
	$TypeDevice = Tablet;
	
} else { 

	if ($client->getDeviceCapability('is_smartphone')) { 
    echo "This is a Mobile device"; 
	$TypeDevice = Mobile;
	
} else { 
    echo "This is a Desktop device\n";
	$TypeDevice = Desktop;
}
    
}
echo "<br> resolution_width";
echo $client->getDeviceCapability('resolution_width');
echo "<br> resolution_height";
echo $client->getDeviceCapability('resolution_height');
echo "<br>";
?>
<img src="<?php echo $TypeDevice?>.jpg">

