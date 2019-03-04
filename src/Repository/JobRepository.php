<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Job|null find($id, $lockMode = null, $lockVersion = null)
 * @method Job|null findOneBy(array $criteria, array $orderBy = null)
 * @method Job[]    findAll()
 * @method Job[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JobRepository extends ServiceEntityRepository
{
    /**
     * JobRepository constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Job::class);
    }

    /**
     * Search jobs by word
     *
     * @param $word
     * @return array
     */
    public function searchByWord(string $word)
    {
        return $this
            ->createQueryBuilder('j')
            ->where('j.title LIKE :word')
            ->setParameter('word', '%' . $word . '%')
            ->getQuery()
            ->getResult();
    }

    /**
     * Search job duplicates
     *
     * @param $title
     * @param $company
     * @param $applyUrl
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function searchSameJob($title, $company, $applyUrl)
    {
        return $this
            ->createQueryBuilder('j')
            ->where('j.title = :title')
            ->setParameter('title', $title)
            ->andWhere('j.company = :company')
            ->setParameter('company', $company)
            ->andWhere('j.applyUrl = :applyUrl')
            ->setParameter('applyUrl', $applyUrl)
            ->setMaxResults(1)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Get jobs by category
     *
     * @param string $slug
     * @return \Doctrine\ORM\Query
     */
    public function getJobsByCategory(string $slug)
    {
        return $this->createQueryBuilder('j')
            ->innerJoin('j.category', 'c')
            ->where('c.slug = :slug')
            ->setParameter('slug', $slug)
            ->orderBy('j.createdAt', 'DESC')
            ->getQuery();
    }

    /**
     * Get last jobs by category
     *
     * @param int $category
     * @param int $limit
     * @return mixed
     */
    public function getLastJobsByCategory(int $category, int $limit = 10)
    {
        return $this
            ->createQueryBuilder('j')
            ->where('j.category = :category')
            ->setParameter('category', $category)
            ->orderBy('j.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Get jobs count by category
     *
     * @param int $category
     * @return int
     */
    public function getJobsCountByCategory(int $category)
    {
        return count($this->findBy([
            'category' => $category
        ]));
    }

    /**
     * Get jobs by category for pagination
     *
     * @param Category $category
     * @return \Doctrine\ORM\Query
     */
    public function getCategoryJobsQuery(Category $category)
    {
        return $this
            ->createQueryBuilder('j')
            ->where('j.category = :category')
            ->setParameter('category', $category)
            ->getQuery();
    }
}
