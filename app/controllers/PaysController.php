<?php

namespace app\Controllers;

use app\Models\Pays;
use kernel\Controller;
//  use kernel\Model;
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
        $pays=Pays::all();
        return new View('Pays/index.php',['pays'=>$pays]);
    }

    /**
     * return form edit
     *
     * @return object
     */
    public function edit()
    {
        $pays = Pays::find($_GET['pays']);
        return new View('pays/form.php', ['pays' => $pays]);
    }

    public function update()
    {

        $pays = Pays::find($_POST['pays']);
        $pays->name = $_POST['name'];
        $pays->save();

        header('Location:.?controller=Pays&action=index');
    }

    public function delete()
    {
        $pays = Pays::find($_GET['pays']);
        return new View('pays/confirmDelete.php', ['pays' => $pays]);
    }

    public function deleteConfirm()
    {
        $pays =Pays::find($_POST['pays']);
        $pays->delete();

        header('Location:.?controller=Pays&action=index');
    }
}