<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bitter</title>
  <!--feuille de style Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!--police personnalisée -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<a href="http://localhost/PHP/05/index.php" class="main-page-link">http://localhost/PHP/05/inscription.php</a>
  <?php
  //connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=twitter', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
  $id=0;

  // Insertion du tweet dans la base de données
  if($_POST){
      $_POST['pseudo'] = addslashes($_POST['pseudo']);
      $_POST['message'] = addslashes($_POST['message']);

      $pdo->exec("INSERT INTO tweet (pseudo, message, date_message) VALUES ('$_POST[pseudo]', '$_POST[message]', NOW())");
      $id++;
  }
  ?>
  <div class="container">
    <header>
      <!--bouton de rafraîchissement -->
      <h1 class="text-center mt-5">Bitter</h1>
      <button onclick="location.reload();" class="btn btn-sm btn-refresh float-right mr-3 mt-3">Refresh</button>
    </header>
    <main>
      <section id="form">
        <!--soumettre un nouveau tweet -->
        <form method="post" class="mb-3">
          <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required>
          </div>
          <div class="form-group">
            <textarea name="message" class="form-control" placeholder="Message" required maxlength="280"></textarea>
          </div>
          <input type="submit" value="tweeter" class="btn btn-maroon">
        </form>
      </section>
      <?php
        // Récupérer les tweets de la base de données et les afficher
        $r = $pdo->query('SELECT * FROM tweet ORDER BY date_message DESC');
        while($message = $r->fetch(PDO::FETCH_ASSOC)) {
          $profilePicId = crc32($message['pseudo']) % 1000;
          echo '<div class="card mt-4">';
          echo '<div class="card-header">';
          echo '<img src="https://picsum.photos/id/' . $profilePicId . '/50" alt="Profile picture" class="rounded-circle mr-2">';
          echo $message['pseudo'] . ' (' . $message['date_message'] . ')';
          // Afficher le pseudo et la date du tweet
          echo $message['pseudo'] . ' (' . $message['date_message'] . ')';
          echo '</div>';
          echo '<div class="card-body">';
          // Afficher le message du tweet
          echo $message['message'];
          echo '<br><img src="https://picsum.photos/id/' . $id .'/200" alt="Image description" class="img-fluid mt-2">';
          // Afficher les boutons d'action du tweet
          echo '<div class="post-actions mt-2">';
          echo '<button class="btn btn-link like-btn">Like</button>';
          echo '<button class="btn btn-link">Retweet</button>';
          echo '<button class="btn btn-link">Comment</button>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
          $id++;
        }
      ?>
    </main>
  </div>
  <!-- Afficher le pied de page -->
  <footer class="text-center mt-5">
    <p>&copy; 2023, Juan Kauffmann, G5, A1</p>
  </footer>
  <script>
    // Ajouter une fonctionnalité pour basculer l'état du bouton "Like"
    $(".like-btn").click(function() {
      $(this).toggleClass("liked");
    });
  </script>
</body>
</html>

