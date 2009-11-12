<?
require 'twitter.lib.php';
require 'twitter.account.config.php';
 $twitter = new Twitter($config['account'], $config['password']);
 $mentions = $twitter->getMentions();

$xml = new SimpleXMLElement($mentions);

foreach ($xml->status as $key => $status) {
	// printf("%s from id : %s  using %s \n",$status->text,$status->user->name,$status->source);	
	print_r($status);
}

?>