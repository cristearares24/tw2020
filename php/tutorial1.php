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

<body>
  <div class="content">

    <div id="listing">

      <div class="title">
        Stabilirea necesarului de materiale si estimarea bugetului
        <button class="btn" id="1" onclick="myFunction(this)">Citit</button>
      </div>
      <div class="continut">
        In functie de constructie (gratar, loc de joaca,
        gradina cu legume), trebuie sa stabilesti cat te costa amenajarea gradinii si materialele necesare. Bugetul este
        influentat de marimea terenului,
        materialele de constructie, elementele de decor si plantele alese. Stabileste o lista cu tot ce ai nevoie,
        astfel incat sa ai o idee cat mai exacta
        despre costurile amenajarii. In plus, daca alegi sa apelezi la ajutorul unui arhitect peisagist, trebuie sa ii
        comunici bugetul in care este
        necesar sa se incadreze, inainte de inceperea proiectului de amenajare a gradinii.
      </div>

      <div class="title">
        Pregatirea solului pentru zonele verzi
        <button class="btn" id="2" onclick="myFunction(this)">Citit</button>
      </div>

      <div class="continut">
        <ul>
          <li> fertilizarea pamantului pentru plantarea gazonului cu turba;</li>
          <li> nivelarea pamantului, astfel incat sa se evite acumularea de apa in anumite zone ale gradinii; </li>
          <li> indepartarea buruienilor si erbicidarea solului.</li>
        </ul>
      </div>

      <div class="title">
        Montarea unui sistem de drenaj
        <button class="btn" id="3" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        Sistemul de drenaj este format dintr-un ansamblu de tevi ingropate in pamant, care preiau surplusul de apa si il
        evacueaza in bazinul de scurgere.
        Apa preluata poate fi folosita apoi pentru sistemul de irigatii.
      </div>

      <div class="title">
        Montarea sistemului de irigatii
        <button class="btn" id="4" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        Acesta este format din programator, senzor de ploaie, electrovane, tevi,
        hidrofor, aspersoare pop-up si este
        util pentru udarea gazonului. Sistemul de irigatii poate fi programat la orele alese, iar senzorul de ploaie va
        opri sistemul de irigatii atunci
        cand ploua, tocmai pentru a evita consumul inutil de apa.
      </div>

      <div class="title">
        Montarea sau plantarea gazonului
        <button class="btn" id="5" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        <ul>
          <li>
            plantarea gazonului – poti face insamantarea folosind o masina speciala pentru insamanatare sau poti opta
            pentru plantarea manuala,
            amestecand semintele cu nisip. Pentru 100 de metri patrati ai nevoie de 3-5 kilograme de seminte.
            Incorporeaza semintele in sol folosind
            o grebla si acopera-le cu un strat de pamant cu o grosime de 1-2 centimetri. Insamantarea gazonului trebuie
            facuta intr-o zi fara vant,
            cand pamantul este cald, nu inainte de sau dupa o zi ploioasa. Dupa plantarea semintelor de gazon, uda cu
            apa din abundenta, fara un jet
            puternic, deoarece acesta poate deplasa semintele.
          </li>
          <li>
            montarea rulourilor de gazon – acestea se monteaza rapid si usor. Dupa ce ai pregatit solul si ai turnat un
            strat de nisip,
            poti incepe sa montezi rulourile, unul cate unul. Este o varianta comoda, iarba este deja crescuta uniform
            pe toata peluza si nu
            necesita multe lucrari de ingrijire in primele saptamani.
          </li>
        </ul>
      </div>

      <div class="title">
        Stabilirea cailor de acces
        <button class="btn" id="6" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        Acestea trebuie sa deserveasca nevoilor de deplasare si, totodata, sa fie in
        armonie cu designul gradinii.
        In functie de stilul ales, poti opta pentru carari de lemn, cu placi de marmura sau gresie ori doar cu pietris.
      </div>

      <div class="title">
        Plantarea florilor si a pomilor
        <button class="btn" id="7" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        Sapa cateva gropi in functie de numarul de flori sau de pomi alesi si adauga
        in groapa putin pamant
        fertil pentru a le ajuta sa se prinda mai usor. Uda cu apa din abundenta in primele saptamani, astfel incat sa
        facilitezi procesul de inradacinare.
        O varianta mai simpla este alegerea unor plante in ghivece, pe care trebuie doar sa amplasezi in diferite locuri
        din gradina. Tine cont de faptul
        ca cele mai potrivite perioade pentru plantare sunt primavara si toamna.
      </div>

      <div class="title">
        Montarea materialelor auxiliare
        <button class="btn" id="8" onclick="myFunction(this)">Citit</button>

      </div>

      <div class="continut">
        In functie de stilul ales pentru gradina ta, poti opta pentru montarea
        diferitelor decoratiuni de gradina sau
        piese de mobilier. Pentru o zona de relaxare alege un balansoar sau o bancuta, iar daca vrei sa organizezi
        petreceri in aer liber, contruieste un
        gratar. Adauga o masa si cateva scaune, un loc de joaca pentru copii, o fantana arteziana sau un iaz si nu uita
        sa iei in calcul si sistemele de
        iluminat. Pentru depozitarea uneltelor si a sculelor necesare pentru intretinerea ulterioara a gradinii poti
        chiar sa amenajezi si un spatiu de
        depozitare.
      </div>

    </div>
  </div>
  <button class="buton" id="quiz" onclick="startQuiz()">Start quiz</button>
  <script src="../tutorial1.js"></script>
</body>

<?php

require "footer.php";

?>