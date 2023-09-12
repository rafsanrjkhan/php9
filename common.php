<?php

// Import the Bank and Example namespaces
use App\Bank\Bank as Bank;
use App\Account\Bank as ExampleBank;

// Require the necessary files
require "account.php";
require "bank.php";

// Create instances of the classes
new Bank();
echo "<br>";
new ExampleBank();
