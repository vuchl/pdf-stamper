<?php

namespace Vuchl\PdfStamper;

class Stamp
{
	private $file;

	private $position;	// top[left|right], bottom[left|right], left, right, center, [x, y]

	private $offset;	// [x => -5, 'y' => 6]

	public function __construct($file, $position = 'center', $offset = array('x' => 0,'y' => 0))
	{
		if(!$this->_validateStampFile($file))
		{
			throw new Exception("Path to file ins Stamp costructor must not be null", 1);
		}
		$this->file = $file;
		$this->position =$position
		$this->offset = $offset;
	}

	private function _validateStampFile($file)
	{
		return is_file($file);
	}
}