<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 20/10/16
 * Time: 14:40
 */

class TestClass
{
	public function testFunction() {
		if (new \DateTime() > new \DateTime() - 1)
			SpaceNamedClass::tryIt();
	}
}