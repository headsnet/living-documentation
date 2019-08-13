<?php
declare(strict_types=1);

namespace Headsnet\LivingDocumentation\Console;

use Headsnet\LivingDocumentation\Services\AnnotationLoader;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Command
 */
class PublishCommand extends Command
{
    /**
     * @var AnnotationLoader
     */
    private $parser;

    /**
     * Constructor
     *
     * @param AnnotationLoader $parser
     */
	public function __construct(AnnotationLoader $parser)
	{
		parent::__construct();

        $this->parser = $parser;
    }

	/**
	 * Configure the Symfony command
	 */
	protected function configure()
	{
		$this
			->setName('headsnet:livedoc:publish')
			->setDescription('Publish documentation')
            ->addArgument(
                'namespace',
                InputArgument::REQUIRED,
                'The namespace to process'
            )
            ->addOption(
                'context',
                'c',
                InputOption::VALUE_REQUIRED,
                'What is the name of the context?',
                'default'
            )
            ->addOption(
                'output',
                'o',
                InputOption::VALUE_REQUIRED,
                'Path to output directory',
                'docs/'
            )
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
        $this->parser->load(
            $input->getArgument('namespace'),
            $input->getOption('context'),
            $input->getOption('output')
        );
	}
}
