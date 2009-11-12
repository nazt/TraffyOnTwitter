<?
require 'twitter.lib.php';
 $twitter = new Twitter("devtraffy", "devtraffytwitter789");
 $mentions = $twitter->getMentions();

$xml = new SimpleXMLElement($mentions);

foreach ($xml->status as $key => $status) {
	// printf("%s from id : %s  using %s \n",$status->text,$status->user->name,$status->source);	
	print_r($status);
}

?>