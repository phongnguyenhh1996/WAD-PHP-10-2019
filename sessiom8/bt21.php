<?php
  class User {
    public $email;
    public $password;
    public $phone;
    public $address;
    private function Add() {
      echo "Add";
    }
    private function List() {
      echo "List";
    }
    public function Edit() {
      echo "Edit";
    }
    public function Register() {
      echo "Register";
    }
    public function Login() {
      echo "Login";
    }
    public function View() {
      echo "View";
    }
  }
  class Customer extends User {
    public $idCustomer;
    public $sendAddress;
    public function Pay() {
      echo "Pay";
    }
    public function History() {
      echo "History";
    }
  }
  $customer = new Customer;
  $customer->Pay();
?>