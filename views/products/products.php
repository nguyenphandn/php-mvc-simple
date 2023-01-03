<?php
echo '
    <!-- MAIN BODY -->
    <br /> <br />
    <div class="container">
        <h2>Search for product in database:</h2>
        <form>
            <input type="text" size="30" onkeyup="showResult(this.value)">
            <div id="livesearch"></div>
        </form>
    </div>
    <script>
        function showResult(str) {
        if (str.length==0) {
            document.getElementById("livesearch").innerHTML="";
            document.getElementById("livesearch").style.border="0px";
            return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function() {
            if (this.readyState==4 && this.status==200) {
            document.getElementById("livesearch").innerHTML=this.responseText;
            document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET","search.php?name="+str,true);
        xmlhttp.send();
        }
    </script>
';
echo '<br /><br /><div class="container">';
echo '<ul>';
foreach ($products as $product) {
  echo '<li>
    <a href="index.php?page=products&id=' . $product->id . '">' . $product->pname . '</a>
  </li>';
}
echo '</ul></div>';
?>
