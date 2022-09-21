<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Regoo..  </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../style/materialdesignicons.min.css">
 
    <!-- Layout styles -->
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../../../css/css.css">
    <!-- End layout styles -->
  </head>
<body>
<?php include('../Header.html');?>
  <?php include('../main slide.php');?>


 <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
     
            <div class=" ">
              <div class="container-fluid ">
          
                <!-- Section: Intro -->
                <section>
          
                  <!-- Title -->
                  <h2 class="mt-5 mb-3 font-weight-bold">Fibonacci series in Java</h2>
          
                  <!-- Description -->
                  <p>In fibonacci series, <em>next number is the sum of previous two numbers</em> for example 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55 etc. The first two numbers of fibonacci series are 0 and 1.</p>
          <p>There are two ways to write the fibonacci series program in java:</p>
          <ul>
          <li>Fibonacci Series without using recursion</li>
          <li>Fibonacci Series using recursion</li>
          </ul>
          
          
                </section>
                <!-- Section: Intro -->
          
                <hr class="my-4">
          
                <!-- Section: -->
                <section>
          
                  <!-- Title -->
                  <h4 class="mb-4 dark-grey-text font-weight-bold">1. Fibonacci Series in Java without using recursion </h4>
              
                  <!-- Section: Code -->
                  <section>
                  <pre class="code-codebar">
                      <font color ="color:blue">
 class Fibonacci
  {  
   public static void main(String args[])  
    {    
     int n1=0,n2=1,n3,i,count=10;    
     System.out.print(n1+&quot; &quot;+n2);   //printing 0 and 1    
     for(i=2;i&lt;count;++i)   //loop starts from 2 because 0 and 1 are already printed    
      {    
       n3=n1+n2;    
       System.out.print(&quot; &quot;+n3);    
       n1=n2;    
       n2=n3;    
      }        
    }
  }
</font>
                    </pre>

                  </section>
                  <h5 class="mb-4 dark-grey-text font-weight-bold">Output :- </h3>
                  <section>
          
                    <pre class="code-codebar">
                    <font color ="color:blue">
   0 1 1 2 3 5 8 13 21 34
</font>
                    </pre>
                  </section>
                  <!-- Section: Code -->
          
                  <hr class="my-4">
          
                  <!-- Section: -->
                  <section>
            
                    <!-- Title -->
                    <h4 class="mb-4font-weight-bold">2. Fibonacci Series using recursion in java </h4>
                
                    <!-- Section: Code -->
                    <section>
                      <pre class="code-codebar syntaxhighlighter ">
                      <font color ="color:blue">
class Fibonacci2
{  
   static int n1=0,n2=1,n3=0;    
   static void printFibonacci(int count)
    {    
     if(count>0)
      {    
       n3 = n1 + n2;    
       n1 = n2;    
       n2 = n3;    
       System.out.print(" "+n3);   
       printFibonacci(count-1);    
      }    
    }    
  public static void main(String args[])
  {    
   int count=10;    
   System.out.print(n1+" "+n2);   //printing 0 and 1    
   printFibonacci(count-2);   //n-2 because 2 numbers are already printed   
  }  
}
</font> 
                      </pre>
                    </section>
                    <h5 class="mb-4 dark-grey-text font-weight-bold">Output :- </h3>
                    <section>
            
                      <pre class="code-codebar">
                      <font color ="color:blue">
 0 1 1 2 3 5 8 13 21 34
</font>
                      </pre>
                    </section>
          
          
              </div>
          
              </div>
            </div>
            
        
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
       <!-- container-scroller -->
       <script src="../style/vendors/js/vendor.bundle.base.js"></script>
