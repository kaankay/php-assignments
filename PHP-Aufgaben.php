<!DOCTYPE html>
<html>
  <head>
    <title>Übung: PHP </title>
  </head>
  <body>
    <?php

      //Aufgabe 1: Das Kinderlied „Drei Chinesen mit dem Kontrabass“
      echo "<h1>Wortspielerein</h1>"."<br>";
      $zufall = rand(1,5);

      echo "Es wurde die Zahl ".$zufall." gew&auml;hlt!"."<br>"."<br>";

      switch ($zufall) {
        case 1:
            $vokal = "a";
            $umlauta = "a";
            break;
        case 2:
            $vokal = "e";
            $umlauta = "e";
            break;
        case 3:
            $vokal = "i";
            $umlauta = "i";
            break;
        case 4:
            $vokal = "o";
            $umlauta = "o";
            break;
        case 5:
            $vokal = "u";
            $umlauta = "u";
            break;
        }

        echo "nun mit ".$vokal."<br>";

        $erstezeile = "Drei Chinesen mit dem Kontraba";
        $zweitezeile1 = "sa";
        $zweitezeile2 = "en auf der Stra";
        $zweitezeile3 = "e und erz";
        $zweitezeile4 = "hlten sich was.";
        $drittezeile = "Da kam die Polizei, fragt: Was ist denn das?";

        

        
        $vokale = array("a", "e", "i", "o", "u");
        $umwandelnerste = str_replace($vokale, $vokal, $erstezeile);
        $umwandelzwei1 = str_replace($vokale, $vokal, $zweitezeile1);
        $umwandelzwei2 = str_replace($vokale, $vokal, $zweitezeile2);
        $umwandelnzwei3 = str_replace($vokale, $vokal, $zweitezeile3);
        $umwandelnzwei4 = str_replace($vokale, $vokal, $zweitezeile4);
        $umwandelndritte = str_replace($vokale, $vokal, $drittezeile);

        $lied = $umwandelnerste. "&szlig".","."<br>".$umwandelzwei1. "&szlig". $umwandelzwei2. "&szlig". $umwandelnzwei3. $umlauta. $umwandelnzwei4."<br>".
        $umwandelndritte."<br>".$umwandelnerste. "&szlig".".";

        echo $lied."<br>";

        //Aufgabe 2: Tabellen, Operatoren, Schleifen und Funktionen
        echo "<h1>Tabelle mit Operatoren</h1>";

        $zeilenzufall = rand(1,20);
        $spaltenzufall = rand(1,5);
        $zeilenzufallplus = $zeilenzufall + 1;

        function zeichneTabelle($zeilen, $spalten) {

          $ausgabe = '<table border="1">'; 
          for ($tr=1; $tr <= $zeilen; $tr++) {
            $a = rand(1,100);
            $b = rand(1,100);
            $add = $a + $b;
            $sub = $a - $b;
            $mul = $a * $b;

           $ausgabe .= '<tr>';

           for ($td=1; $td <= $spalten; $td++) {
             
            if($td==1){
              if($tr==1){
                $ausgabe .= '<th>' ."Wert a". '</th>';
              }
              else{
                $ausgabe .= '<td>' . $a . '</td>';
              }
             }
             if($td==2){
              if($tr==1){
                $ausgabe .= '<th>' ."Wert b". '</th>';
              }
              else{
                $ausgabe .= '<td>' . $b . '</td>';
              }
             }
             if($td==3){
              if($tr==1){
                $ausgabe .= '<th>' ."a+b". '</th>';
              }
              else{
                $ausgabe .= '<td>' . $add . '</td>';
              }
             }
             if($td==4){
              if($tr==1){
                $ausgabe .= '<th>' ."a-b". '</th>';
              }
              else{
                $ausgabe .= '<td>' . $sub . '</td>';
              }
             }
             if($td==5){
              if($tr==1){
                $ausgabe .= '<th>' ."a*b". '</th>';
              }
              else{
                $ausgabe .= '<td>' . $mul . '</td>';
              }
             }
          }
          $ausgabe .= '</tr>'; 
         } 
          return $ausgabe . '</table>';
         }
        
         echo zeichneTabelle($zeilenzufallplus, $spaltenzufall);
        
	?>
  </body>
</html>