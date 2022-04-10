<?php
require_once '_connec.php';

$pdo = new \PDO(DSN, USER, PASS);

const ERROR_REQUIRED = 'Veuillez renseigner ce champ';
const ERROR_LENGTH = 'Le champ ne peut etre vide';

$errors = [
  'firstName' => '',
  'lastName' => ''
];

if($_SERVER['REQUEST_METHOD'] === 'POST'){


$firstName = trim($_POST['firstName']);
$lastName = trim($_POST['lastName']);

$query = 'insert into friend (firstname, lastname) values (:firstname, :lastname)';
$statement = $pdo->prepare($query);

$statement->bindvalue(':firstname', $firstName, \PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastName, \PDO::PARAM_STR);

$statement->execute();


if (!$firstName){
  $errors['firstName'] = ERROR_REQUIRED;
} 
elseif (!$lastName){
  $errors['lastName'] = ERROR_REQUIRED;
}
}

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchALL(PDO::FETCH_ASSOC);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form  action="header()"  method="post">
<form  action=""  method="post">
    <div>

      <label  for="firstName">Nom :</label>

      <input  type="text"  id="firstName"  name="firstName" required = "required">
      
      <?= $errors['firstName'] ? '<p>' . $errors['firstName'] . '</p>' : "" ?>
    </div>

    <div>

        <label  for="lastName">Prénom :</label>
  
        <input  type="text"  id="lastName"  name="lastName" required = "required">
        <?= $errors['lastName'] ? '<p>' . $errors['lastName'] . '</p>' : "" ?>

    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
</form>
<div class="table">
  <ul><?php foreach($friends as $friend){ ?>
    <li> <?php echo $friend['firstname'] . ' ' . $friend['lastname']?> </li>
    
    <?php
}
?>
   </ul>
</div>
</body>
</html>