<?php
/**
 * Author: Mychal Wood, Adam Hineiti, Aidan Tison
 * Date: 2/24/2023
 * File: invoice.class.php
 * Description:
 */

// adding the information from payable.class.php file to the current file
require_once('payable.class.php');

// creating class invoice which uses the payable interface
class Invoice implements Payable {

    // here we are declaring our private properties
    // part number, part description, quantity, and price per item
    private $partNumber;
    private $partDescription;
    private $quantity;
    private $pricePerItem;

    // defining our static property which keeps count on the number of invoice objects
    public static $invoiceCount = 0;

    // here we have the constructor which is being defined with the four properties above
    // (part number, part description, quantity, price per item)
    public function __construct($partNumber, $partDescription, $quantity, $pricePerItem) {
        $this->partNumber = $partNumber;
        $this->partDescription = $partDescription;
        $this->quantity = $quantity;
        $this->pricePerItem = $pricePerItem;

        // increment the invoice count we created each time an object is created
        self::$invoiceCount++;
    }

    // public getter method for part number
    public function getPartNumber() {
        return $this->partNumber;
    }

    // public getter method for part description
    public function getPartDescription() {
        return $this->partDescription;
    }

    // public getter method for quantity
    public function getQuantity() {
        return $this->quantity;
    }

    // public getter for price per item
    public function getPricePerItem() {
        return $this->pricePerItem;
    }

    // public getter for payment amount
    public function getPaymentAmount() {
        return $this->getQuantity() * $this->getPricePerItem();
    }

    // returns a formatted string which represents the objects of the invoice
    public function __toString() {
        return 'Part number: ' . $this->getPartNumber() . ' Quantity: ' . $this->getQuantity() . ' Price per item: ' . $this->getPricePerItem() . ' Payment: ' . $this->getPaymentAmount();
    }

    // public getter for invoice count
    public function getInvoiceCount() {
        return $this->invoiceCount;
    }

}