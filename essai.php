<?php

    include('./phpqrcode/phpqrcode/qrlib.php');
    include('./phpqrcode/phpqrcode/qrconfig.php');

    // how to build raw content - QRCode with simple Business Card (VCard)
    
    $tempDir = "EXAMPLE_TMP_SERVERPATH";
    
    // here our data
    $name = 'John Doe';
    $phone = '(049)012-345-678';
    
    // we building raw data
    $codeContents  = 'BEGIN:VCARD'."\n";
    $codeContents .= 'FN:'.$name."\n";
    $codeContents .= 'TEL;WORK;VOICE:'.$phone."\n";
    $codeContents .= 'END:VCARD';
    
    // generating
    QRcode::png($codeContents, $tempDir.'025.png', QR_ECLEVEL_L, 3);
   
    // displaying
    echo '<img src="'.$tempDir.'025.png" />';
    