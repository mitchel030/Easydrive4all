<!-- hier geef je simpelweg gewoon de titel mee met data 
die je maakt in Homepages.php in map controllers de titel is "homepage"  -->
<p><h3><?= $data["title"]; ?></h3></p>

<!-- hier maak je een link dat er voor zoorgt dat je een overview pagina krijg van de komende lessen van konijn  -->
<a href="<?=URLROOT;?>/leerlings/index">Overzicht komende lessen van Konijn</a>

<!--  een extratje: in de link boven aan de website 
zie je bijvoorbeeld http://www.easydrive4all.org/leerlings/index
 dit verwijst nooit direct naar je map view deze verwijst eerst naar je controllers map
  en daar in heb je Leerlings.php en daar in heb je een public function index en daar onder geef je aan 
this->view('leerlings/index', $data); welke view hierbij hoort -->