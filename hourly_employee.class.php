<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 3/2/2023
 * File: hourly_employee.class.php
 * Description:
 */

// requiring the employee.class.php page
require_once 'employee.class.php';
class HourlyEmployee extends Employee {
    // creating two properties that are private
    // the employee's wage and hours
    private $wage;
    private $hours;

    // here is the constructer and it is being defined with the three properties above
    // (wage, hours)
    public function __construct($wage, $hours) {
        $this->wage = $wage;
        $this->hours = $hours;
    }

    // public getter method for the wage
    public function getWage() {
        return $this->wage;
    }
    // public getter method for the hours
    public function getHours() {
        return $this->hours;
    }
    // public getter method for the payment amount
    public function getPaymentAmount() {
        return $this->getWage() * $this->getHours();
    }
    // returns a formatted string which represents the objects of hourly employee
    public function __toString() {
        return $this->getWage() . ' ' . $this->getHours() . ', total amount: ' . $this->getPaymentAmount();
    }
}