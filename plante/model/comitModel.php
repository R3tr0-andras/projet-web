<?php 

function obtenirCommentaire($pdo, $itemId) {
    try {
        $query = "select * FROM comments WHERE itemId = :itemId";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'itemId' => $itemId
        ]);
        
        $comments = $statement->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}

function ajouterCommentaire($pdo, $itemId, $author, $content) {
    try {
        $query = "insert INTO comments (itemId, author, content) VALUES (:itemId, :author, :content)";
        $statement = $pdo->prepare($query);
        $statement->execute([
            'itemId' => $itemId,
            'author' => $author,
            'content' => $content
        ]);
        
        // Redirection vers la page des détails de l'élément après l'ajout du commentaire
        header("Location: /itemDetails?itemId=" . $itemId);
        exit();
    } catch (PDOException $e) {
        $message = $e->getMessage();
        die($message);
    }
}
   //+ function deletecomit($pdo)
//{
  //try {
    //    $query = 'delete from commit where  commitId= :commitId';
      //  $deleteOne = $pdo->prepare($query);
        //$deleteOne->execute([
          //  'commit' => $_GET["PlanteId"]
       // ]);
    //} catch (PDOException $e) {
      //  $message = $e->getmessage();
        //die($message);
    //}
//}