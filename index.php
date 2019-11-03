<!DOCTYPE html>
 <html lang="en">
   <head>
   <meta charset="utf-8">
   <title>CV</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Playball|Ultra&display=swap" rel="stylesheet"> 
   </head>

   <body>
      
   	<h1 class="cv">CURRICULUM VITAE</h1>

      <div class="header">

         <div class="nom">
            <h1>PONTREMOLI Jean-Daniel</h1>
            <p>Né le 11/09/1974</p>
            <br>
            <p>32 Avenue Legrand - 13600 La Ciotat</p>
            <h2>+ 33 6 12 98 61 11</h2>
            <p>tigredebois13@hotmail.fr</p>
            <br><br>
            <p>Permis <strong>B</strong></p>
         </div>

         <div>
            <img src="full.jpg" class="photo">
         </div>
      </div>
         <nav>
            <ul>
             <li><a href="?formation"><u>Formations</u></h2></a></li>
             <li><a href="?experience_prof"><h2 class="titre"><u>Experience Professionnelle</u></h2></a></li>
             <li><a href="?loisirs"><h2 class="titre"><u>Loisirs</u></h2></a></li>
            </ul>
         </nav>

      <div>
      <?php
      if (isset($_GET ['formation'])) {
         include ('formation.php');
      }
//(isset($_GET))=> vérifie que le nom du lien est correct (?formation) si c 'est le cas => inclure (formation.php)//
      else if (isset($_GET ['experience_prof'])) {
         include ('experience_prof.php');
      }

      else if (isset($_GET ['loisirs'])) {
         include ('loisirs.php');
      }
      ?> 
      </div>
</body>
</html>