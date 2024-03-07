<?php

declare(strict_types=1);

session_start();

require_once 'UserRepository.php';

class User {
    private $user_id;
    private $name;
    private $address;
    private $email;
    private $phone;

    public function __construct(int $_user_id, string $_name, string $_email) {
        $this->user_id = $_user_id;
        $this->name = $_name;
        $this->email = $_email;
    }

    public function set_address(string $address) {
        $this->address = $address;
    }

    public function set_phone(string $phone) {
        $this->phone = $phone;
    }

    public function get_id(): int {
        return $this->user_id;
    }

    public function get_name(): string {
        return $this->name;
    }

    public function get_email(): string {
        return $this->email;
    }

    public function get_address(): string {
        return $this->address;
    }

    public function get_phone(): string {
        return $this->phone;
    }
};

class Authenticate {

    private $userRepository;

    public function __construct() {

        require_once '../config/database.php';
        $this->userRepository = new UserRepository($pdo);

    }

    private function Validate(string $name, string $email, string $password, string $confirm_password): array {

        $errors = [];

        if (empty($name) || empty($email) || empty($password) || empty($confirm_password)) {
            $errors["incomplete_form"] = "Please fill all fields";
        }
        if ($password !== $confirm_password) {
            $errors["passwords_unmatch"] = "Passwords do not match";
        }
        if (strlen($password) < 5) {
            $errors["short_password"] = "Password must be at least 5 characters long";
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["invalid_email"] = "The email you provided is invalid";
        }
        if ($this->userRepository->user_exists($email)) {
            $errors["user_exists"] = "A user with that email already exists";
        }

        return $errors;
    }

    public function signup(string $name, string $email, string $password, string $confirm_password) {

        $validate_provided_details = $this->Validate($name, $email, $password, $confirm_password);

        if (empty($validate_provided_details)) {
            $save_new_user_in_db_and_get_id = $this->userRepository->create_user($name, $email, $password);
            $create_new_user_instance = new User(intval($save_new_user_in_db_and_get_id), $name, $email);
            // save user details in session
            $_SESSION["user"] = $create_new_user_instance;
            header("Location: ../index.php");
            die();
        } else {
            $_SESSION["signup_errors"] = $validate_provided_details;
            header("location: ../templates/signup.php");
            die();
        }
    }

    public function login(string $email, string $password) {

    }

};