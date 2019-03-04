<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use App\Services\JobsService;

/**
 * Class GetJobsCommand
 * @package App\Command
 */
class GetJobsCommand extends Command
{
    /**
     * @var JobsService
     */
    private $jobsService;

    /**
     * GetJobsCommand constructor.
     * @param JobsService $jobsService
     */
    public function __construct(JobsService $jobsService)
    {
        $this->jobsService = $jobsService;

        parent::__construct();
    }

    /**
     * Command configuration
     */
    protected function configure()
    {
        $this
            ->setName('get:last:jobs')
            ->setDescription('Get last jobs')
            ->setHelp('This command allows you get last jobs from sources.');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int|void|null
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this
            ->jobsService
            ->getParseData();
    }
}