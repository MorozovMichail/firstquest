<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use App\Entity\CourseOfTrading;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Model\ParsXml;
use JMS\Serializer\SerializerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DataParsCommand extends Command
{
    protected static $defaultName = 'app:data-pars';

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
        ;
    }

    private $container;

    public function __construct(ContainerInterface $container, SerializerInterface $serializer)
    {
        parent::__construct();
        $this->container = $container;

    }



    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $file=file_get_contents(__DIR__. "\mmvb.xml");
        $serializer=$this->container->get('jms_serializer');
        $traids = $serializer->deserialize($file, ParsXml::class , 'xml');

        $arre=$traids->getContent();


        $deleteQuery = $this->container->get('doctrine')
            ->getManager()
            ->createQueryBuilder('d')
            ->delete(CourseOfTrading::class, 'd')
            ->where('d.id > 0')->getQuery();
        $deleted = $deleteQuery->getResult();

        for($i=0;$i<count($arre);$i=$i+1)
        {
            $newarr=$arre[$i];

            $entityManager = $this->container->get('doctrine')->getManager();
            $product = new CourseOfTrading();
            $product->setSECNAME($newarr->getSECNAME());
            $product->setSHORTNAME($newarr->getSHORTNAME());
            $product->setLATNAME($newarr->getLATNAME());
            $product->setLASTTOPREVPRICE($newarr->getLASTTOPREVPRICE());
            $product->setVOLTODAY($newarr->getVOLTODAY());
            $product->setLASTOFFER($newarr->getLASTOFFER());
            $date = new \DateTime($newarr->getSYSTIME());
            $product->setSYSTIME($date);
            $entityManager->persist($product);
            $entityManager->flush();

        }



        $io = new SymfonyStyle($input, $output);

        $io->success("The file was parsed and the table's data was updated");

        return 0;
    }
}
