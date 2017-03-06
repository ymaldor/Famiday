<?php
namespace App\Controller;
use App\Controller\AppController;


class AccountsController extends AppController{
    
    function index()
    {
        
        
    }
    function workouts()
    {
        $this->loadModel("Workouts");
        $w=$this->workouts->find();
    }
}