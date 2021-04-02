<?php

class DashboardController extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION['userID'])) {
            $this->goHome();
        }
    }
    public function index($order = 'name')
    {
        $this->loadmodel("FavoritesModel");
        $favorites = $this->FavoritesModel->findAllByUserId($order);

        $this->render('index', ['favorites' => $favorites]);
    }
    public function profile()
    {
        $this->loadmodel('UsersModel');
        $data = $this->UsersModel->getOne($_SESSION['userID']);
        $this->render('profile', $data);
    }
}
