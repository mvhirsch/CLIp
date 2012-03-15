<?php

namespace Application\Cli\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Process\Process;

class ExampleCommand extends Command 
{
	protected function configure() 
	{
		$this->setName('example:command')
			->setDescription('Just writes some stuff to std-output')
			->setDefinition(array(
				new InputArgument('echo', InputArgument::REQUIRED, 'echo this message'),
				new InputOption('justme', null, null, 'just output the echo message'),
			))
			->setHelp(sprintf('%sThis is an example command.%s', PHP_EOL, PHP_EOL))
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output) 
	{
		if (!$input->getOption('justme')) {
			$output->writeln("You're using the example command!");
		}

		$output->writeln($input->getArgument('echo'));
	}
}
