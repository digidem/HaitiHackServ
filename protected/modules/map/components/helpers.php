<?php

class Helper
{
	private $assetsUrl = "";

	function __construct($assetsUrl)
	{
		$this->assetsUrl = $assetsUrl;
	}

	public function javascripts($files)
	{
		foreach ($files as $file)
			$this->script_tag("$this->assetsUrl/javascripts/$file");
	}

	public function stylesheets($files)
	{
		foreach ($files as $file)
			$this->stylesheet_tag("$this->assetsUrl/css/$file");
	}

	public function script_tag($src)
	{
		print "<script src='$src'></script>";
	}

	public function stylesheet_tag($href)
	{
		print "<link rel='stylesheet' href='$href'>";
	}
}
