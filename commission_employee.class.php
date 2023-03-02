<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 2/24/2023
 * File: commission_employee.class.php
 * Description:
 */

// requiring the employee.class.php page
require_once 'employee.class.php';

class CommissionEmployee extends Employee {
    // creating two properties that are private
    // the sales and commission rate
    private $sales;
    private $commission_rate;
    // here is the constructor and it is being defined with the three properties above
    // (sales, commission rate)
    public function __construct($sales, $commission_rate) {
        $this->sales = $sales;
        $this->commission_rate = $commission_rate;
        //PLEASE READ I can't figure out how to do the parent constructor call, it is giving me an error for that when
        //going to commit the file up to GitHub.
    }
    // public getter method for the sales
    public function getSales() {
        return $this->sales;
    }
    // public getter method for the commission rate
    public function getCommissionRate() {
        return $this->commission_rate;
    }
    // public getter method for the payment amount
    public function getPaymentAmount() {
        return self::getPaymentAmount();
    }
    public function toString() {
        return $this->getSales() . ' ' . $this->getCommissionRate() . ', total amount: ' . $this->getPaymentAmount();
    }
}