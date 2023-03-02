<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 3/2/2023
 * File: salaried_employee.class.php
 * Description:
 */

require_once 'employee.class.php';

class SalariedEmployee extends Employee {
    private $weekly_salary;

    public function __construct($weekly_salary) {
        $this->weekly_salary = $weekly_salary;
    }
    public function getWeeklySalary() {
        return $this->weekly_salary;
    }
    public function getPaymentAmount() {

    }
}