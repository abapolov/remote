<?php

namespace App\Twig;

use App\Services\JobsService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class AppExtension
 * @package App\Twig
 */
class AppExtension extends AbstractExtension
{
    /**
     * @var JobsService
     */
    private $jobsService;

    /**
     * AppExtension constructor.
     * @param JobsService $jobsService
     */
    public function __construct(JobsService $jobsService)
    {
        $this->jobsService = $jobsService;
    }

    /**
     * @return array|\Twig_Function[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('lastJobs', [ $this, 'getLastJobs' ]),
            new TwigFunction('categoryJobsCount', [ $this, 'getJobsCountByCategory' ]),
        ];
    }

    /**
     * Get last jobs by category
     *
     * @param int $category
     * @return mixed
     */
    public function getLastJobs(int $category)
    {
        return $this
            ->jobsService
            ->getLastJobsByCategory($category);
    }

    /**
     *
     *
     * @param int $category
     * @return int
     */
    public function getJobsCountByCategory(int $category)
    {
        return $this
            ->jobsService
            ->getJobsCountByCategory($category);
    }
}