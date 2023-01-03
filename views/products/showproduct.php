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

if ($product) {
    echo "
    <h1>Product:</h1><br/>
    <h2>ID: $product->id</h2><br/>
    <h2>Product name: $product->pname</h2><br/>
    <h2>Description: $product->desc</h2>
    </div>
    <br /><br /><br /><br />";
} else {
    echo '
    <br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br />
    <h1 style="text-align: center;">Sorry, we cannot find your product.</h1>
    <br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br /><br /><br />
  ';
}
echo '</div>';