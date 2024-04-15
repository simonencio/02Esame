<?php
function generateHeaderAndVideo() {
    $html = '
    <div>
        <video muted autoplay loop class="videofullscreen">
            <source src="./immagini/video.mp4" type="video/mp4">
        </video>
    </div>
    <nav>
        <ul class="nav-bar">
            <li class="logo"><a href="./index.html"><img src="./immagini/verologo.jpg" alt="logo"></a></li>
            <input type="checkbox" id="check">
            <span class="menu">
                <li><a href="./index.php" target="_blank">HOME PAGE</a></li>
                <li><a href="./chisiamo.php" target="_blank">CHI SIAMO?</a></li>
                <li><a href="./portfolio.html" target="_blank">PORTFOLIO</a></li>
                <li><a href="./contatti.html" target="_blank">CONTATTI</a></li>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
            </span>
            <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
        </ul>
    </nav>
    ';

    return $html;
}
?>