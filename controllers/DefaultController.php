<?php
class DefaultController extends Controller
{
    public function index()
    {
        if (isset($_SESSION['userID'])) {
            header('Location: /dashboard');
        } else {
            $this->render('index');
        }
    }
}
