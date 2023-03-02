<?php
/**
 * Author: Adam Hineiti
 * Date: 2/24/2023
 * File: employee.class.php
 * Description:
 */

// requiring the person.class.php page
require_once('person.class.php');

// requiring the payable.class.php
require_once('payable.class.php');

// creating an abstract class named employee which implements the payable interface
abstract class Employee implements Payable {

    // declaring 5 private properties
    // (first name, last name, social security number, birth date, person)
    private $socialSecurityNumber;
    private $person;

    // this line keeps track of all the empolyee objects created
    private static $employeeCount;

    // defining the constructer which holds the properties we created above
    public function __construct($person, $socialSecurityNumber) {
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->person = $person;

        // increment the employee count each time a new one is created
        self::$employeeCount++;
    }

    // public getter method for social security number
    public function getSocialSecurityNumber() {
        return $this->socialSecurityNumber;
    }

    // public getter method for person
    public function getPerson() {
        return $this->person;
    }

    // public getter for employee count
    public function getEmployeeCount() {
        return self::getEmployeeCount();
    }

    public function toString() {
        return "Name: " . $this->getName() ."SSN " . $this->getSocialSecurityNumber() . "Employee Count: " . $this->getEmployeeCount();
    }

    // abstract method for calculating the payment amount
    // *must be implemented by child classes*
    public abstract function getPaymentAmount();
}