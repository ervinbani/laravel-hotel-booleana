<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css" >
    <title>HOTEL BOOLEANA</title>
  </head>
  <body>
    <header class="bg-blue">
      <div class="fotologo ">
      </div>
      <div class="brand ">HOTEL BOOLEANA
        <div class="stella">
          <img src="4stelle.png" alt="">

        </div>

      </div>

    </header>
    <div class="clear"></div>

    <div class="contenitore">
      <div class="menu-element"><a href="index.html">HOME</a></div>
    <div class="menu-element"><a href="index-prenotazione.html">PRENOTAZIONE CAMERE</a></div>
      <div class="menu-element"><a href="index-prezzi.html">LISTINO PREZZI</a></div>
      <div class="menu-element"><a href="index-lastminute.html">LAST MINUTE</a></div>
      <div class="menu-element"><a href="index-ristorazione.html">RISTORAZIONE</a></div>
      <div class="menu-element"><a href="index-fotogalleria.html">FOTOGALLERIA</a></div>
    </div>
    <div class="clear"></div>

    <main>
        @yield('contenuto')
    </main>

    

    <footer class="banner">
      <img src="banner.png" alt="">
    </footer>

  </body>
</html>
