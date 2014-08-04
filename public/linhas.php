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
      <h1 class="title">Linhas</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content">
      <ul class="table-view">
        <li class="table-view-cell">
          <a class="navigate-right" href="linhas/405r.html" data-transition="slide-in">
            405R - São Gabriel/Cid. Industrial
          </a>
        </li>
        <li class="table-view-cell">
          <a class="navigate-right" href="linhas/402h.html" data-transition="slide-in">
            402H - São Gabriel/Hospitais
          </a>
        </li>
      </ul>
    </div>

  </body>
</html>