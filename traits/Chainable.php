<?php

namespace Traits;

trait Chainable
{
	public function getMethods()
	{
		print_r( get_class_methods($this) );
	}

	public function __call( $method, $args )
	{
		print_r( 'call: ' . $method );
	}

	public static function __callStatic( $method, $args )
	{
		print_r( 'static call: ' . $method );
	}
}