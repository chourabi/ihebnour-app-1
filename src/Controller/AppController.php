<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController {


    /**
    * @Route("/hello")
    */
    public function hello() : Response
    {
        $number = random_int(0,100);



        return $this->render('app/hello.html.twig',[
            'number'=>$number
        ]);
    }

    /**
    * @Route("/hi")
    */
    public function hi(): Response
    {

        $contactList = [
            [ 'fullname'=>"iheb test" , 'phone'=>'11233666' ],
            [ 'fullname'=>"nour test" , 'phone'=>'11233666' ],
            
            
        ];
        return $this->render('app/hi.html.twig',[
            'contacts'=>$contactList
        ]);
    }
    


} 




?>