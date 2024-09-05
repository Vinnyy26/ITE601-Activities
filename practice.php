<?php

 class Payroll {

       private string $firstname;
       private string $lastname;


       private int  $tax = 50;
       private int  $salary = 500;




    public function computeNet() {
     $net = $this->tax - $this->salary;  
    }    

    public function getEmployeeName (); string {
     return $this->firstname. ",".$this->lastname;

    }





 }   

 $computeNet = new computeNet ();

 echo "Employee Name". $computeNet->getEmployeeName() . <"br/>";
 echo "Net". $getEmployeeName->getcomputNet();

?>