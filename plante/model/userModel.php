<?php

function createUser($pdo){
    try {
        $query = "insert into user(userName, userFname, userPseudo, userPassword, userEmail, userRole) values (:userName,:userFname,:userPseudo,:userPassword,:userEmail,:userRole)";
        $createUser = $pdo->prepare($query);
        $createUser->execute([
            'userName' => $_POST['nom'],
            'userFname' => $_POST['Prenom'],
            'userPseudo' => $_POST['Pseudo'],
            'userEmail' => $_POST['Mail'],
            'userPassword' => $_POST['Password'],
            'userRole' => 'user'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function conectuser($pdo){
    try {
        $query = "select * from user where userPseudo=:userPseudo and userEmail=:userEmail and userPassword=:userPassword";
        $modifyUser = $pdo->prepare($query);
        $modifyUser->execute([
            'userPseudo' => $_POST['pseudo'],
            'userEmail' => $_POST['email'],
            'userPassword' => $_POST['password'],
        ]);
        $user = $modifyUser->fetch();
        var_dump($user);
        $_SESSION['user']=$user;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function modifUser($pdo){
    try {
        $query = "update user set userName=:userName, userFname=:userFname, userPseudo=:userPseudo, userPassword=:userPassword, userEmail=:userEmail where userId = :userId";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userName' => $_POST['nom'],
            'userFname' => $_POST['Prenom'],
            'userPseudo' => $_POST['Pseudo'],
            'userEmail' => $_POST['Mail'],
            'userPassword' => $_POST['Password'],
            'userId' => $_SESSION['user'] -> userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function suppriUser($pdo){
    try {
        $query = "delete from user where userId = :userId";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userId' => $_SESSION['user'] -> userId 
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
/*try {
    $query = "SELECT * FROM biens";
    $ajoute = $pdo->prepare($query);
    $ajoute->execute();
    $biens = $ajoute->fetchAll();
} catch (PDOException $e) {
    $message = $e->getMessage();
    die($message);
}
echo '<pre>' , var_dump($biens) , '</pre>';*/