<?php
ob_start();
session_start();
$aid = $_SESSION['apikey'];
$new_link = "";
require_once dirname(__FILE__) . '/GetResponseAPI.class.php';
$api = new GetResponse($aid);
$campaigns = $api->getCampaigns();
if(isset($_POST['submit'])) 
{
    if(isset($_POST['cid']))
	{
	$new_link = "./index2.php";
	$_SESSION['clickbankID'] = $cid;
	$_SESSION['apikey'] = $aid;
	$_SESSION['campaign_id'] = $seleted_campaing_id (selected $campaignID ); //Getting error when use yours
	$_SESSION['campaignID'] = $campaignID; // My one , getting my Campaign Token : 5G7a
	}
}

?>

<center>
<form method="post" action="">
    <h1 style="color:#0CF; font-family:Arial, Helvetica, sans-serif;">Enter your ID:</h1>
        <input type="text" value="" name ="cid" id="cid" />
	</br>
	</br>
	</br>
<select name="campaign_id">
	<?php foreach ( $campaigns as $campaignID => $value) { ?>
	<option value="<?php echo $campaignID;?>"><?php echo $value->name;?></option>    
	<?php } ?>
</select>
	<h1 style="color:#0CF; font-family:Arial, Helvetica, sans-serif;">Copy Your Link     Here</h1>
        <textarea style="width:500px; height:50px;"><?php echo $new_link;?></textarea><br /><br /><br />
   <input type="submit" value="submit" name="submit" id="submit"/>
</form>

</center>

