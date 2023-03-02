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
    private $birthDate;

    // here is the constructer and it is being defined with the three properties above
    // (firstname, lastname, birthdate)
    public function __construct($firstName, $lastName, $birthDate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
    }

    // public getter method for the first name
    public function getFirstName() {
        return $this->firstName;
    }

    // public getter method for the last name
    public function getLastName() {
        return $this->lastName;
    }

    // public getter for the birthdate
    public function getBirthDate() {
        return $this->birthDate;
    }

    // returns a formatted string which represents the objects of person
    public function __toString() {
        return $this->getFirstName() . ' ' . $this->getLastName() . ', born on ' . $this->getBirthDate();
    }
}