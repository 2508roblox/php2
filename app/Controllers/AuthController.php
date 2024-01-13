<?php 
use App\Libs\Controller;
class AuthController extends Controller {
    public function get ()  {
        return $this->view('frontend/login');
    }
    public function register ()  {
        return $this->view('frontend/register');
    }
    public function login ()  {
        return $this->view('frontend/login');
    }
}
