<?php

namespace PEAR\Config;

/**
 * Dummy class for direct content output
 */
class Raw {

	private $content;

	public function __construct($content)
	{
		$this->content = $content;
	}
	public function __toString()
	{
		return $this->content;
	}
}