<?php

namespace TumblrDownloadr;


class TumblrDownloadr
{
	public function LogIn()
	{
		$client = new Tumblr\API\Client($consumerKey, $consumerSecret);
		$client->setToken($token, $tokenSecret);
	}
}