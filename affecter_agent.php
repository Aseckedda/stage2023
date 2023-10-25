<?php
/* Inclure la configuration de la base de données
require_once('connexion.php'); 

// Récupérer les valeurs saisies pour id_agent et id_projet
$id_agent = $_POST['id_agent'];
$id_projet = $_POST['id_projet'];
$id_affectation = $_POST['id_affectation'];
// Requête SQL pour mettre à jour l'affectation
$sqlUpdateAffectation = "UPDATE affectation SET id_agent = :id_agent, id_projet = :id_projet WHERE id_affectation = :id_affectation";

// Préparation de la requête SQL
$stmt = $pdo->prepare($sqlUpdateAffectation);

// Liaison des valeurs
$stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
$stmt->bindValue(':id_projet', $id_projet, PDO::PARAM_INT);
$stmt->bindValue(':id_affectation', $id_affectation, PDO::PARAM_INT); 

// Exécution de la requête
if ($stmt->execute()) {
    echo "L'affectation a été mise à jour avec succès.";

    /* Mettre à jour la table AGENT 
    $sqlUpdateAgent = "UPDATE agent SET projet = :projet WHERE id_agent = :id_agent";
    $stmt = $pdo->prepare($sqlUpdateAgent);
    $stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
    $stmt->bindValue(':projet', $projet, PDO::PARAM_STR);
    if ($stmt->execute()) {
        header("location:tableau_bord_admin.php");
    } else {
        echo "Erreur lors de la mise à jour de la table Agent.";
    }
} else {
    echo "Erreur lors de la mise à jour de l'affectation.";
}

// Fermer la connexion PDO
$pdo = null;
$projet = "projet"; // Assurez-vous de définir la nouvelle valeur du projet
$sqlUpdateAgent = "UPDATE agent SET projet = :projet WHERE id_agent = :id_agent";
$stmt = $pdo->prepare($sqlUpdateAgent);
$stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
$stmt->bindValue(':projet', $projet, PDO::PARAM_STR);

if ($stmt->execute()) {
    header("location:tableau_bord_admin.php");
} else {
    echo "Erreur lors de la mise à jour de la table Agent.";
}
} else {
echo "Erreur lors de la mise à jour de l'affectation.";
}

$pdo = null;*/

?>

<?php
/*
// Inclure la configuration de la base de données
require_once('connexion.php'); 

// Récupérer les valeurs saisies pour id_agent, id_projet et id_affectation
$id_agent = $_POST['id_agent'];
$id_projet = $_POST['id_projet'];
$id_affectation = $_POST['id_affectation'];

// Requête SQL pour mettre à jour l'affectation
$sqlUpdateAffectation = "UPDATE affectation SET id_agent = :id_agent, id_projet = :id_projet WHERE id_affectation = :id_affectation";

// Préparation de la requête SQL
$stmt = $pdo->prepare($sqlUpdateAffectation);

// Liaison des valeurs
$stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
$stmt->bindValue(':id_projet', $id_projet, PDO::PARAM_INT);
$stmt->bindValue(':id_affectation', $id_affectation, PDO::PARAM_INT); 

// Exécution de la requête
if ($stmt->execute()) {
    echo "L'affectation a été mise à jour avec succès.";

    // Mettre à jour la table AGENT 
    $projet = "Nouvelle valeur du projet"; // Assurez-vous de définir la nouvelle valeur du projet
    $sqlUpdateAgent = "UPDATE agent SET projet = :projet WHERE id_agent = :id_agent";
    $stmt = $pdo->prepare($sqlUpdateAgent);
    $stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
    $stmt->bindValue(':projet', $projet, PDO::PARAM_STR);

    if ($stmt->execute()) {
        header("location:tableau_bord_admin.php");
    } else {
        echo "Erreur lors de la mise à jour de la table Agent.";
    }
} else {
    echo "Erreur lors de la mise à jour de l'affectation.";
}

// Fermer la connexion PDO
$pdo = null;



?> 
*/

// Inclure la configuration de la base de données
require_once('connexion.php'); 

// Récupérer les valeurs saisies pour id_agent et id_projet
$id_agent = $_POST['id_agent'];
$id_projet = $_POST['id_projet'];

// Requête SQL pour obtenir le nom du projet correspondant à l'ID du projet
$sqlGetProjectName = "SELECT nom_projet FROM projet WHERE id_projet = :id_projet";

// Préparation de la requête SQL
$stmt = $pdo->prepare($sqlGetProjectName);
$stmt->bindValue(':id_projet', $id_projet, PDO::PARAM_INT);

// Exécution de la requête pour obtenir le nom du projet
if ($stmt->execute()) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $nom_projet = $row['nom_projet'];

    // Requête SQL pour mettre à jour la table "agent" avec le nouveau projet
    $sqlUpdateAgent = "UPDATE agent SET projet = :nom_projet WHERE id_agent = :id_agent";

    // Préparation de la requête SQL
    $stmt = $pdo->prepare($sqlUpdateAgent);

    // Liaison des valeurs
    $stmt->bindValue(':id_agent', $id_agent, PDO::PARAM_INT);
    $stmt->bindValue(':nom_projet', $nom_projet, PDO::PARAM_STR);

    // Exécution de la requête
    if ($stmt->execute()) {
        echo "L'agent a été affecté au nouveau projet '$nom_projet' avec succès.";
        header("location:index.php");
    } else {
        echo "Erreur lors de la mise à jour de l'agent.";
    }
} else {
    echo "Erreur lors de la récupération du nom du projet.";
}

// Fermer la connexion PDO
$pdo = null;
?>



