<?php

namespace Application\Cli\Command;

use Symfony\Component\Console\Command\Command,
	Symfony\Component\Console\Input\InputArgument,
	Symfony\Component\Console\Input\InputOption,
	Symfony\Component\Console\Input\InputInterface,
	Symfony\Component\Console\Output\OutputInterface;

use Symfony\Component\Process\Process;

class BuildService extends Command 
{

	protected function configure() 
	{
		$this->setName('service:build')
			->setDescription('Builds a project from the configured svn-repository')
			->setDefinition(array(
				new InputArgument('project', InputArgument::REQUIRED, 'the project to build'),
				new InputArgument('type', InputArgument::REQUIRED, 'type (eg. nightly'),
				new InputOption('output', null, null, 'the alternate output path'),
				new InputOption('ini', null, null, 'read from specified ini file'),
			))
			->setHelp(sprintf('%sBuilds a project from the configured svn-repository.%s', PHP_EOL, PHP_EOL))
		;
	}

	protected function execute(InputInterface $input, OutputInterface $output) 
	{
		$cmd = sprintf('ps -ef | grep %s', $input->getArgument('project'));
		$process = new Process($cmd);
		
		$output->writeln($process->getCommandLine());
		$test = $process->run();
		
		$output->writeln($test);
		
		$output->writeln($process->getOutput());
	}
}