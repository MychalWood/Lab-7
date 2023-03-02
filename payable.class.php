<?php
/**
 * Author: Adam Hineiti
 * Date: 2/24/2023
 * File: payable.class.php
 * Description:
 */

// this is our interface payable which is implemented by employee and invoice classes
interface Payable {

    // here we have created getPaymentAmount
    // created so that we can retrieve payment amounts
    public function getPaymentAmount();
}