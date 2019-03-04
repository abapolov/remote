<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Job;
use App\Services\JobsService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class MainController
 * @package App\Controller
 */
class MainController extends AbstractController
{
    /**
     * @var JobsService
     */
    private $jobsService;

    /**
     * MainController constructor.
     * @param JobsService $jobsService
     */
    public function __construct(JobsService $jobsService)
    {
        $this->jobsService = $jobsService;
    }

    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'categories' => $this
                ->jobsService
                ->getAllCategories()
        ]);
    }

    /**
     * @Route("/category/{slug}/{page}", name="category_view")
     *
     * @param Category $category
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categoryView(Category $category, $page)
    {
        return $this->render('main/category.html.twig', [
            'current' => $category,
            'jobs'    => $this
                ->jobsService
                ->getPaginatedJobsByCategory($category, $page)
        ]);
    }

    /**
     * @Route("/job/{slug}", name="job_view")
     *
     * @param Job $job
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function jobView(Job $job)
    {
        return $this->render('main/job.html.twig', [
            'job' => $job
        ]);
    }

    /**
     * @Route("/search/", name="search")
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function search(Request $request)
    {
        return $this->render('@Site/Main/search.html.twig', [
            'jobs' => $this->jobsService->searchByWord($request->get('word'))
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function renderAsideCategoriesBar()
    {
        return $this->render('aside.html.twig', [
            'categories' => $this
                ->jobsService
                ->getAllCategories(),
        ]);
    }
}
