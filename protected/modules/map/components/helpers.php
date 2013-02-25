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
		{
			if (!stristr($file, 'http'))
				$file = "$this->assetsUrl/javascripts/$file";

			$this->javascriptTag($file);
		}
	}

	public function coffeescripts($files)
	{
		foreach ($files as $file)
			$this->coffeescriptTag("$this->assetsUrl/javascripts/$file");
	}

	public function stylesheets($files)
	{
		foreach ($files as $file)
			$this->stylesheetTag("$this->assetsUrl/css/$file");
	}

	public function javascriptTag($src)
	{
		print "<script src='$src'></script>";
	}

	public function coffeescriptTag($src)
	{
		print "<script type='text/coffeescript' src='$src'></script>";
	}

	public function stylesheetTag($href)
	{
		print "<link rel='stylesheet' href='$href'>";
	}

	public function exportVarsToJS($vars)
	{
		echo "<script>";
		foreach ($vars as $name => $value)
		{
			echo "$name = '$value';";
		}
		echo "</script>";
	}
}
