<?php

namespace MY\MoneyBundle\Services;

use Doctrine\ORM\EntityManager;

class SidebarService
{
	protected $em;

	public function __construct(EntityManager $entityManager)
	{
		$this->em = $entityManager;
	}

	public function getNav($user)
	{
		$accounts = $this->em
			->getRepository('MYMoneyBundle:Account')
            ->findBy(
                array('users' => $user),
                array(),
                10,
                0
            );
        return $accounts;
	}	
}