<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 2/24/2023
 * File: base_plus_commission_employee.class.php
 * Description:
 */

// requiring the employee.class.php page
require_once 'employee.class.php';

class BasePlusCommissionEmployee extends CommissionEmployee{

    private float $base_salary;

    public function __construct($base_salary){
        $this->base_salary = $base_salary;
    }

    public function getBaseSalary(): float {
        return $this->base_salary;
    }

    public function getPaymentAmount()
    {
        return parent::getPaymentAmount();
    }

    public function toString() {
        return $this->getBaseSalary() . ' ' . $this->getCommissionRate() . ', total amount: ' . $this->getPaymentAmount();
    }
}
?>

