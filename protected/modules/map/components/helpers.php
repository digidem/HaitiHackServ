<?php

class Helper
{
	private $assetsUrl = "";

	function __construct($assetsUrl)
	{
		$this->assetsUrl = $assetsUrl;
	}

	public function assets($files)
	{
		foreach ($files as $file)
		{
			if (stristr($file, '.js'))
			{
				if (!stristr($file, 'http'))
					$file = "$this->assetsUrl/javascripts/$file";

				$this->scriptTag("text/javascript", $file);
			}
			elseif (stristr($file, '.coffee'))
			{
				$this->scriptTag("text/coffeescript", "$this->assetsUrl/javascripts/$file");
			}
			elseif (stristr($file, '.css'))
			{
				$this->stylesheetTag("$this->assetsUrl/css/$file");
			}
		}
	}

	public function scriptTag($type, $src)
	{
		print "<script type='$type' src='$src'></script>";
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
