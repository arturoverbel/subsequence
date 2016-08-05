<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        return $this->render('default/subsequence.html.twig');
    } 

    /**
     * @Route("/calculate", name="calculate")
     */
    public function resultAction()
    {
        $service = $this->get('subsequence');

        $cases = $_POST['cases'];
        $length = $_POST['length'];
        $sequence = $_POST['sequence'];
        $weight = $_POST['weight'];



        $strInput = $cases . "\n";
        for( $i = 0; $i < $cases; $i++){

            $strInput .= $length[$i] . "\n";
            $strInput .= $sequence[$i] . "\n";


            $strInput .= $weight[$i];

            if( $i < $cases - 1) $strInput .= "\n";

        }


        $output = $service->run( $strInput );

        $result = explode("\n", $output);

        return $this->render('default/result.html.twig', array('result' => $result, 'sequence' => $sequence, 'weight' => $weight ) );
    }

}
