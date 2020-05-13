<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CourseOfTrading;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityManager;



class TableController extends AbstractController
{

    /**
     * @Route("/", name="table")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()
            ->getManager();
        $qb = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
                $why = $request->request->get('sortst');
                $direct = $request->request->get('direct');
                $count=$request->request->get('count');

                $traids = $em->getRepository(CourseOfTrading::class)
                        ->kryb($why, $direct, $count);
               foreach ($traids as $traid)
               {
                   $Data = $traid->getSYSTIME()->format('Y-m-d H:i:s');
                   $traid->setSYSTIME($Data);
               }
            $content=$this->renderView('table/table.html.twig', [
                'traids' => $traids]);
                return new Response($content);
        } else {
            $count=$em->getRepository(CourseOfTrading::class)
                ->countstr();
            $count=$count / 10;
            $count=ceil($count) ;
            $traids = $em->getRepository(CourseOfTrading::class)
                ->getLatestBlogs();
        return $this->render('table/index.html.twig', [
            'traids' => $traids,'count'=>$count
        ]);

        }



    }


}
