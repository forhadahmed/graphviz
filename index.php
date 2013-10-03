<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Graphviz</title>
    <link rel="icon" type="image/ico" href="favicon.ico"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/tipsy/1.0/javascripts/jquery.tipsy.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href="//cdn.jsdelivr.net/tipsy/1.0/stylesheets/tipsy.css" rel="stylesheet" media="all" />
    <link type="text/css" href="graphviz.css" rel="stylesheet" media="all" />
  </head>
  <body>
    <table width="65%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%"><? include "header.html" ?></td>
      </tr>
      <tr>
        <td>
          <div id="main-container" style="position:relative">
          <textarea spellcheck="false" rows="25" class="main-code" id="main-code" ></textarea>
          <? include "controls.html" ?>
          </div>
        </td>
      </tr>
    </table>
    <table  width="65%"  align="center" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td id="graphcell"></td>
      </tr>
    </table>
  </body>
</html>

<script src="graphviz.js"></script>
<script> 
$("#main-code").focus(); 
</script>