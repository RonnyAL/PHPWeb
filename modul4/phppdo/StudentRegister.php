<?php
    require_once  'vendor/autoload.php';
    $loader = new Twig_Loader_FileSystem('templates');
    $twig = new Twig_Environment($loader);

	spl_autoload_register(function ($class_name) {
		require_once $class_name . '.class.php';
	});
    require_once 'auth_pdo.php'; 

    $studReg = new StudentRegister($db);

    if(isset($_GET['id']) && ctype_digit($_GET['id']))
    {
        $id = intval($_GET['id']);
        if($student = $studReg->visStudent($id)) {
            echo $twig->render('index.twig', array('student'=>$student));
        }
        else {
        	// Ingen poster
        	echo "Beklager, fant ingen poster!";
        }
    }
    else {
    	$studenter = $studReg->visAlle();
    	echo $twig->render('index.twig', array('studenter'=>$studenter));
    }