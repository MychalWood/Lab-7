<?php
/**
 * Author: Adam Hineiti
 * Date: 2/24/2023
 * File: person.class.php
 * Description:
 */

// Defining the class person
class Person {
    // creating three properties that are private
    // the persons first name, last name, and their birthdate
    private $firstName;
    private $lastName;

    // here is the constructer and it is being defined with the three properties above
    // (firstname, lastname)
    public function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // public getter method for the first name
    public function getFirstName() {
        return $this->firstName;
    }

    // public getter method for the last name
    public function getLastName() {
        return $this->lastName;
    }

    // returns a formatted string which represents the objects of person
    public function __toString() {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}