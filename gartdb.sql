-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 12:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `answerID` int(11) NOT NULL,
  `answerString` varchar(30) NOT NULL,
  `questionID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answerID`, `answerString`, `questionID`) VALUES
(1, 'arhitect peisagist', 1),
(2, 'geolog', 1),
(3, 'inginer cadastru', 1),
(4, 'designer', 1),
(5, 'un strat de balast', 2),
(6, 'un ansamblu de tevi in pamant', 2),
(7, 'o retea de santuri', 2),
(8, 'un ansamblu de tevi pe sol', 2),
(9, '2', 3),
(10, '5-6', 3),
(11, '3-5', 3),
(12, '10-12', 3),
(13, 'primavara si toamna', 4),
(14, 'vara si primavara', 4),
(15, 'toamna si vara', 4),
(16, 'primavara', 4),
(17, 'bine nivelat', 5),
(18, 'bine drenat', 5),
(19, 'bine fertilizat', 5),
(20, 'in casa', 6),
(21, 'la soare', 6),
(22, 'la umbra', 6),
(23, 'un cuptor cu lemne', 7),
(24, 'un balansoar', 7),
(25, 'o plita electrica', 7),
(26, 'ciresul si marul', 8),
(27, 'ciresul si nucul', 8),
(28, 'nucul si prunul', 8),
(29, 'lemnul', 9),
(30, 'gresia', 9),
(31, 'caramida', 9),
(32, 'tufisuri cu lavanda', 10),
(33, 'bonsai', 10),
(34, 'tufisuri artificiale', 10),
(35, 'un gard de lemn', 11),
(36, 'un gard viu', 11),
(37, 'un bat', 11),
(38, 'negru si alb', 12),
(39, 'rosu si albastru', 12),
(40, 'alb si verde', 12),
(41, 'pe orizontala', 13),
(42, 'pe verticala', 13),
(43, 'oblic', 13),
(44, 'in trepte', 14),
(45, 'agatate', 14),
(46, 'nu se amplaseaza', 14),
(47, 'nu se poate rezolva', 15),
(48, 'adaugand apa', 15),
(49, 'cu pamant fertil din alte zone', 15),
(50, 'lemn', 16),
(51, 'piatra de rau', 16),
(52, 'caramida', 16);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `questionID` int(11) NOT NULL,
  `questionString` varchar(100) NOT NULL,
  `answerID` int(11) NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`questionID`, `questionString`, `answerID`, `quizID`) VALUES
(1, 'La cine poti apela cand vrei sa amenajezi gradina?', 1, 1),
(2, 'Din ce este alcatuit un sistem de drenaj?', 6, 1),
(3, 'Cate kilograme de seminte sunt necesare la 100mp?', 11, 1),
(4, 'Care sunt cele mai potrivite perioade pentru plantatie?', 13, 1),
(5, 'Cum trebuie sa fie terenul pe care construiesti gradina?', 18, 2),
(6, 'Care este locul potrivit pentru amplasarea unui iaz?', 22, 2),
(7, 'Ce poti construi pentru o bucatarie rustica?', 23, 2),
(8, 'Care dintre urmatorii sunt pomi fructiferi pitici?', 26, 2),
(9, 'Care este elementul central la gradinile rustice?', 29, 3),
(10, 'Ce fel de tufisuri sunt in gradinile frantuzesti?', 32, 3),
(11, 'Ce poti planta pentru a delimita spatiile cu flori?', 36, 3),
(12, 'Care sunt culorile predominante in gradinile moderne?', 40, 3),
(13, 'Cum trebuie ridicata o curte de dimensiune mica?', 42, 4),
(14, 'Cum trebuie aranjate florile intr-o curte in panta?', 44, 4),
(15, 'Cum se poate rezolva problema nisipului la mare?', 49, 4),
(16, 'Cu ce pot fi inlocuite pavajele in zona de munte?', 51, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `quizID` int(11) NOT NULL,
  `tutorialID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quizID`, `tutorialID`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `quizresults`
--

CREATE TABLE `quizresults` (
  `id` int(11) NOT NULL,
  `quizID` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quizresults`
--

INSERT INTO `quizresults` (`id`, `quizID`, `score`) VALUES
(2, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `stepID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(5000) NOT NULL,
  `tutorialID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`stepID`, `title`, `content`, `tutorialID`) VALUES
(1, 'Stabilirea necesarului de materiale', 'In functie de constructie (gratar, loc de joaca,\r\n        gradina cu legume), trebuie sa stabilesti cat te costa amenajarea gradinii si materialele necesare. Bugetul este\r\n        influentat de marimea terenului,\r\n        materialele de constructie, elementele de decor si plantele alese. Stabileste o lista cu tot ce ai nevoie,\r\n        astfel incat sa ai o idee cat mai exacta\r\n        despre costurile amenajarii. In plus, daca alegi sa apelezi la ajutorul unui arhitect peisagist, trebuie sa ii\r\n        comunici bugetul in care este\r\n        necesar sa se incadreze, inainte de inceperea proiectului de amenajare a gradinii.', 1),
(2, 'Pregatirea solului pentru zonele verzi', 'Consta in: fertilizarea pamantului pentru plantarea gazonului cu turba, nivelarea pamantului, astfel incat sa se evite acumularea de apa in anumite zone ale gradinii, indepartarea buruienilor si erbicidarea solului.', 1),
(3, ' Montarea unui sistem de drenaj', 'Sistemul de drenaj este format dintr-un ansamblu de tevi ingropate in pamant, care preiau surplusul de apa si il\r\n        evacueaza in bazinul de scurgere.\r\n        Apa preluata poate fi folosita apoi pentru sistemul de irigatii.', 1),
(4, 'Montarea sistemului de irigatii', 'Acesta este format din programator, senzor de ploaie, electrovane, tevi,\r\n        hidrofor, aspersoare pop-up si este\r\n        util pentru udarea gazonului. Sistemul de irigatii poate fi programat la orele alese, iar senzorul de ploaie va\r\n        opri sistemul de irigatii atunci\r\n        cand ploua, tocmai pentru a evita consumul inutil de apa.', 1),
(5, 'Montarea sau plantarea gazonului', 'Consta in: plantarea gazonului – poti face insamantarea folosind o masina speciala pentru insamanatare sau poti opta\r\n            pentru plantarea manuala,\r\n            amestecand semintele cu nisip. Pentru 100 de metri patrati ai nevoie de 3-5 kilograme de seminte.\r\n            Incorporeaza semintele in sol folosind\r\n            o grebla si acopera-le cu un strat de pamant cu o grosime de 1-2 centimetri. Insamantarea gazonului trebuie\r\n            facuta intr-o zi fara vant,\r\n            cand pamantul este cald, nu inainte de sau dupa o zi ploioasa. Dupa plantarea semintelor de gazon, uda cu\r\n            apa din abundenta, fara un jet\r\n            puternic, deoarece acesta poate deplasa semintele si \r\n            montarea rulourilor de gazon – acestea se monteaza rapid si usor. Dupa ce ai pregatit solul si ai turnat un\r\n            strat de nisip,\r\n            poti incepe sa montezi rulourile, unul cate unul. Este o varianta comoda, iarba este deja crescuta uniform\r\n            pe toata peluza si nu\r\n            necesita multe lucrari de ingrijire in primele saptamani.', 1),
(6, 'Stabilirea cailor de acces', 'Acestea trebuie sa deserveasca nevoilor de deplasare si, totodata, sa fie in\r\n        armonie cu designul gradinii.\r\n        In functie de stilul ales, poti opta pentru carari de lemn, cu placi de marmura sau gresie ori doar cu pietris.', 1),
(7, 'Plantarea florilor si a pomilor', 'Sapa cateva gropi in functie de numarul de flori sau de pomi alesi si adauga\r\n        in groapa putin pamant\r\n        fertil pentru a le ajuta sa se prinda mai usor. Uda cu apa din abundenta in primele saptamani, astfel incat sa\r\n        facilitezi procesul de inradacinare.\r\n        O varianta mai simpla este alegerea unor plante in ghivece, pe care trebuie doar sa amplasezi in diferite locuri\r\n        din gradina. Tine cont de faptul\r\n        ca cele mai potrivite perioade pentru plantare sunt primavara si toamna.', 1),
(8, 'Montarea materialelor auxiliare', 'In functie de stilul ales pentru gradina ta, poti opta pentru montarea\r\n        diferitelor decoratiuni de gradina sau\r\n        piese de mobilier. Pentru o zona de relaxare alege un balansoar sau o bancuta, iar daca vrei sa organizezi\r\n        petreceri in aer liber, contruieste un\r\n        gratar. Adauga o masa si cateva scaune, un loc de joaca pentru copii, o fantana arteziana sau un iaz si nu uita\r\n        sa iei in calcul si sistemele de\r\n        iluminat. Pentru depozitarea uneltelor si a sculelor necesare pentru intretinerea ulterioara a gradinii poti\r\n        chiar sa amenajezi si un spatiu de\r\n        depozitare.', 1),
(9, 'Gratarul, foisorul sau umbrarul de gradina', 'Construirea unui gratar in gradina este modalitatea ideala pentru a petrece un weekend alaturi de prieteni sau\r\n        de familie. Cand alegi locul unde vei construi gratarul, tine cont de faptul ca acesta trebuie sa fie cat mai\r\n        aproape de casa si de o sursa de apa, iar terenul pe care vei turna fundatia trebuie sa fie bine drenat, astfel\r\n        incat sa eviti acumularea de apa in jurul acestuia.\r\n        Stabileste apoi dimensiunea gratarului, toarna fundatia si ridica zidurile.', 2),
(10, 'Iazul sau helesteul din gradina\r\n', 'Amenajarea unui iaz in gradina nu este un proiect dificil si il poti realiza singur, cu putina indemanare.\r\n        Primul pas consta in alegerea locului potrivit pentru amplasarea lui. Ideal este un loc umbros, ferit de lumina\r\n        directa a soarelui.\r\n\r\n        Sapa groapa in functie de adancimea dorita si apoi toarna cimentul. Dupa ce se usuca cimentul, decoreaza iazul\r\n        cu cateva ghivece cu flori, plante, pietre si apoi umple helesteul cu apa.', 2),
(11, 'Loc de joaca pentru copii', 'Ca sa amenajezi un loc de joaca pentru copii in gradina, nu ai nevoie de un spatiu foarte mare, ci doar de\r\n        putina creativitate si indemanare. Locul de joaca trebuie sa fie colorat si desprins din universul povestilor,\r\n        astfel incat sa ii starneasca interesul celui mic si sa il incurajeze sa petreaca mai mult timp in aer liber.\r\n\r\n        Poti construi singur o casa din lemn sau poti achizitiona una deja asamblata din comert, din lemn sau din\r\n        plastic. Alege o casuta amplasata la inaltime, astfel incat sa ii poti monta un tobogan si o scara, care sa ii\r\n        incurajeze pe cei mici sa faca miscare.\r\n\r\n        O alta idee este montarea unui leagan sau a unui balansoar, un mini-teren de baschet, o trambulina, o cutie cu\r\n        nisip sau un hamac in care cei mici se pot odihni dupa cateva ore de joaca. Pentru zilele calduroase de vara\r\n        alege o piscina gonflabila.\r\n\r\n        Atunci cand amenajezi locul de joaca in gradina, foloseste cat mai multe obiecte colorate. Poti chiar sa cauti\r\n        cateva obiecte cu personajele lor preferate din desene animate, astfel incat sa le starnesti si mai mult\r\n        interesul pentru locul de joaca.\r\n\r\n        Totodata, ai grija ca locul de joaca sa fie curat si ferit de pericole. Asigura-te ca obiectele folosite nu au\r\n        colturi ascutite, iar daca nu poti amenaja locul de joaca direct pe iarba, monteaza pe sol dale de cauciuc.', 2),
(12, 'Bucatarie exterioara', 'Pentru amenajarea unei bucatarii de vara in gradina ai doua optiuni: o poti construi ca o prelungirea a casei\r\n        sau individual, in zona preferata din gradina. La fel ca in orice bucatarie, nu ar trebui sa iti lipseasca\r\n        spatiul de lucru, o chiuveta, un aragaz sau o plita electrica, cateva spatii de depozitare, o zona de luat masa\r\n        sau chiar si un frigider.\r\n\r\n        Daca vrei sa amenajezi o bucatarie rustica, poti opta pentru construirea unui cuptor cu lemne. Piatra\r\n        decorativa, completata cu elemente din lemn, este ideala pentru acest tip de bucatarie exterioara.\r\n\r\n        Totodata, tine cont de faptul ca bucataria exterioara trebuie racordata la toate utilitatile (apa, gaze si\r\n        curent electric). Daca nu ai experienta necesara, poti chema un specialist care sa efectueze toate aceste\r\n        lucrari.', 2),
(13, 'Gradina cu legume sau arbori fructiferi', 'Amenajarea unei gradini cu legume si pomi fructiferi este practica si, in acelasi timp, iti confera avantajul ca\r\n        te vei bucura de alimente proaspete si sanatoase, plantate si ingrijite de tine. Daca iti organizezi gradina in\r\n        mod eficient, gradinaritul va fi o placere.\r\n\r\n        O idee practica este plantarea legumelor in padocuri de lemn, care nu necesita o investitie mare si sunt usor de\r\n        amenajat. In plus, iti va ramane suficient spatiu ca sa amenajezi si un loc pentru relaxare in gradina.\r\n\r\n        Pentru o mica livada in gradina, planteaza si cativa pomi fructiferi. Daca ai o gradina mica, poti opta pentru\r\n        pomi fructiferi pitici, din soiuri precum ciresul, marul, caisul sau parul. In plus, poti crea si o mini-gradina\r\n        cu plante aromatice, pe care le poti folosi la preparea diferitelor mancaruri, pentru un gust mai aromat.', 2),
(14, 'Amenajarea gradinii in stil rustic', 'Gradinile rustice sunt pline de verdeata si de culoare, iar elementul central este reprezentat de lemn. Poti\r\n        folosi lemnul pentru decorarea potecii, pentru construirea unui foisor sau chiar a unui leagan. In plus, poti sa\r\n        folosesti cateva obiecte din lemn ca sa creezi un spatiu pentru luat masa. Scaunele sau taburetele din lemn, in\r\n        special cele lucrate manual, sunt ideale daca vrei sa creezi o gradina in stil rustic.', 3),
(15, 'Amenajarea gradinii in stil frantuzesc', 'Simetria si ordinea sunt doua dintre trasaturile principale ale unei gradini in stil frantuzesc. Cararile din\r\n        pietre si tufisurile verzi cu forme geometrice nu ar trebui sa lipseasca din gradina ta. Adauga putina culoare\r\n        cu cateva plante in nuante vii, iar daca vrei o nota cat mai autentica, planteaza in curte tufisuri cu lavanda.\r\n        Te vor duce cu gandul la acele campii intinse pline cu lavanda din Provence.\r\n\r\n        O alta trasatura importanta este perfectiunea, asa ca trebuie sa ingrijesti in mod regulat pomii si plantele din\r\n        gradina. Pomii trebuie plantati in linie dreapta, iar florile trebuie sa fie organizate astfel incat sa formeze\r\n        modele geometrice. Nuantele care trebuie sa predomine sunt roz, alb, violet si albastru deschis. Poti chiar sa\r\n        amenajezi in iaz artificial sau o fantana arteziana, pentru un plus de rafinament al gradinii.', 3),
(16, 'Amenajarea gradinii in stil englezesc\r\n', 'Cand vine vorba de amenajarea unei gradini in stil englezesc, nu ar trebui sa lipseasca tufele cu trandafiri\r\n        colorati, pe care ii poti planta si in locurile umbroase. In plus, gradinile englezesti rurale se disting prin\r\n        abundenta de flori si tufisuri care creeaza un decor insolit.\r\n\r\n        Pe de-o parte si de alta a potecii poti amenaja un gard viu scund, care sa delimiteze spatiile pline cu flori.\r\n        Gradina trebuie sa fie cat mai vie si colorata si sa pastreze o anumita ordine si un echilibru nestudiat.\r\n\r\n        Nu trebuie sa lipseasca nici piesele de decor, precum bancutele din fier forjat sau din lemn, vasele de\r\n        ceramica, iazurile ornamentale, casutele pentru pasari sau statuile.', 3),
(17, 'Amenajarea gradinii in stil japonez', 'Principiul estetic pe care se bazeaza organizarea gradinilor japoneze este cunoscut sub denumirea de „fukinsei”,\r\n        conform caruia asimetria este modul prin care poate fi controlat echilibrul. Gradinile amenajate in stil japonez\r\n        trebuie sa fie simple si elegante, ideale ca spatiu pentru meditatie si comuniune cu mediul inconjurator.\r\n\r\n        Cararile sunt inguste si serpuite, fiind amenajate cu materiale precum nisipul sau piatra. Elementul central\r\n        este foisorul inconjurat de un helesteu, peste care trece un mic pod arcuit din lemn sau piatra. Planteaza in\r\n        restul gradinii cativa ciresi, Japanese Sakura, care vor crea un decor fabulos primavara, atunci cand infloresc.\r\n\r\n        Poti alege stilul japonez si pentru amenajarea spatiului interior al casei, astfel incat sa completeze designul\r\n        gradinii tale. Gasesti aici cateva idei despre influenta stilului japonez in amenajarile interioare.', 3),
(18, 'Amenajarea gradinii in stil vintage', 'Gradinile in stil vintage au acel aspect care ne duc cu gandul la curtile vechi, in care plantele s-au extins in\r\n        voia lor si au pus stapanire pe tot peisajul. De aceea, plantele cataratoare nu trebuie sa lipseasca din gradina\r\n        daca alegi sa o amenajezi in stil vintage. Caprifoiul roz, iedera, glicina mov si clematita sunt recomandarile\r\n        noastre. Adauga trandafiri roz sau albi care sa coloreze gradina si sa o inmiresmeze.\r\n\r\n        Completeaza decorul cu cateva elemente neconventionale, cum ar fi cutiile vechi de lemn, piesele de mobilier\r\n        vechi si chiar o roaba ce poate fi folosita ca suport pentru flori. Principalele materiale pe care le poti\r\n        folosi sunt alama, fierul, lemnul, metalul sau caramida.', 3),
(19, 'Amenajarea gradinii in stil modern', 'Gradinile amenajate in stil modern sunt definite de elemente grafice cu design minimalist si de linii clare.\r\n        Culorile predominante sunt albul si verdele, insa poti adauga si nuante de mov sau rosu. Alege sa plantezi si\r\n        cativa arbusti exotici de talie mica, rezistenti la temperaturi ridicate si usor de ingrijit.\r\n\r\n        Potecile sunt compuse din pietris si din placi de gresie sau marmura, dar pot fi compuse in totalitate si din\r\n        scanduri de lemn. Daca vrei sa creezi si un spatiu pentru relaxare, alege piese de mobilier cu design\r\n        minimalist. In locul fantanii arteziene poti opta pentru amenajarea unei cascade de apa. Stilul modern este\r\n        potrivit atat pentru gradini mici, cat si pentru gradini mari.', 3),
(20, 'Amenajarea unei curti de dimensiuni foarte mici', 'Curtile de dimensiuni foarte mici necesita o atentie aparte prin nevoia de a valorifica spatiul, gradina se va\r\n        ridica pe verticala, iar gardul poate fi imbracat in iedera sau plante cataratoare. Mobilierul de gradina va fi\r\n        pozitionat cat mai aproape de casa in forma de insula.', 4),
(21, 'Amenajarea unei curti sau gradini pentru un efort ', 'Pentru aceia dintre voi care nu au timp, este important sa investeasca minim efort in ingrijirea unei curti sau\r\n        gradini. Celor care nu se pot dedica gradinaritului le este util sa lase spatii cat mai ample de gazon, care sa\r\n        fie tunse cu usurinta, fara prea mare efort in evitarea amenajarilor florale.\r\n        Asadar, fie ca nu aveti timp, fie ca ajungeti rar la casa de vancanta, o intretinere facila a gradinii va\r\n        salveaza de efort si totusi va asigura confort estetic. Evitati sa plantati sau montati aranjamente in gradini\r\n        cu pietre fiindca este mai greu de taiat iarba in jurul acestora. Alegerea dalelor si a bordurilor drepte,\r\n        liniare, in locul pietrisului este o alegere inteleapta pentru ca aveti nevoie de mai putina meticulozitate in\r\n        cosirea gazonului din jur, astfel consumati mai putin timp. Ca o regula pentru simplificarea muncii in gradina:\r\n        orice amenajare in linie dreapta este mai facil de ingrijit, permitand taierea gazonului de-a lungul bordurilor,\r\n        simplu, cu masina de tuns iarba.\r\n        Se vor alege aranjamente florale gradini in forme compacte, care sa nu permita cresterea buruienilor intre\r\n        plantele decorative, iar orice amenajare in curte sa fie cat mai aproape in linie dreapta sau curbe ample\r\n        fiindca va micsoreaza efortul cand tundeti iarba.', 4),
(22, 'Amenajarea unei gradini sau curte in panta', 'Amenajarea unei gradini sau a unei curti in panta atrage eforturi financiare suplimentare pentru aranjarea\r\n        terenului, dar efectul vizual ulterior merita investitia. Inainte de procesul efectiv de amenajare curti si\r\n        gradini trebuie sa terasati solul, sa puneti pamant in straturi. Ulterior, decoratiuni si aranjamente florale\r\n        gradini vor fi amplasate in trepte, gradat mai ample de sus in jos. Aleile pot fi inlocuite cu scari din pietre,\r\n        dale sau lemn.', 4),
(23, 'Amenajarea unei gradini sau curti la munte', 'Gradinile si curtile de munte impun o mai mare rigoare in alegerea plantelor pentru a rezista climei si solului\r\n        de roca (exemplu flori de piatra). Principiile de amenajare a gradinii sunt similare unei gradini in panta, unde\r\n        terasarea atrage amenajari florale in trepte. Data fiind zona, pavajele pot fi inlocuite cu succes de piatra de\r\n        rau, dupa cum in locul unor decoratiuni conventionale puteti alege o varianta cat mai naturala, precum optiunea\r\n        de amenajare gradina cu pietre sau grupuri de flori salbatice, specifice zonei. Copacii potriviti sunt din\r\n        specia coniferelor, iar plante salbatice sau aromatice simple pot inlocui ansamble ornamentale complexe.', 4),
(24, 'Amenajarea unei gradini sau curti la mare', 'Desi pare o provocare amenajarea unor gradini sau curti la mare, problema solului nisipos poate fi rezolvata\r\n        aducand pamant fertil din alta arie geografica si amplasarea acestuia pe perimetrul in care va fi asezata curtea\r\n        sau gradina. Puteti alege terasarea, situatie in care nivele de pamant vor fi sustinute prin borduri din piatra\r\n        sau beton - sau alinierea cu relieful existent si amenajarea gradinii dupa stilul estetic si practic pe care\r\n        vi-l doriti.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `tutorialID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `difficulty` varchar(20) NOT NULL,
  `quizID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`tutorialID`, `title`, `description`, `difficulty`, `quizID`) VALUES
(1, 'Care sunt etapele amenajarii unei gradini sau curti', 'Cand vrei sa va apucati de amenajarea unei gradini este similar proiectarii si construirii unei case: totul porneste de la etapa de planificare, urmand apoi ridicarea elementelor de infrastructura, precum alei, foisoare, aranjamente florale gradini, sisteme de iluminat, trasee de apa si alte facilitati obligatorii intr-o gradina, finalizandu-se cu mici finisaje.\r\n', 'Usor', 1),
(2, 'Secretele amenajarii unei curti sau gradini speciale', 'Exista situatii in care curtea impune limitari pentru aranjarea unei gradini care trebuie concepute atat functional, cat si estetic. In continuare, va spunem din secretele amenajarii unei curti sau gradini speciale, fie ca vorbim despre spatiu restrans, de teren in panta sau nisipos, fie doar despre gradini care necesita minim efort in intretinere, pentru oameni ocupati.', 'Mediu', 2),
(3, 'Amenajarea gradinii in functie de stilul preferat\r\n\r\n', 'Spatiul exterior al casei tale poate fi amenajat asa cum iti doresti, indiferent de marimea acestuia. Aici regasesti cateva idei de gradini amenajate in diferite stiluri, din care poti sa iti alegi proiectul preferat!', 'Mediu', 3),
(4, 'Cum amenajezi gradina conform functionalitatii\r\n\r\n', 'Amenajarea gradinii incepe cu stabilirea modului in care vrei sa folosesti ulterior spatiul respectiv, ca loc pentru relaxare sau ca loc unde sa plantezi si sa cresti legume proaspete si delicioase.', 'Dificil', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `pwd`) VALUES
(2, 'Alina', 'Popa', 'alinapopa0610@gmail.com', '$2y$10$h6zcFGljoKFqouPMP.WjVev/s2IyBSiru/ed9MDyGzskgC3ldpcny');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `FK_question` (`questionID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`questionID`),
  ADD KEY `FK_answer` (`answerID`),
  ADD KEY `FK_quiz` (`quizID`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quizID`),
  ADD KEY `FK_tutorial` (`tutorialID`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`stepID`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`tutorialID`),
  ADD KEY `FK_quizz` (`quizID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `answerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `questionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quizID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `stepID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `tutorialID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `FK_question` FOREIGN KEY (`questionID`) REFERENCES `questions` (`questionID`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `FK_answer` FOREIGN KEY (`answerID`) REFERENCES `answers` (`answerID`),
  ADD CONSTRAINT `FK_quiz` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`);

--
-- Constraints for table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `FK_tutorial` FOREIGN KEY (`tutorialID`) REFERENCES `tutorials` (`tutorialID`);

--
-- Constraints for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD CONSTRAINT `FK_quizz` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
