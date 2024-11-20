    <h2>Verkaufszahlen von anlogen Karten</h2>
    <h3>Statische HTML-Tabelle</h3>
    <table class="tab">
      <tr>
        <td>Jahr</td>
        <td>TK25</td>
        <td>TK50</td>
        <td>WK</td>
        <td id="sum">Summe</td>
      </tr>
      <tr>
        <td>2010</td>
        <td>200</td>
        <td>300</td>
        <td>100</td>
        <td>-</td>
      </tr>
      <tr>
        <td>2011</td>
        <td>200</td>
        <td>300</td>
        <td>100</td>
        <td>-</td>
      </tr>
      <tr>
        <td>2013</td>
        <td>450</td>
        <td>125</td>
        <td>20</td>
        <td>-</td>
      </tr>
      <tr>
        <td>2014</td>
        <td>400</td>
        <td>150</td>
        <td>150</td>
        <td>-</td>
      </tr>
      <tr>
        <td>2015</td>
        <td>100</td>
        <td>100</td>
        <td>50</td>
        <td>-</td>
      </tr>
    </table>
    <h3>Dynamisch erstellte JS-Tabelle</h3>
    <script>
      head = new Array("Jahr", "TK25", "TK50", "WK", "Summe");
      L = head.length;
      z = -1;
      tab = new Array();
      tab[z+=1] = new Array(2010, 200, 300, 100, 0);
      tab[z+=1] = new Array(2011, 200, 300, 100, 0);
      tab[z+=1] = new Array(2012, 450, 125, 20, 0);
      tab[z+=1] = new Array(2013, 450, 125, 20, 0);
      tab[z+=1] = new Array(2014, 400, 150, 150, 0);
      tab[z+=1] = new Array(2015, 100, 100, 50, 0);
      H = tab.length;

      document.write("<table class='tab'>");

      document.write("<tr>");
      for (let i = 0; i < L; i++) {
        document.write("<td>" + head[i] + "</td>");
      }
      document.write("</tr>");

      for (let i = H-1; i >= 0; i--) {
        document.write("<tr>");
        for (let j = 0; j < L; j++) {
          if (j > 0 && j < L - 1) {
            tab[i][L - 1] += tab[i][j];
          }
          document.write("<td>" + tab[i][j] + "</td>");
        }
        document.write("</tr>");
      }

      document.write("</table>");
      //alert(tab);
    </script>

<h3>Dynamisch erstellte PHP-Tabelle</h3>
    <?php
      $head = array("Jahr", "TK25", "TK50", "WK", "Summe");
      $L = count($head);
      $z = -1;
      $tab = array();
      $tab[$z+=1] = array(2010, 200, 300, 100, 0);
      $tab[$z+=1] = array(2011, 200, 300, 100, 0);
      $tab[$z+=1] = array(2012, 450, 125, 20, 0);
      $tab[$z+=1] = array(2013, 450, 125, 20, 0);
      $tab[$z+=1] = array(2014, 400, 150, 150, 0);
      $tab[$z+=1] = array(2015, 100, 100, 50, 0);
      $H = count($tab);

      echo "<table class='tab'>\n";

      echo "<tr>\n";
      for ($i = 0; $i < $L; $i++) {
        echo "<td>" . $head[$i] . "</td>\n";
      }
      echo "</tr>\n";

      for ($i = $H-1; $i >= 0; $i--) {
        echo "<tr>\n";
        for ($j = 0; $j < $L; $j++) {
          if ($j > 0 && $j < $L - 1) {
            $tab[$i][$L - 1] += $tab[$i][$j];
          }
          echo "<td>" . $tab[$i][$j] . "</td>\n";
        }
        echo "</tr>\n";
      }

      echo "</table>\n";
      //alert(tab);
    ?>