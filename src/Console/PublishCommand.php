<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Console;

use Headsnet\LivingDocumentation\Publisher\Publisher;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command
 */
class PublishCommand extends Command
{
    /**
     * @var Publisher
     */
    private $publisher;

    /**
     * Constructor
     *
     * @param Publisher $publisher
     */
	public function __construct(Publisher $publisher)
	{
		parent::__construct();

        $this->publisher = $publisher;
    }

	/**
	 * Configure the Symfony command
	 */
	protected function configure()
	{
		$this
			->setName('headsnet:livedoc:publish')
			->setDescription('Publish documentation')
            ->addArgument('namespace', InputArgument::REQUIRED, 'The namespace to process')
        ;
	}

	/**
	 * Execute the Symfony command
	 *
	 * @param InputInterface  $input
	 * @param OutputInterface $output
	 *
	 * @return void
	 * @throws \Exception
	 */
	protected function execute(InputInterface $input, OutputInterface $output)
	{
        $this->publisher->publish(
            $input->getArgument('namespace')
        );
	}
}
