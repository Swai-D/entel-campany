<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
      //Home Controller
      public function index()
      {
        return view('index');
      }


      //service Controllers
      public function services_1()
      {
        return view('Service.services-1');
      }

      public function services_2()
      {
        return view('Service.services-2');
      }

      public function services_3()
      {
        return view('Service.services-3');
      }

      public function services_4()
      {
        return view('Service.services-4');
      }

      public function services_5()
      {
        return view('Service.services-5');
      }

      public function services_6()
      {
        return view('Service.services-6');
      }



      //Solutions Controllers
     public function solution_1()
     {
       return view('Grid.solution-1');
     }

     public function solution_2()
     {
       return view('Grid.solution-2');
     }

     public function solution_3()
     {
       return view('Grid.solution-3');
     }

     public function solution_4()
     {
       return view('Grid.solution-4');
     }


     //enterprice
     public function enterprice_1()
     {
       return view('Enterprice.enterprice-1');
     }

     public function enterprice_2()
     {
       return view('Enterprice.enterprice-2');
     }

     public function enterprice_3()
     {
       return view('Enterprice.enterprice-3');
     }


     //contact us
     public function contact_us()
     {
       return view('Contact.contact-us');
     }


     //single Services
     public function single_service_1()
     {
       return view('SingleService.single-service-1');
     }

     public function single_service_2()
     {
       return view('SingleService.single-service-2');
     }

     public function single_service_3()
     {
       return view('SingleService.single-service-3');
     }

     public function single_service_4()
     {
       return view('SingleService.single-service-4');
     }

     public function single_service_5()
     {
       return view('SingleService.single-service-5');
     }

     public function single_service_6()
     {
       return view('SingleService.single-service-6');
     }
}
