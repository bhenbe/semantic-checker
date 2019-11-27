<?php

function get_page_data($url){

    return file_get_contents($url);

}

function clean_page_data($data){

    $doc = new DOMDocument();

    // load the HTML into the DomDocument object (this would be your source HTML)
    libxml_use_internal_errors(true);
    $doc->loadHTML($data);
    libxml_clear_errors();

    $doc = removeElementsByTagName('script', $doc);
    $doc = removeElementsByTagName('style', $doc);
    $doc = removeElementsByTagName('link', $doc);

    // output cleaned html
    return $doc->saveHtml();

}

function removeElementsByTagName($tagName, $document) {
    
    $nodeList = $document->getElementsByTagName($tagName);
    for ($nodeIdx = $nodeList->length; --$nodeIdx >= 0; ) {
        $node = $nodeList->item($nodeIdx);
        $node->parentNode->removeChild($node);
    }

    return $document;

}

function show_semantic($url, $selector = ""){

    $data = get_page_data($url);
    
    $data = clean_page_data($data);

    //clean inline css
    $data = str_replace('style=', 'nostyle=', $data);

    $string = '<link rel="stylesheet" type="text/css" href="./inc/tag-inspector/tag-inspector.css"/></head>'; 

    $data = str_replace('</head>', $string, $data);

    $string = '<script type="text/javascript" src="./inc/tag-inspector/tag-inspector.js"></script><script type="text/javascript">const tagInspect = new tagInspector(\''.$selector.'\');</script></body>';

    $data = str_replace('</body>', $string, $data);

    return $data;

}