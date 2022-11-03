<?php

namespace App\Controller;
use App\Model\LoginModel;

class LoginController extends Controller
{
    public static function index()
    {  
        parent::render('Login/FormLogin');
    }



    public static function form()
    {
        $model = new LoginModel();
            
        if(isset($_GET['id'])) 
        $model = $model->getById( (int) $_GET['id']);
        
        include VIEWS . 'Login/frmUser.php';

    }

    public static function save()
    {

        $model = new LoginModel();
        $model->id = $_POST['id'];
        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /login");
    }

    public static function delete()
    {

        $model = new LoginModel();

         if(isset($_GET['id'])) 
        $model->delete( (int) $_GET['id']);

        header("Location: /login/connected");
    }

    public static function auth()
    {
        $model = new LoginModel();

        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $usuario_logado = $model->autenticar();

        if ($usuario_logado !== null) {

            $_SESSION['usuario_logado'] = $usuario_logado;

            header("Location: /login/connected");

        } else
            header("Location: /login?erro=true");
    }


    public static function connected()
    {
        parent::isAuthenticated();
        $model = new LoginModel();
        $model->getAllRows();

        parent::render('Login/Connected', $model);
    }

    public static function logout()
    {
        unset($_SESSION['usuario_logado']);

        parent::isAuthenticated();
    }
}