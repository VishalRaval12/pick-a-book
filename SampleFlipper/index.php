﻿<?php
 
 require_once('../app/Mage.php');
 Mage::app();
 
//$productid=3;
$productid= $_GET['id'];

$links=Mage::getModel('downloadable/link')
                      ->getCollection()
                      ->addFieldToFilter('product_id',array('eq'=>$productid));
					  
					 
  foreach($links as $link){
     $actualpath= Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'downloadable/files/links'.$actuallink = $link->getLinkFile();
  }
  
?>
<html>
<head>
    <title>PDF</title>
    <meta http-equiv="X-UA-Compatible" content="chrome = 1">
    <link type="text/css" href="css/main.css" rel="stylesheet" media="screen" />
    <script type="text/javascript" src="scripts/jquery.js"></script>
    <script type="text/javascript" src="scripts/pdf.js"></script>
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="scripts/turn.min.js"></script>
    <script type="text/javascript" src="scripts/tools.js"></script>
    <script type="text/javascript" src="scripts/lupa.js"></script>
</head>
<body>

<div id="placeholder"></div>

    <div id="carga">
        <embed src="img/5.gif" class="centrar" /></div>
    <div id="imagen-oculta2" />
    <header id="botoner">
        <nav id="botoner-2">
            <menu>
                <button>
                    <img src="img/fi.gif" width="35" height="35" alt="" onclick="previous();">
                </button>
            </menu>
            <menu>
                <button>
                    <img src="img/fd.gif" width="35" height="35" alt="" onclick="next();">
                </button>
            </menu>
            <menu>
                <button>
                    <img src="img/lupa01.jpg" width="35" height="35" alt="" onclick="if(window.parent.document.body.style.zoom!=0) window.parent.document.body.style.zoom*=1.2; else window.parent.document.body.style.zoom=1.2;">
                </button>
            </menu>
            <menu>
                <button>
                    <img src="img/lupa02.jpg" width="35" height="35" alt="" onclick="if(window.parent.document.body.style.zoom!=0) window.parent.document.body.style.zoom*=0.8; else window.parent.document.body.style.zoom=0.8;">
                </button>
            </menu>
        </nav>
    </header>
     

<div style="text-align: right;">
   <embed id="imagen-oculta" src="img/4.gif" />
</div>
    
    <div class="magazine">
    </div>
<script type="text/javascript">

        PDFJS.disableWorker = true;
        var pdfDoc, scale, file, np;
		var mypdf = "<?php echo $actualpath; ?>";

        $(document).ready(function () {
            //file = getUrlVars()["id"];
   
            //if ("<?php echo $actualpath; ?>" == null)
                file = mypdf;
 
            PDFJS.getDocument(file).then(function (doc) {
                pdfDoc = doc;
                np = 5;

                scale = 3;

                for (var i = 1; i <= np; i++) {
                    $(".magazine").html($(".magazine").html() + '<div><canvas id="hoja' + i + '" style="border: 1px solid black; width: 99.4%; height: 99.5%;"></canvas></div>');
                }

                for (var i = 1; i <= np; i++) {
                    renderPage(i, document.getElementById('hoja' + i));
                }

                //Evento Window Ready
                flipkey();
                demoDisplay();
                window.onload = function () {
                    setContent();

                }
                document.getElementById('imagen-oculta').style.visibility = 'visible';
                document.getElementById('imagen-oculta2').style.visibility = 'visible';
            });
        });
      
    </script>
</body>
</html>
