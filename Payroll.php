<?php

 class Payroll {

       private string $firstname = "Kev";
       private string $lastname = "Lucero";


       private int  $tax = 50;
       private int  $salary = 500;




    public function computeNet(): float {
        $net = $this->salary - $this->tax; 
        return $net;
    }    

    public function getEmployeeName (): string {
        return $this->firstname. " ".$this->lastname;

    }





 }   

 $Payroll = new Payroll ();

 echo "Employee Name: ". $Payroll->getEmployeeName() . "<br/>";
 echo "Net Pay: ". $Payroll->computeNet();

?>