<?php

class UserController
{

    public function index()
    {
        if (!isset($_SESSION['user'])) {
            include(VIEW . "/login.php");
        } else {
            header("Location:" . URL . "/profile");
        }
    }

    public function connextion_login($username, $password)
    {

        $req = new UserModel();
        // data user via file csv
        $verified = $req->readUser($username, $password);
        if ($verified) {
            $_SESSION['user'] = $username;
            $_SESSION['role'] = "admin";

            // Redirect to the profile page upon successful login
            header("Location:" . URL . "/profile");
        } else {
            // session_start();
            $_SESSION["error"] = "error";
            header("Location:" . URL . "/login");
            // echo "<script>alert('nom du utilisateur ou password incorrect!)</script>";
        }
    }

    public function profile()
    {
        $user = isset($_SESSION['user']) ? $_SESSION['user'] : '';
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
        include(VIEW . "/profile.php");
    }

    public function logout()
    {
        // Start the session if it's not already started
        // Destroy the session
        unset($_SESSION["user"]);
        unset($_SESSION["role"]);

        // Redirect to the login page after logout
        header("Location:" . URL . "/accueil");
    }
}
