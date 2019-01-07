<?php
/**
* @subpackage  ol_anteez Template
*/

defined('_JEXEC') or die;

//define path
$base_url = $this->baseurl;
$tpl_name = $this->template;
$css_url = ''.$base_url.'/templates/'.$tpl_name.'/css/';
$scripts_url = ''.$base_url.'/templates/'.$tpl_name.'/scripts/';
$framework = 'templates/'.$tpl_name.'/framework/';

require_once ($framework.'blocks/header_include.php');
?>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4NJLLT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page-container">    

<!-- start page top container -->
<div id="page-container-top">
<?php require_once ($framework.'blocks/header.php');?>                 
<?php         
require_once ($framework.'blocks/slider.php');      
require_once ($framework.'blocks/feature.php'); 
?>                   
</div>
<!-- //end page top container -->        

<!-- start page middle container -->
<div id="page-container-middle">
<?php 
require_once ($framework.'blocks/top.php');
require_once ($framework.'blocks/main.php');
require_once ($framework.'blocks/info.php'); 
?>
</div>
<!-- //end page middle container -->        

<!-- start page bottom container -->
<div id="page-container-bottom">
<?php 
require_once ($framework.'blocks/bottom.php'); 
require_once ($framework.'blocks/footer.php');
?>
</div>
<!-- //end page bottom container -->         
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-82393444-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-82393444-3');
</script>
<!--END Google Analytics-->
</div>   
</body>
</html>