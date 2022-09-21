<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>C# : Net Banking System </title>
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
                  <h3 class="text-center font-weight-bold">Net Banking System</h3>
<div class="card">
<div class="card-body">
                 <!-- Title -->
                  <h4 class=" dark-grey-text font-weight-bold">This is the Basic Program for Net-Banking. 
                      The Program Logics and Functions are given below</h4>
                      <ul>
                          <li class = "my-4">1. In first step, we are getting the User's Mobile Number and Password to login.
                              If the Password is correct. then it takes us to Receiver Details Section.
                          </li>
                          <pre class="code-codebar1">
<img src="../img/net-banking2.png" alt="Italian Trulli">
                          </pre>
                          <li class = "my-4">
                              2. If the entered password was incorrect. Then it takes us to " else " section.
                          </li>
                          <pre class="code-codebar1">
<img src="../img/net-banking1.png" alt="Italian Trulli">
                          </pre>
                          <li class = "my-4">
                              3. And in Second step, We are getting the Receiver Account details. Once all details
                              where given, " switch condition " Conforms the Receiver Account Details are Corrct or Not.  
                          </li>
                          <pre class="code-codebar1">
<img src="../img/net-banking3.png" alt="Italian Trulli">
                          </pre>
                          <li class = "my-4">
                            4. If the Transaction amount is higher then a balance " If condition " performed
                            and Display the current account balance for re-entering the transaction amount Less then Balance  
                        </li>
                        <pre class="code-codebar1">
<img src="../img/net-banking4.png" alt="Italian Trulli">
                        </pre>
                          <li class = "my-4">
                              4. If the Receiver details was correct, then enter the number " 0 " to Complete the Transaction.
                              Finaly the " Your Transaction Success " message appears
                          </li>
                          <li class = "my-4">
                            5. If the Receiver details was Incorrect, then enter the number " 1 " to Re-Enter the Receiver Details.
                        </li>
                        <li class = "my-4">
                            6. If we enter other number other insted of 0 and 1.Then " Enter a valid code " message appears.
                        </li>
                      </ul>
             
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
           
      Console.WriteLine("Enter Your Mobile Number : ");
      string mnumber = Console.ReadLine();
      Console.WriteLine("Enter Your Password : ");
      int pass=Convert.ToInt32(Console.ReadLine());
      int pass1=457812;//Password has been declared in Integer//
      int bal=58000;
      if(pass==pass1)
      {
          Console.WriteLine("You are Loged In Succesfully");
          Console.WriteLine("Enter 0 to check Balance (or) 1 to Fund Transfer");
          int check=Convert.ToInt32(Console.ReadLine());
       switch(check)
       {
           case 0:
           
           Console.WriteLine("Your Account Balance is "+bal+" Rs.");
           break;

           case 1:
        
              Console.WriteLine("Enter Receiver's Account Number :");
              string accnumber=Console.ReadLine();
              Console.WriteLine("Enter Receiver's IFSC Code :");
              string ifsc=Console.ReadLine();
              Console.WriteLine("Enter Receiver's Mobile Number :");
              string mobile=Console.ReadLine();
              Console.WriteLine("Enter Account Holder Name :");
              string name=Console.ReadLine();
              Console.WriteLine("Enter the Transaction Amount :");
              int amount=Convert.ToInt32(Console.ReadLine());

          if (amount<=bal)
          {
           //Display the Give details of Receiver//
           Console.WriteLine("          "+"*********************************************");
           Console.WriteLine("               "+"Check The Receiver Details and Conform");
           Console.WriteLine("          "+"*********************************************\n");
           Console.WriteLine("            "+"Account Number  "+"      : "+accnumber);
           Console.WriteLine("            "+"IFSC Code "+"            : "+ifsc);
           Console.WriteLine("            "+"Mobile Number "+"        : "+mobile);
           Console.WriteLine("            "+"Name "+"                 : "+name);
           Console.WriteLine("            "+"Transaction Amount "+"   : "+amount);
          }
          else
          {
              Console.WriteLine("          "+"**********************************************************************");
           Console.WriteLine("                 "+"Enter Amount for transaction is higher then Your Account Balance");
           Console.WriteLine("                 "+"Enter Amount Less then : "+bal);
           Console.WriteLine("             "+"**********************************************************************");
           Console.WriteLine("Enter the Transaction Amount :");
           int amount1=Convert.ToInt32(Console.ReadLine());  
            //Display the Give details of Receiver//
           Console.WriteLine("          "+"*********************************************");
           Console.WriteLine("               "+"Check The Receiver Details and Conform");
           Console.WriteLine("          "+"*********************************************\n");
           Console.WriteLine("            "+"Account Number  "+"      : "+accnumber);
           Console.WriteLine("            "+"IFSC Code "+"            : "+ifsc);
           Console.WriteLine("            "+"Mobile Number "+"        : "+mobile);
           Console.WriteLine("            "+"Name "+"                 : "+name);
           Console.WriteLine("            "+"Transaction Amount "+"   : "+amount1);
          }
           
           Console.WriteLine("Enter 0 to Continue Transaction (or) 1 to re-enter the details :");
           int check1=Convert.ToInt32(Console.ReadLine());
           switch(check1)
           {
               case 0:
               Console.WriteLine("          "+"******************************");
               Console.WriteLine("              "+"Your Transaction Success");
               Console.WriteLine("          "+"******************************");
               break;

               case 1:
               Console.WriteLine("          "+"******************************");
               Console.WriteLine("              "+"Re-enter the Details");
               Console.WriteLine("          "+"******************************");
              
               break;

               default:
               Console.WriteLine("          "+"******************************");
               Console.WriteLine("              "+"Enter a Valid code..");
               Console.WriteLine("          "+"******************************");
               break;


           }
           

           break;

           default:
           Console.WriteLine("Enter a Valid Code..");
           break;


       }

      }
      else
      {
          Console.WriteLine("          "+"*******************************************");
          Console.WriteLine("            "+"Entered Password is Incorrect...");
          Console.WriteLine("            "+"Please Check the password and Retry..");
          Console.WriteLine("          "+"*******************************************");
          
          
      }
    }
  }
}
</font>
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