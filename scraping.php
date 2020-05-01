<?php
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.olx.com.pk/items/q-mobile/');
curl_setopt($ch, CURLOPT_POST,false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$html=curl_exec($ch);
curl_close($ch);
$DOM=new DOMDocument;
libxml_use_internal_errors(true);
$DOM->loadHTML(true);
$element=$DOM->getelementsById('itemTitle');
for($i=0; $element->length; $i++){

    echo $element->item(si)->nodeValue."<br>";
}
?>