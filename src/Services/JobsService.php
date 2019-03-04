<?php

namespace App\Services;

use App\Entity\Category;
use App\Entity\Company;
use App\Entity\Job;
use App\Entity\Source;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class JobsService
 * @package App\Services
 */
class JobsService
{
    const PARSERS_PATH = "App\\Parsers\\";

    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * @var RouterInterface
     */
    private $router;

    private $knpPaginator;

    /**
     * JobsService constructor.
     * @param EntityManagerInterface $em
     * @param RouterInterface $router
     * @param PaginatorInterface $pagination
     */
    public function __construct(EntityManagerInterface $em, RouterInterface $router, PaginatorInterface $pagination)
    {
        $this->em     = $em;
        $this->router = $router;
        $this->knpPaginator = $pagination;
    }

    /**
     * Get parse data from sources
     *
     * Parse return array schema:
     *  array(
     *      1 => array(
     *         'source'            => 'Class name of source',
     *         'title'             => 'job title',
     *         'description'       => 'job description html',
     *         'apply_description' => 'apply description html',
     *         'apply_url'         => 'apply_url',
     *         'company'           => 'company name',
     *         'company_url'       => 'company url',
     *         'company_logo'      => 'logo url'
     *      ),
     * );
     *
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function getParseData()
    {
        $sources = $this
            ->em
            ->getRepository(Source::class)
            ->findAll();

        foreach ($sources as $source){
            $class       = self::PARSERS_PATH . $source->getClassName();
            $parseObject = new $class();
            $data        = $parseObject->parse();

            if(!empty($data)){
                $this->saveParsedData($data, $source);
            }
        }

    }

    /**
     * Save parsed data (trying without duplicates)
     *
     * @param $jobs
     * @param $source
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function saveParsedData($jobs, $source)
    {
        foreach ($jobs as $data) {
            $company = $this
                ->em
                ->getRepository(Company::class)
                ->searchSameCompany($data['company']);

            if (!$company) {
                $company = (new Company())
                    ->setName($data['company'])
                    ->setSiteUrl($data['company_url'])
                    ->setLogoPath($data['company_logo']);
            }

            $job = $this
                ->em
                ->getRepository(Job::class)
                ->searchSameJob($data['title'], $company->getId(), $data['apply_url']);

            if (!$job) {
                $job = (new Job())
                    ->setSource($source)
                    ->setCategory($this->em->getRepository(Category::class)->getCategory($data['title']))
                    ->setTitle($data['title'])
                    ->setSlug(uniqid())
                    ->setDescription($data['description'])
                    ->setApplyUrl($data['apply_url'])
                    ->setApplyDescription($data['apply_description'])
                    ->setCompany($company);

                $this->em->persist($job);
                $this->em->flush();
            }
        }
    }

    /**
     * Get all categories
     *
     * @return Category[]|Source[]|object[]
     */
    public function getAllCategories()
    {
        return $this
            ->em
            ->getRepository(Category::class)
            ->getNonEmptyCategories();
    }

    /**
     * Find job by slug
     *
     * @param string $slug
     * @return Job|object|null
     */
    public function findJobBySlug(string $slug)
    {
        return $this
            ->em
            ->getRepository(Job::class)
            ->findOneBy([
                'slug' => $slug
            ]);
    }

    /**
     * Search jobs by word
     *
     * @param string $word
     * @return array
     */
    public function searchByWord(string $word)
    {
        return $this
            ->em
            ->getRepository(Job::class)
            ->searchByWord($word);
    }

    /**
     * Get last jobs filtered by category
     *
     * @param int $category
     * @return mixed
     */
    public function getLastJobsByCategory(int $category)
    {
        return $this
            ->em
            ->getRepository(Job::class)
            ->getLastJobsByCategory($category);
    }

    /**
     * Get jobs count filtered by category
     *
     * @param int $category
     * @return int
     */
    public function getJobsCountByCategory(int $category)
    {
        return $this
            ->em
            ->getRepository(Job::class)
            ->getJobsCountByCategory($category);
    }

    /**
     * Get paginated jobs filtered by category
     *
     * @param Category $category
     * @param int $page
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function getPaginatedJobsByCategory(Category $category, int $page)
    {
        return $this->knpPaginator->paginate(
            $this
                ->em
                ->getRepository(Job::class)
                ->getCategoryJobsQuery($category),
            $page,
            20
        );
    }
}