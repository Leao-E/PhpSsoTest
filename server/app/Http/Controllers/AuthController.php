<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Attaches the broker to the server
    public function attach () {}
    // Return the login page
    public function login () {}
    // Authenticate the users credentials and redirect to the target page
    public function authenticate () {}
    // If user is loggedin will do logout
    public function logout () {}
    // If user is loggedin will return user's info
    public function info () {}
}
