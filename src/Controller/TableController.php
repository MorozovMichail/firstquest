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
        $i = 0;
        $j = 10;
        $em = $this->getDoctrine()
            ->getManager();
        $qb = $this->getDoctrine()->getManager();



        if ($request->isXmlHttpRequest()) {
            if($request->request->get('sortst')=="1")
            {
                $traids = $em->getRepository(CourseOfTrading::class)
                    ->getLatestBlogs();
                for($i=0;$i<30;$i=$i+1) {
                    $Data = $traids[$i]->getSYSTIME()->format('Y-m-d H:i:s');
                    $traids[$i]->setSYSTIME($Data);
                }
                return new JsonResponse($traids);
            }
            else {
                $why = $request->request->get('sortst');
                $direct = $request->request->get('direct');
                $traids =
                    $em->getRepository(CourseOfTrading::class)
                        ->kryb($why, $direct);

//getSYSTIME
                for($i=0;$i<30;$i=$i+1) {
                    $Data = $traids[$i]->getSYSTIME()->format('Y-m-d H:i:s');
                    $traids[$i]->setSYSTIME($Data);
                }
                return new JsonResponse($traids);
            }
        } else {
            $traids = $em->getRepository(CourseOfTrading::class)
                ->getLatestBlogs();
        return $this->render('table/index.html.twig', [
            'traids' => $traids, 'i' => $i, 'j' => $j
        ]);

        }



    }

    /**
* @Route("/ajax", name="ajax")
*/
    public function ajaxAction(Request $request)
    {   $param1= $request->request->get('n');
        $i=20;


        return new Response($i);
    }
}
