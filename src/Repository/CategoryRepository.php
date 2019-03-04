<?php

namespace App\Repository;

use App\Entity\Category;
use App\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Category|null find($id, $lockMode = null, $lockVersion = null)
 * @method Category|null findOneBy(array $criteria, array $orderBy = null)
 * @method Category[]    findAll()
 * @method Category[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategoryRepository extends ServiceEntityRepository
{
    /**
     * CategoryRepository constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Category::class);
    }

    /**
     * Find category by job title
     *
     * @param $title
     * @return Category|null
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function getCategory($title)
    {
        $categories = $this->findAll();

        foreach ($categories as $item) {
            foreach ($item->getKeyWords() as $keyword) {
                if (stripos($title, $keyword) !== false) {
                    $this->getEntityManager()->persist($item);
                    $this->getEntityManager()->flush();

                    return $item;
                }
            }
        }

        $other = $this->findOneBy([
            'slug' => 'all-other'
        ]);

        $this->getEntityManager()->persist($other);
        $this->getEntityManager()->flush();

        return $other;
    }

    /**
     * Get non empty categories
     *
     * @return mixed
     */
    public function getNonEmptyCategories()
    {
        return $this
            ->createQueryBuilder('c')
            ->select('c.id, c.name, c.slug, c.iconClass, COUNT(j.id) as jobs, c.updatedAt')
            ->join(Job::class, 'j', 'WITH', 'j.category = c.id')
            ->groupBy('c.id')
            ->getQuery()
            ->getResult();
    }
}
