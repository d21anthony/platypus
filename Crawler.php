<?php

class Crawler
{
	public function __construct()
	{
		$page = file_get_contents("htmlPage.html");

		$capture = preg_match('/<a href=\"([^\"]*)\">(.*)<\/a>/iU', $page);

		print_r($capture);
	}
}