
<?php
/*
By: Ram Pukar Chaudhary
Date: 2015-06-27
*/ 
  function chars_limiter($text, $limit, $ellipsis = true) {
    if( strlen($text) > $limit ) {
        $endpos = strpos(str_replace(array("\r\n", "\r", "\n", "\t"), ' ', $text), ' ', $limit);
        if($endpos !== FALSE)
            $ellip = ($ellipsis==true) ? '...': '';
            $text = trim(substr($text, 0, $endpos)) . $ellip;
    }
    return $text;
}
?>
<strong>Example:</strong><br/>
<?php 
    $getText="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
    echo chars_limiter($getText,14,true);
 ?>
 <hr/>
 <?php 
 echo '<meta  charset="utf-8"/>';
    $getText="काठमाडौं– राष्ट्रिय विपत व्यवस्थापन, अनुगमन तथा निर्देशन विशेष समितिले भग्नावशेषमा पुरिएर वा अन्य कारणले उद्धार हुन नसकेका बेपत्ता नागरिकका परिवारलाई पनि मृत घोषित गरिएका परिवारसरह राहत उपलब्ध गराउन सरकारलाई।";
    echo chars_limiter($getText,14,false);
 ?>