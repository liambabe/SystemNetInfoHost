<?php
namespace OPNsense\SystemNetInfoHost;
class IndexController extends \OPNsense\Base\IndexController
{
	public function indexAction()
	{
		$this->view->pick('OPNsense/SystemNetInfoHost/index');
	}
}
