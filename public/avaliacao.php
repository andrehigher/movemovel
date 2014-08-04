<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MoveMóvel - SETOP</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="ratchet.js"></script>
  </head>
  <body>

    <header class="bar bar-nav">
      <a class="icon icon-left-nav pull-left" href='index.html' data-transition="slide-off"></a>
      <h1 class="title">Avaliação</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
     <form>
      <input type="text" placeholder="Nome completo">
      <input type="email" placeholder="E-mail">
      <input type="number" min="12" max="100" placeholder="Idade">
      <textarea rows="5" placeholder="Sua avaliação aqui..."></textarea>
      <button class="btn btn-positive btn-block">Enviar</button>
    </form>
    </div>

  </body>
</html>