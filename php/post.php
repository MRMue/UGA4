    <h2>Postverteilung</h2>
    <table border="1" class="post">
      <tr>
        <td>Poststelle</td>
      </tr>
      <tr>
        <td id="PA">&nbsp;</td>
      </tr>
      <tr>
        <td id="PN">&nbsp;</td>
      </tr>
      <tr>
        <td><button onclick="transport();">abholen</button></td>
      </tr>
    </table>
    <table border="1" class="post">
      <tr>
        <td>Transport</td>
      </tr>
      <tr>
        <td id="TA">&nbsp;</td>
      </tr>
      <tr>
        <td id="TN">&nbsp;</td>
      </tr>
      <tr>
        <td><button onclick="handOut();">verteilen</button></td>
      </tr>
    </table>
    <table border="1" class="post">
      <tr>
        <td>Riese</td>
        <td>Zwerg</td>
      </tr>
      <tr>
        <td id="AA0">&nbsp;</td>
        <td id="AA1">&nbsp;</td>
      </tr>
      <tr>
        <td id="AN0">&nbsp;</td>
        <td id="AN1">&nbsp;</td>
      </tr>
    </table>
<!--<script src="http://ausbildung.vkv.niedersachsen.de/~frank_gundelach/htdocs/INC/postzustellung.js"></script>-->
    <script>
      function fillUp(ID) {
        document.getElementById(ID + "A").innerHTML = null;
        for (let index = 0; index < Stapel.length; index++) {
          document.getElementById(ID + "A").innerHTML += Stapel[index] + "<br>";
        }
        document.getElementById(ID + "N").innerHTML = Stapel.length;
      }
      function restore(ID) {
        document.getElementById(ID + "A").innerHTML = empty;
        document.getElementById(ID + "N").innerHTML = empty;
      }
      function transport() {
        if (document.getElementById("PA").innerHTML != empty) {
          restore('P');
          fillUp('T');
        }
      }
      function handOut() {
        sum0 = 0;
        sum1 = 0;
        if (document.getElementById("TA").innerHTML != empty) {
          restore("T");
          document.getElementById("AA0").innerHTML = null;
          document.getElementById("AA1").innerHTML = null;
          for (let index = 0; index < Stapel.length; index++) {
            if (Stapel[index] == 'Riese') {
              document.getElementById("AA0").innerHTML += Stapel[index] + "<br>";
              sum0++;
            }
            else {
              document.getElementById("AA1").innerHTML += Stapel[index] + "<br>";
              sum1++;
            }
          }
          document.getElementById("AN0").innerHTML = sum0;
          document.getElementById("AN1").innerHTML = sum1;
        }
      }

      //document.getElementById( "AL0" ).innerHTML = AL[0];
      //document.getElementById( "AL1" ).innerHTML = AL[1];
      AL = new Array("Riese", "Zwerg");
      Stapel = new Array(AL[0], AL[1], AL[1], AL[0], AL[1], AL[0], AL[0], AL[0], AL[1], AL[0], AL[1], AL[1], AL[1], AL[0], AL[1]);
      empty = "&nbsp;";

      //restore( "P" );
      //restore( "T" );
      //init_AL();

      fillUp("P");
      //document.write(Stapel);
    </script>
    <br style="clear:left">