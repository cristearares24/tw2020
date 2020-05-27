<?php

require "header.php";

?>

<main>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style/tutorial1.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Tutoriale</title>
</head>

<?php
require 'dbconnection.php';
?>

<body>
  <div class="content">
    <div id="listing">
      <?php
      $tutorialID = $_GET["tutorialID"];
      $pasi = mysqli_query($conn, "select title, content from steps where tutorialID =".$tutorialID);
      while ($row = mysqli_fetch_array($pasi)){
        echo "<div class=\"title\">";
        echo $row["title"];
        echo "</div>";
        echo "<div class=\"continut\">";
        echo $row["content"];
        echo "</div>";
      }
      $quizID = mysqli_query($conn, "select quizID from tutorials where tutorialID =".$tutorialID);
      $quizID = mysqli_fetch_array($quizID);
      $quizID = $quizID["quizID"];
      ?>
      <!-- <div class="title">
        Gratarul, foisorul sau umbrarul de gradina -->
        <!-- <button class="btn" id="1" onclick="myFunction(this)">Citit</button> -->
      <!-- </div>
      <div class="continut">
        Construirea unui gratar in gradina este modalitatea ideala pentru a petrece un weekend alaturi de prieteni sau
        de familie. Cand alegi locul unde vei construi gratarul, tine cont de faptul ca acesta trebuie sa fie cat mai
        aproape de casa si de o sursa de apa, iar terenul pe care vei turna fundatia trebuie sa fie bine drenat, astfel
        incat sa eviti acumularea de apa in jurul acestuia.
        Stabileste apoi dimensiunea gratarului, toarna fundatia si ridica zidurile de sustinere folosind caramizi sau
        blocuri de BCA. Construieste vatra gratarului (alcatuita dintr-o placa de beton) peste zidurile de sustinere,
        apoi poti trece la construirea propriu-zisa a cuptorului. Alege caramizi refractare, cu o latime de minimum trei
        centimetri, deoarece sunt rezistente la temperaturi inalte. Le vei lipi intre ele cu ajutorul mortarului.

        Deasupra cuptorului lasa o gaura unde vei construi cosul de fum. La final, elimina surplusul de mortar si
        slefuieste caramizile cu polizorul sau cu un glaspapir aspru.

        Un alt aspect de care trebuie sa tii cont este eliminarea riscului unui incendiu. Nu trebuie sa construiesti
        gratarul in apropiere de gardul de lemn sau sub crengile copacilor, deoarece pot sari scantei care vor provoca
        pagube.

        Pe langa gratarul din gradina, poti opta si pentru construirea unui foisor de lemn, care se va dovedi util in
        zilele ploioase. In plus, este locul ideal pentru relaxare, ferit de razele puternice ale soarelui.
      </div>

      <div class="title">
        Iazul sau helesteul din gradina -->
        <!-- <button class="btn" id="2" onclick="myFunction(this)">Citit</button> -->

      <!-- </div>

      <div class="continut">
        Amenajarea unui iaz in gradina nu este un proiect dificil si il poti realiza singur, cu putina indemanare.
        Primul pas consta in alegerea locului potrivit pentru amplasarea lui. Ideal este un loc umbros, ferit de lumina
        directa a soarelui.

        Sapa groapa in functie de adancimea dorita si apoi toarna cimentul. Dupa ce se usuca cimentul, decoreaza iazul
        cu cateva ghivece cu flori, plante, pietre si apoi umple helesteul cu apa.
      </div>

      <div class="title">
        Loc de joaca pentru copii -->
        <!-- <button class="btn" id="3" onclick="myFunction(this)">Citit</button> -->
      <!-- </div>

      <div class="continut">
        Ca sa amenajezi un loc de joaca pentru copii in gradina, nu ai nevoie de un spatiu foarte mare, ci doar de
        putina creativitate si indemanare. Locul de joaca trebuie sa fie colorat si desprins din universul povestilor,
        astfel incat sa ii starneasca interesul celui mic si sa il incurajeze sa petreaca mai mult timp in aer liber.

        Poti construi singur o casa din lemn sau poti achizitiona una deja asamblata din comert, din lemn sau din
        plastic. Alege o casuta amplasata la inaltime, astfel incat sa ii poti monta un tobogan si o scara, care sa ii
        incurajeze pe cei mici sa faca miscare.

        O alta idee este montarea unui leagan sau a unui balansoar, un mini-teren de baschet, o trambulina, o cutie cu
        nisip sau un hamac in care cei mici se pot odihni dupa cateva ore de joaca. Pentru zilele calduroase de vara
        alege o piscina gonflabila.

        Atunci cand amenajezi locul de joaca in gradina, foloseste cat mai multe obiecte colorate. Poti chiar sa cauti
        cateva obiecte cu personajele lor preferate din desene animate, astfel incat sa le starnesti si mai mult
        interesul pentru locul de joaca.

        Totodata, ai grija ca locul de joaca sa fie curat si ferit de pericole. Asigura-te ca obiectele folosite nu au
        colturi ascutite, iar daca nu poti amenaja locul de joaca direct pe iarba, monteaza pe sol dale de cauciuc.
      </div>

      <div class="title">
        Bucatarie exterioara -->
        <!-- <button class="btn" id="4" onclick="myFunction(this)">Citit</button> -->
      <!-- </div>

      <div class="continut">
        Pentru amenajarea unei bucatarii de vara in gradina ai doua optiuni: o poti construi ca o prelungirea a casei
        sau individual, in zona preferata din gradina. La fel ca in orice bucatarie, nu ar trebui sa iti lipseasca
        spatiul de lucru, o chiuveta, un aragaz sau o plita electrica, cateva spatii de depozitare, o zona de luat masa
        sau chiar si un frigider.

        Daca vrei sa amenajezi o bucatarie rustica, poti opta pentru construirea unui cuptor cu lemne. Piatra
        decorativa, completata cu elemente din lemn, este ideala pentru acest tip de bucatarie exterioara.

        Totodata, tine cont de faptul ca bucataria exterioara trebuie racordata la toate utilitatile (apa, gaze si
        curent electric). Daca nu ai experienta necesara, poti chema un specialist care sa efectueze toate aceste
        lucrari. Mai multe idei despre cum poti sa amenajezi o bucatarie in aer liber gasesti aici.
      </div>

      <div class="title">
        Gradina cu legume sau arbori fructiferi -->
        <!-- <button class="btn" id="5" onclick="myFunction(this)">Citit</button> -->
      <!-- </div>

      <div class="continut">
        Amenajarea unei gradini cu legume si pomi fructiferi este practica si, in acelasi timp, iti confera avantajul ca
        te vei bucura de alimente proaspete si sanatoase, plantate si ingrijite de tine. Daca iti organizezi gradina in
        mod eficient, gradinaritul va fi o placere.

        O idee practica este plantarea legumelor in padocuri de lemn, care nu necesita o investitie mare si sunt usor de
        amenajat. In plus, iti va ramane suficient spatiu ca sa amenajezi si un loc pentru relaxare in gradina.

        Pentru o mica livada in gradina, planteaza si cativa pomi fructiferi. Daca ai o gradina mica, poti opta pentru
        pomi fructiferi pitici, din soiuri precum ciresul, marul, caisul sau parul. In plus, poti crea si o mini-gradina
        cu plante aromatice, pe care le poti folosi la preparea diferitelor mancaruri, pentru un gust mai aromat. Uite
        cateva sfaturi pentru utilizarea plantelor aromatice.
      </div> -->

    </div>

  </div>
  <!-- <form action="./quiz.php?quizID=2" method="get"><button class="buton">Start quiz</button></form> -->

  <button class="buton" id="quiz"><a href="./quiz.php?quizID=<?php echo $quizID ?>">Start quiz</a></button>
  <!-- <script src="../tutorial2.js"></script> -->
</body>

<?php
require "footer.php";
?>