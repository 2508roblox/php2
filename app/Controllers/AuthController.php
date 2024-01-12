<?php 
use App\Libs\Controller;
class AuthController extends Controller {
    public function get ()  {
        return $this->view('frontend/login');
    }
}
