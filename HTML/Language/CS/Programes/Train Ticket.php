<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>C# : Train Ticket Reservation </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../style/vendors/mdi/css/materialdesignicons.min.css">
 
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../../../css/css.css">
    <!-- End layout styles -->
  </head>
<body>
<?php include('../../Header.html');?>
  <?php include('../CS slide.php');?>


 <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
     
              <div class="container-fluid ">
          
               
          
                  <!-- Title -->
                  <h2 class="text-center font-weight-bold">Train Ticket Reservation</h2>
<div class="card">
<div class="card-body">
                 <!-- Title -->
                  <h4 class=" dark-grey-text font-weight-bold">In this Programm,We can get the Passengers Details ,
                    Check Train Seat avilabelity and Display the Ticket Fair. </h4>
             
              </div>
            </div>
              
            <h3 class=" my-4 mb-4 dark-grey-text font-weight-bold">Code :- </h3>
                  <pre class="code-codebar">
                
                      <font color ="color:blue">

using System;

namespace Reservation
{
  class Program
  {
    static void Main(string[] args)
    {
     
      Console.WriteLine("Enter Your First Name :");
      string fname = Console.ReadLine();
      Console.WriteLine("Enter Your Second Name :");
      string sname = Console.ReadLine();
      Console.WriteLine("Enter Your Gender :");
      string gen = Console.ReadLine();
      Console.WriteLine("Enter You Age :");
      int age =Convert.ToInt32(Console.ReadLine());
      Console.WriteLine("Enter Your From Place :");
      string from = Console.ReadLine();
      Console.WriteLine("Enter Your Destination Place :");
      string to = Console.ReadLine();
      int ticket =50;
      Console.WriteLine("Ticket Amount :"+ticket);
      Console.WriteLine("Enter Total Members for Travel :");
      int mem =Convert.ToInt32(Console.ReadLine());
      Console.WriteLine("Enter Date of Travel :");
      string date = Console.ReadLine();
 if(mem<=5)
 {
      Console.WriteLine("Done\n");
      Console.WriteLine("         "+"*******************************");
      Console.WriteLine("             "+"Passenger Ticket Detail");
      Console.WriteLine("         "+"*******************************");
      Console.WriteLine("           "+"Name"+"           "+":" +" "+fname+" "+sname);
      Console.WriteLine("           "+"Age"+"            "+":" +" "+age);
      Console.WriteLine("           "+"Gender"+"         "+":"+" " +gen);
      Console.WriteLine("           "+"No of Tickets"+"  "+":"+" "+mem);
      Console.WriteLine("           "+"From "+"          "+":"+" "+from);
      Console.WriteLine("           "+"Destination"+"    "+":"+" "+to);
      Console.WriteLine("           "+"Date of Travel"+" "+":"+" "+date);
      Console.WriteLine("           "+"Train Timing"+"   "+": 12:30"); 
      
switch (mem)                       
{
  case 1:
    Console.WriteLine("           "+"Seet No"+"        "+": E1");
    Console.WriteLine("           "+"Total Ticket"+"   "+": "+mem+"*"+ticket+"="+mem*ticket );
    break;
  case 2:
    Console.WriteLine("           "+"Seet No"+"        "+": E1,E2");
    Console.WriteLine("           "+"Total Ticket"+"   "+": "+mem+"*"+ticket+"="+mem*ticket );
    break;
  case 3:
    Console.WriteLine("           "+"Seet No"+"        "+": E1,E2,E3");
    Console.WriteLine("           "+"Total Ticket"+"   "+": "+mem+"*"+ticket+"="+mem*ticket );
    break;
  case 4: 
    Console.WriteLine("           "+"Seet No"+"        "+": E1,E2,E3,E4");
    Console.WriteLine("           "+"Total Ticket"+"   "+": "+mem+"*"+ticket+"="+mem*ticket );
    break;
  case 5:
    Console.WriteLine("           "+"Seet No"+"        "+": E1,E2,E3,E4,E5");
    Console.WriteLine("           "+"Total Ticket"+"   "+": "+mem+"*"+ticket+"="+mem*ticket );
    break;
  }
 }
  else
  {
      Console.WriteLine("          "+"*********************************");
      Console.WriteLine("           "+"Sorry..Only five Seets Avilable");
      Console.WriteLine("          "+"*********************************");
      }
    }
  }
}
</font>
                    </pre>
                            
                         
<hr>
<h3 class=" my-4 mb-4 dark-grey-text font-weight-bold">Output :- </h3>
                 
          
<pre class="code-codebar1 ">
<img src="../img/train-ticket.png" alt="Italian Trulli">
                          </pre>
          
                  
          
          
              </div>
          
              </div>
            </div>
            
        
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
       <!-- container-scroller -->
       <script src="../../style/vendors/js/vendor.bundle.base.js"></script>
       <script src="../../../../js/misc.js"></script>