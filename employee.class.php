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
    private $firstName;
    private $lastName;
    private $socialSecurityNumber;
    private $birthDate;
    private $person;

    // this line keeps track of all the empolyee objects created
    public static $employeeCount = 0;

    // defining the constructer which holds the properties we created above
    public function __construct($firstName, $lastName, $socialSecurityNumber, $birthDate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->socialSecurityNumber = $socialSecurityNumber;
        $this->birthDate = $birthDate;
        $this->person = new Person($firstName, $lastName, $birthDate);

        // increment the employee count each time a new one is created
        self::$employeeCount++;
    }

    // public getter method for first name
    public function getFirstName() {
        return $this->firstName;
    }

    // public getter method for last name
    public function getLastName() {
        return $this->lastName;
    }

    // public getter method for social security number
    public function getSocialSecurityNumber() {
        return $this->socialSecurityNumber;
    }

    // public getter method for birth date
    public function getBirthDate() {
        return $this->birthDate;
    }

    // public getter method for person
    public function getPerson() {
        return $this->person;
    }

    // abstract method for calculating the payment amount
    // *must be implemented by child classes*
    public abstract function getPaymentAmount();
}