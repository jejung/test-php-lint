<?php

namespace Another\GreatNamespace;

class TestClass
{
	public function testFunction() {
		if (new \DateTime() > new \DateTime() - 1)
			SpaceNamedClass::tryIt();
	}
}
