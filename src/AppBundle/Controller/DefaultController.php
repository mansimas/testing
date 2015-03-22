<?php

namespace AppBundle\Controller;

use AppBundle\Document\Customer;
use ONGR\ElasticsearchBundle\DSL\Query\MatchAllQuery;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/app/example", name="homepage")
     */
    public function indexAction()
    {

        $manager = $this->get('es.manager');
        $repository = $manager->getRepository('AppBundle:Customer');
        $search = $repository->createSearch();
        $matchAllQuery = new MatchAllQuery();
        $search->addQuery($matchAllQuery);
        $results = $repository->execute($search);

        /*
        $content = new Customer("asdad", "asfdaf");

        $repository = $manager->getRepository('AppBundle:Customer');
        $content = $repository->remove(1); // 1 is the document id

        $manager->persist($content); //adds to bulk container
        $manager->commit(); //bulk data to index and flush
*/
        return $this->render('default/index.html.twig', array(
            'manager' => $results
        ));
    }


}
