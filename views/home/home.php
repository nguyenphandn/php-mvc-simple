<?php
  echo '
    <!-- BOOTSTRAP JUMBOTRON -->
    <header class="jumbotron">

        <div class="container">

            <!-- output to know location -->
            <?php
                if(isset($_GET["page"])) {
                    echo "This is " . $_GET["page"];
                }
            ?>  

            <div class="row row-header">
                <div class="col-12 col-sm">
                    <h1>Peaky Blinders</h1>
                    <h4>An introduction</h4>
                    <p>Peaky Blinders is a British period crime drama television series created by Steven Knight. Set in Birmingham, England, it follows the exploits of the Peaky Blinders crime gang in the direct aftermath of the First World War. The fictional gang is loosely based on a real urban youth gang of the same name who were active in the city from the 1880s to the 1910s.</p>
                </div>
                <!-- <div class="col-12 col-sm-3"></div> -->
                <div class="col-12 col-sm">
                    <img src="/lab-7/assets/images/intro.jpg" class="center" alt="shelby chika">
                </div>
            </div>
        </div>
    </header>


    <!-- MAIN BODY -->
    <div class="container">

        <!-- Title is on the right but will appear first if small  -->
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3 order-sm-last">
                <h3>Series 1</h3>
            </div>
            <div class="col col-sm col-md order-sm-first">
                <h2>The first series was filmed in Birmingham.</h2>
                <h4>First</h4>
                <p>Railway sequences were filmed between Keighley and Damems, using carriages from the Ingrow Museum of Rail Travel (owned by Vintage Carriages Trust),[11] and carriages owned by the Lancashire and Yorkshire Railway Trust.[12] Many of the scenes for the show were shot at the Black Country Living Museum.[13] Steven Knight, Stephen Russell and Toby Finlay all had writing credits on the series.</p>
            </div>
        </div>

        <!-- Title is on the left but will appear first if small  -->
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3">
                <h3>Series 2</h3>
            </div>
            <div class="col col-sm col-md">
                <h2>The official Peaky Blinders Twitter account announced that filming had begun.</h2>
                <h4>Second</h4>
                <p>A second series was commissioned shortly after the broadcast of the first and aired in October and November 2014.On 11 January 2014, auditions were held in Digbeth area of Birmingham (near where parts of the series are set) for white and mixed race teenage male extras, resulting in lengthy queues.</p>
            </div>
        </div>

        <!-- Same as first item -->
        <div class="row row-content align-items-center">
            <div class="col-12 col-sm-4 col-md-3 order-sm-last">
                <h3>Series 3</h3>
            </div>
            <div class="col col-sm col-md order-sm-first">
                <h2>The show announced via its Twitter account that it had been renewed for a third series.</h2>
                <h4>Third</h4>
                <p>During the initial broadcast of series 2, the BBC renewed Peaky Blinders for series 3 and 4, each of which comprises six episodes. Filming for series 3 started in March 2017 and premiered on 15 November 2017 on BBC Two. Both The Weinstein Company and its logo in its credits weren\'t included, even though the company was formerly involved in the US distribution of the series.</p>
            </div>
        </div>
    </div>
  ';
?>