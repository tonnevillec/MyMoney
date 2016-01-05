<?php

namespace MY\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MYUserBundle extends Bundle
{
	public function getParent()
	{
		return 'FOSUserBundle';
	}
}
