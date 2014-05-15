<?php    
ob_start();  
session_start();
$campaing_id = $_SESSION['campaign_id']; // Your suggestion , kept on getting error on index1.php
$campaignID = $_SESSION['campaignID']; // My Current one but i don't know where to insert the token to be added to contact
$aid = $_SESSION['apikey'];
$campaign = 'thepride';
if(isset($_POST['submit'])) 
{
	require_once dirname(__FILE__) . '/GetResponseAPI.class.php';
	  $api = new GetResponse($aid);
    $campaignName = $campaign;
    $subscriberName = 'FRIEND';
    $subscriberEmail = $_POST['email'];
    $result=  $api->getCampaigns('EQUALS',$campaign);
  	$campaigns = array_keys((array) $result);
	  $campaignId = array_pop($campaigns);
    $api->addContact($campaign_id, $subscriberName, $subscriberEmail);
}
	
?>
<div class="border">
<br />
       <iframe width="800" height="450" src="//www.youtube.com/embed/HH8ANZeAeD0" frameborder="0" allowfullscreen></iframe>
</div>
<form method="post" action="">
<input id="email" name="email" 
   data-placeholder="yes" value="Enter Your Email Here" onfocus="if(this.value=='Enter Your Email Here'){this.value=''};" onblur="if(this.value=='')
   {this.value='Enter Your Email Here'};" class="control pull-left email" style=" color:#999;margin-left:100px;" >
   <input type="submit" value="submit" name="submit" id="submit"/>
   <input type="hidden" name="webform_id" value="2760705" /> 
</form>
