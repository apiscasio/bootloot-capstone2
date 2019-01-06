<?php 
	$paypal = new \PayPal\Rest\ApiContext(

		// new \PayPal\Auth\OAuthTokenCredential("<clientID>", "<secret>")
		new \PayPal\Auth\OAuthTokenCredential("AXJyYTIGQvZS8kuxSC_NDDZezbj4PvJ9Psm5i_IT0TmYspfcSpd4saLuB-W_4ZDnfRTbTPJtJqY5oIxP", "EOkoIRy-Ksn_RqPoOAauX4KzbJRpW0y-BX032M7qJMw8QwWQEPo1e4nS6xjGmZkrOsut3uEhtmz3YF4A")
	);

?>