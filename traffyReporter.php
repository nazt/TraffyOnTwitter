<?
require 'twitter.lib.php';
 $twitter = new Twitter("devtraffy", "devtraffytwitter789");
 $friend_timeline = $twitter->getFriendsTimeline();

$xml = new SimpleXMLElement($friend_timeline);

 
// var_dump( $xml->status);

foreach ($xml->status as $key => $status) {
	printf("%s from id : %s  using %s \n",$status->text,$status->user->name,$status->source);	
}

?>