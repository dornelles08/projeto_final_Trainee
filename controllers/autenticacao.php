<?php  
	if(isset($_POST['entrar']) && $_POST['entrar'] == "login"){
		require_once ("../persistencias/persistenciaUsuario.php");

		$usuarioLogin = new Usuario("", "", "", "", $_POST['login'], $_POST['senha'], false);

		$usuario = persistenciaUsuario::buscar($usuarioLogin);

		if($usuario==null){
		    header("Location: ../index.php?info=1");
        }

		if($usuarioLogin->getLogin() == $usuario->getLogin()){
			if($usuario->getIsAdmin()){
			    setcookie("nome", $usuario->getNome());
			    setcookie("login", $usuario->getLogin());
			    header("Location: ../recursos/paginaAdmin.php");
            }else{
                header("Location: ../recursos/paginaUsuario.php");
            }
		}

	}
