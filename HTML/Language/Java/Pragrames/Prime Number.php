<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Java : Prime Numbers </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../style/vendors/mdi/css/materialdesignicons.min.css">
 
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="../../../../css/css.css">
    <!-- End layout styles -->
  </head>
<body>
<?php include('../../Header.html');?>
  <?php include('../java slide.php');?>


 <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
     
              <div class="container-fluid ">
          
               
          
                  <!-- Title -->
                  <h2 class="text-center font-weight-bold">Prime Numbers</h2>
<div class="card">
<div class="card-body">
                  <!-- Description -->
                  <p>Prime number in Java: **Prime number** is a number that is greater than 1 and divided by 1 or itself only.
                     In other words, prime numbers can't be divided by other numbers than itself or 1.
                      For example 2, 3, 5, 7, 11, 13, 17.... are the prime numbers.</p>
         
                      <h4 class=" font-weight-bold">  Note: 0 and 1 are not prime numbers. The 2 is the only even prime number because all the other even numbers can be divided by 2. </h4>
          <p>Let's see the prime number program in java. In this java program, we will take a number variable and check whether the number is prime or not.</P>
</div>
</div>          
          
               
          
                <hr class="my-3">
          
                <!-- Section: -->
                <section>
          
                  <!-- Title -->
                  <h4 class="mb-4 dark-grey-text font-weight-bold">1. Prime Number Program using Method in Java </h4>
               </h4>
              
               
                  <pre class="code-codebar">
                      <font color ="color:blue">
public class fibo1
 {
  public static void main(String args[]){ 
  checkPrime(1);  
  checkPrime(3);  
  checkPrime(17);  
  checkPrime(20);  
 } 
static void checkPrime(int n) {    
 int i=2;
 if(n==0||n==1)
  {
   System.out.println(n+"is  not prime number");
  }
  else
  {
   if(n%i==0) //If any number modulo by 2 equals to 0. Then it is not prime Number.
   { 
    System.out.println(n+"is not prime number");
   }
   else
    {
     System.out.println(n+ "is a prime number");
    }
   }
 }
}
</font>
                    </pre>

          
                  <hr class="my-3">
          
                 
            
                    <!-- Title -->
                    <h4 class="mb-4 dark-grey-text font-weight-bold">2. Prime Number Program in Java (Another way) </h4>
                
               <p>You can also use a method where number is not predefined. Here, user has to put the number to check if the number is prime.</p>
                      <pre class="code-codebar syntaxhighlighter ">
                      <font color ="color:blue">
import java.util.Scanner;  
import java.util.Scanner;  
        
public class fibo2
 {
  public static void main(String[] args) 
  {  
   Scanner s = new Scanner(System.in);  
   System.out.print("Enter a number : ");  
   int n = s.nextInt();  
   if (isPrime(n)) 
    {  
     System.out.println(n + " is a prime number");  
    }
    else
     {  
      System.out.println(n + " is not a prime number");  
     }  
   }  
        
   public static boolean isPrime(int n)
    {  
     if (n <= 1)
      {  
       return false;  
      }  
     else
     {  
      if (n % 2 == 0) {  
      return false;  
     }  
    }  
   return true;  
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