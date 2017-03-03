<?php

class ESignatureField extends TextField 
{
	public function __construct($name, $title = null, $value = null) 
	{
		// Include third party requirements
		Requirements::javascript(THIRDPARTY_DIR . '/jquery/jquery.js');
		Requirements::javascript(THIRDPARTY_DIR . '/jquery-entwine/dist/jquery.entwine-dist.js');

		// Import the signature pad library
		Requirements::javascript(SIGMOD_DIR . "/signature_pad/signature_pad.js");

		// Import initialisation of the signature pad and related styling
		Requirements::javascript(SIGMOD_DIR . "/js/esignature.js");
		Requirements::css(SIGMOD_DIR . "/css/esignature.css");
		
		$this->addExtraClass('esignature');

		parent::__construct($name, $title, $value);
	}
}
