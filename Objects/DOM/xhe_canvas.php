<?php
////////////////////////////////////////////////////// Canvas ///////////////////////////////////////////////
class XHECanvas  extends XHEBaseDOMVisual
{
	/////////////////////////////////////// ��������� ������� //////////////////////////////////////////
	// server initialization
	function __construct($server,$password="")
	{    
		$this->server = $server;
		$this->password = $password;
		$this->prefix = "Canvas";
	}
	/////////////////////////////////////////////////////////////////////////////////////////////////////
};		
?>