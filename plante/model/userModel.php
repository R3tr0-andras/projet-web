<?php

function CreerUser($pdo)
{
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
function connexionUser($pdo)
{
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
        $_SESSION['user'] = $user;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function modifierUser($pdo)
{
    try {
        $query = "update user set userName=:userName, userFname=:userFname, userPseudo=:userPseudo, userPassword=:userPassword, userEmail=:userEmail where userId = :userId";
        $ajouteUser = $pdo->prepare($query);
        $ajouteUser->execute([
            'userName' => $_POST['nom'],
            'userFname' => $_POST['Prenom'],
            'userPseudo' => $_POST['Pseudo'],
            'userEmail' => $_POST['Mail'],
            'userPassword' => $_POST['Password'],
            'userId' => $_SESSION['user']->userId
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
function supprimerUser($pdo)
{
    try {
        $query = "delete from user where userId = :userId";
        $ajoutUser = $pdo->prepare($query);
        $ajoutUser->execute([
            'userId' => $_SESSION['user']->userId
        ]);
        // Message à afficher après la suppression
        $messagedesuppri = "L'utilisateur a été supprimé avec succès.";

        // Fermer la session
        session_destroy();

        // Redirection vers la page d'accueil après 2 secondes
        header("refresh:2; url=index.php");
        exit();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }

    echo $messagedesuppri;
}
function selectionUsers($pdo){
    try {
        $query = "select * from user where userId !=:userId";
        $selectionUsers = $pdo->prepare($query);
        $selectionUsers ->execute([
            'userId' => $_SESSION['user'] -> userId
        ]);
        $alluser = $selectionUsers->fetchall();
        return $alluser;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectionConversation($pdo){
    try {
        $query = " SELECT * FROM user_conversation natural join conversation where userId = :userIdconnected and conversationId in (SELECT conversationId FROM user_conversation where userId =:userId) and conversationType = 'binaire';";
        $selectionConversation = $pdo->prepare($query);
        $selectionConversation ->execute([
            'userIdconnected' => $_SESSION['user'] -> userId,
            'userId' => $_GET['UserID']
        ]);
        $conversation = $selectionConversation->fetch();
        return $conversation;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function creerConversation($pdo)
{
    try {
        $query = "insert into conversation (conversationType) values ('binaire')";
        $creerConversation = $pdo->prepare($query);
        $creerConversation->execute();
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function creerUserConversation($pdo){
    try {
        $query = "insert into user_conversation(userId, conversationId) values (userId,1),(userIds,1);";
        $creerUserConversation = $pdo->prepare($query);
        $creerUserConversation->execute([
            'userId' => $_SESSION['user'] -> userId,
            'userIds' => $_GET['UserID']
        ]);
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function selectionMessage($pdo,$conversation){
    try {
        $query = "select * from message where userId=:userconnect || userId=:userId && conversationId=:conversationId";
        $selectionMessage = $pdo->prepare($query);
        $selectionMessage ->execute([
            'userconnect' => $_SESSION['user'] -> userId,
            'userId' => $_GET['UserID'],
            'conversationId'=>$conversation -> conversationId
        ]);
        $messages = $selectionMessage->fetchall();
        return $messages;
    } catch (PDOException $e) {
        $message = $e->getmessage();
        die($message);
    }
}
function ajouterMessage($pdo, $conversation) {
    try {
        $query = "INSERT INTO message (mesageText, messageDate, userId, conversationId) VALUES (:mesageText, :messageDate, :userId, :conversationId)";
        $ajouterUser = $pdo->prepare($query);
        $ajouterUser->execute([
            'mesageText' => $_POST['message'],
            'messageDate' => date('y/m/d'),
            'userId' => $_SESSION['user']->userId,
            //vérifie si $conversation est un objet avant d'essayer d'accéder à sa propriété "conversationId"
            'conversationId' => is_object($conversation) ? $conversation->conversationId : null,
        ]);
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}