<?php

function createUser($pdo){
    try {
        $query = "insert into utilisateurs(nomUser, prenomUser, loginUser, passWordUser, role) values (:nomUser, :prenomUser, :loginUser, :passWordUser, :role)";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'loginUser' => $_POST['login'],
            'passWordUser' => $_POST['mot_de_passe'],
            'role' => 'user'
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function connexionUser($pdo)
{
    try {
        $query = "select * from users where userEmail = :userEmail and userMotdepasse = :userMotdepasse";
        $connectUser = $pdo->prepare($query);
        $connectUser->execute([
            'userEmail' => $_POST["email"],
            'userMotdepasse' => $_POST["mot_de_passe"]
        ]);
        $user = $connectUser->fetch();
        if($user){
            $_SESSION['user'] = $user;
        }
    } catch (PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
//function ChercherUser($pdo){
//    try {
//        $query = "select * from utilisateurs where loginUser=:loginUser and passWordUser=:passWordUser";
 //       $chercheUser = $pdo->prepare($query);
 //       $chercheUser->execute([
 //           'loginUser' => $_POST['login'],
 //           'passWordUser' => $_POST['mot_de_passe']
  //      ]);
  //      $user=$chercheUser -> fetch();
       
 //       if ($user) {
  //          $_SESSION['user']=$user;
//        }
 //   } catch (PDOException $e) {
  //      $message = $e->getMessage();
    //    die($message);
 //   }
//}
function UpdateUser($pdo)
{
    try {
        $query = "update utilisateurs set nomUser=:nomUser, prenomUser =:prenomUser, emailUser=:emailUser, passWordUser=:passWordUser where id=:id";
        $changeUser = $pdo->prepare($query);
        $changeUser->execute([
            'nomUser' => $_POST['nom'],
            'prenomUser' => $_POST['prenom'],
            'passWordUser' => $_POST['mot_de_passe'],
            'emailUser' => $_POST['email'],
            'id' => $_SESSION["user"]->id
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function UpdateSession($pdo)
{
    try {
        $query = "select * from utilisateurs where id=:id";
        $chercheUser = $pdo->prepare($query);
        $chercheUser->execute([
            'id' => $_SESSION["user"]->id
        ]);
        $user=$chercheUser -> fetch();
        $_SESSION['user']=$user;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function DeleteUser($pdo){
    try{
        $query = "delete from users where userId =: id";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'userId' => $_SESSION["user"]->id
        ]);
        // $query = "update users set userNom = null where userId =: id";
        // $deleteUser = $pdo->prepare($query);
        // $deleteUser->execute([
        //     'userId' => $_SESSION["user"]->id
        // ]);
        // $query = "update users set userPrenom = null where userId =: id";
        // $deleteUser = $pdo->prepare($query);
        // $deleteUser->execute([
        //     'userId' => $_SESSION["user"]->id
        // ]);
        // $query = "update users set userEmail = null where userId =: id";
        // $deleteUser = $pdo->prepare($query);
        // $deleteUser->execute([
        //     'userId' => $_SESSION["user"]->id
        // ]);
        // $query = "update users set userMotdepasse = null where userId =: id";
        // $deleteUser = $pdo->prepare($query);
        // $deleteUser->execute([
        //     'userId' => $_SESSION["user"]->id
        // ]);
        // $query = "update users set userPseudo = 'Utilisateur supprimé' where userId =: id";
        // $deleteUser = $pdo->prepare($query);
        // $deleteUser->execute([
        //     'userId' => $_SESSION["user"]->id
        // ]);
    } catch(PDOExeption $e){
        $message = $e->getMessage();
        die($message);
    }
}

function deleteAllUsersDebats($pdo){
    try{
        $query = "delete from debat where userId =: id";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'userId' => $_SESSION["user"]->id
        ]);
        $query = "delete from note where userId =: id";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'userId' => $_SESSION["user"]->id
        ]);
        $query = "delete from sujet where userId =: id";
        $deleteUser = $pdo->prepare($query);
        $deleteUser->execute([
            'userId' => $_SESSION["user"]->id
        ]);
    } catch(PDOExeption $e){
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