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

    /**
     * verify  the data send by users and save it on database
     *
     * @return object
     */
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $postData = [
                'name' => $_POST['name'],
                // Ajoutez d'autres champs si nécessaire
            ];

            // Instancier un nouvel objet Pays
            $newPays = new Pays();

            // Appeler la méthode create du modèle pour insérer les données
            $newPays->create($postData);

            // Rediriger vers la page d'index après la création
            header('Location: .?controller=Pays&action=index');
            exit; // Assurez-vous de terminer le script après la redirection
        } else {
            // Afficher le formulaire de création
            return new View('pays/createForm.php',$data=[]);
        }
    }
}