<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 2/24/2023
 * File: salaried_employee.class.php
 * Description:
 */

class SalariedEmployee extends Employee {

    private float $weekly_salary;

    public function __construct($weekly_salary) {
        $this->weekly_salary = $weekly_salary;
    }

    public function getWeeklySalary(): float{
        return $this->weekly_salary;
    }

    public function getPaymentAmount(): float{
        return self::getPaymentAmount();
    }

    public function toString() {
        return $this->getWeeklySalary() . ', total amount: ' . $this->getPaymentAmount();
    }
}
?>