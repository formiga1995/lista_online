<!DOCTYPE html>
<html>
<title>Gabriel Menezes Formiga</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/css_google.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/basic.css">
<script src="js/basic.js"></script> 
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar" style="background-color: white;">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
    <img  class="customIcon" src="/img/icons/menu-button-of-three-horizontal-lines.png">
    </a>
    <a href="#home" class="w3-bar-item w3-button"><img  class="customIcon" src="/img/icons/home-icon-silhouette.png">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small "><img  class="customIcon" src="/img/icons/information.png"> SOBRE</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small "><img  class="customIcon" src="/img/icons/share.png">CONEXÕES</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small "><img  class="customIcon" src="/img/icons/letter.png"> CONTATO</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"><img  class="customIconS" src="/img/icons/information.png">SOBRE</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"><img  class="customIconS" src="/img/icons/share.png">CONEXÕES</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()"><img  class="customIconS" src="/img/icons/letter.png">CONTATO</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">GABRIEL <span class="w3-hide-small">MENEZES</span> FORMIGA</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">BIOGRAFIA</h3>
  <p class="w3-center"><em></em></p>
  <p>Tenho 23 anos, sou bacharelado em Ciência da Computação, formado em dezembro de 2018 pelo UniCEUB. Gosto de jogar videogame e
  torcer para o meu time de futebol americano, o Seattle Seahawks. Faço transmissões na <a href="#twitch">Twitch</a> por gosto.
  Meus estilos de música favoritos são: Heavy Metal, Eletrônica, Jazz e Rock Clássico. Falando em jogos, eu participo de campeonatos da 
  Liga Amadora da GamersClub de Counter-Strike: Global Offensive.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><img class="customIconU" src="/img/icons/user.png">Gabriel Menezes Formiga</b></p><br>
      <img src="img/profilepic.jpg" class="w3-round w3-image" alt="Foto minha" width="250" height="111">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Bem vindo à minha página web particular, aqui tem um pouco sobre o que eu faço e alguns dos meus conhecimentos.</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">Algumas das minhas proficiências curriculares:</p>
  <p class="w3-wide"><img class="customIconU" src="/img/icons/english-language.png">Inglês</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:95%">95%</div>
  </div>
  <p class="w3-large w3-center w3-padding-16"><a href="https://drive.google.com/open?id=11d9Ep2_t57AZHlJ-dQpXIdp-OsJRSnKQ">Meu curriculo</a></p>
</div>
<p id="twitch"></p><br><br>

<h3 class="w3-center twtichSectionText"><a href="https://www.twitch.tv/meneziis" style="text-decoration:none" target="_blank">MEU CANAL NA TWITCH<img src="img/twitch_PNG8.png" class="twtichLogo"></a></h3>

<div class="w3-row w3-center twtichSection w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">2.704</span><br>
    Visualizações
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">96</span><br>
    Seguidores
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">10</span><br>
    Média de espectadores ao vivo
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">20+</span><br>
    Horas transmitidas
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">CONEXÕES</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">ENCONTRE-ME EM:</h3>
  <p class="w3-center"><em></em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m3">
       <!--<img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">-->
       <a href="https://github.com/formiga1995" class="conectionsA" target="_blank"><img src="img/icons/github-logo.png" class="customIcon">GitHub</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">-->
       <a href="https://www.linkedin.com/in/gabriel-menezes-formiga-4b6164152/" class="conectionsA" target="_blank"><img src="img/Linkedin.png" class="customIcon">Linked In</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">-->
       <a href="https://www.facebook.com/gabriel.m.formiga" class="conectionsA" target="_blank"><img src="img/icons/facebook.png" class="customIcon">Facebook</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">-->
       <a href="https://www.instagram.com/meneziis/?hl=pt-br" class="conectionsA" target="_blank"><img src="img/icons/instagram.png" class="customIcon">Instagram</a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
       <!--<img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">-->
       <a href="https://www.skype.com/pt-br/" class="conectionsA" target="_blank"><img src="img/skype-logo-1.png" class="customIcon">mhenezis_br</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">-->
       <a href="https://steamcommunity.com/id/meneziis" class="conectionsA" target="_blank"><img src="img/icons/steam-logo.png" class="customIcon">Steam</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">-->
       <a href="https://discord.gg/hQ9qXNs" class="conectionsA" target="_blank"><img src="img/icons/discord.png" class="customIcon">Discord</a>
    </div>

    <div class="w3-col m3">
       <!--<img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">-->
       <a href="https://open.spotify.com/playlist/7vcwkgGgDGWj3NBezb3mrP" class="conectionsA"><img src="img/icons/spotify.png" class="customIcon">Spotify</a>
    </div>
     <!--<button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button> -->
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTATO</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">ENTRE EM CONTATO COMIGO</h3>

  <div class="w3-row w3-padding-32 w3-section">

    <div class="w3-col m4 w3-container">
      <!--
       Add Google Maps 
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
      -->
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <img  class="customIconC" src="/img/icons/maps-and-flags.png"> Brasília, DF<br>
        <img  class="customIconC" src="/img/icons/phone-call.png">Celular: (61) 99905-2256<br>
        <img  class="customIconC" src="/img/icons/letter.png">E-mail: gmfformiga@gmail.com<br>
        <div>

        </div>
      </div>
      <!--
      <p>Caso deseje deixar uma mensagem:</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nome" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
        </button>
      </form>
      -->
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><img class="customIcon" src="/img/icons/home-icon-silhouette.png">Início</a>
  
  <div class="w3-xlarge w3-section">
    Desenvolvido por: Gabriel Menezes Formiga
    <!--
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    -->
  </div>

  <!--
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  -->
</footer>
 
<!-- Add Google Maps 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
-->
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
