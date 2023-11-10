<?php

namespace app\Controllers;
use kernel\Controller;
use kernel\Model;
use kernel\View;

class PaysController extends Controller
{

    /**
     * return new view
     *
     * @return object
     */
    public function index()
    {
        $pays=Model::all();
        return new View('Pays/index.php',['pays'=>$pays]);
    }
}