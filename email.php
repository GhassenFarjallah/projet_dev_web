<!DOCTYPE html>
<html style="background-color:#F5F5F6;">
<head>
    <title>Confirmation d'abonnement</title>
    <style>
        html, body {
            margin: 0;
            padding: 0;
        }

        .image-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .image-container img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .text-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 10px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <?php 
        $email = $_POST['email'];
        $conn = new PDO('mysql:host=localhost;dbname=emails;charset=utf8', 'root', '');
        if (mysqli_connect_error()) {
            die('Connection Failed : ' . mysqli_connect_error());
        } else {
            $stmt = $conn->prepare('insert into emails (email) values (:email)');
            $stmt->execute(array('email' => $email));
        }
    ?>
    <div class="image-container">
        <img src="php.jpg" alt="Image">
        <div class="text-overlay">
            <h1>Abonnement confirmé</h1>
            <p>Merci de vous être abonné(e) à notre lettre d'information !</p>
            <p>Vous êtes désormais inscrit(e) pour recevoir les dernières actualités du Village SOS.</p>
            
            <p>En restant connecté(e) avec nous, vous recevrez les dernières nouvelles, histoires et mises à jour sur les activités de notre organisation et l'impact que nous avons dans la vie des enfants et des familles.</p>
            
            <p>Si vous avez des questions ou besoin de plus d'informations, n'hésitez pas à nous contacter.</p>
            
            <p>Nous vous encourageons à :</p>
            <ul>
                <li>En savoir plus sur le Village SOS et notre mission</li>
                <li>Lire des histoires inspirantes sur les enfants et les familles que nous avons soutenus</li>
                <li>Participer et soutenir nos initiatives par des dons ou du bénévolat</li>
                <li>Partager nos mises à jour avec vos amis et votre famille</li>
            </ul>
            
            <p>Merci de vous joindre à nous pour créer un avenir meilleur pour les enfants dans le besoin !</p>
        </div>
    </div>
</body>
</html>
