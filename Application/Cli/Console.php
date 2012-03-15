<?php

namespace Application\Cli;

use Symfony\Component\Console\Application;
use Application\Cli\Command;

class Console extends Application 
{
	public function __construct() 
	{
		parent::__construct('CLIp (CLI php)', '1.0');
		 
		$this->addCommands(array(
			new Command\ExampleCommand(),
		));
  }
}
