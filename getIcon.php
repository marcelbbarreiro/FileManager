<?php
$fsize = 90; //icon px width in output
$field = 'file'; //name of the field 

$pdfImg = 'http://cdn1.iconfinder.com/data/icons/CrystalClear/128x128/mimetypes/pdf.png';
$docImg = 'http://cdn2.iconfinder.com/data/icons/sleekxp/Microsoft%20Office%202007%20Word.png';
$pptImg = 'http://cdn2.iconfinder.com/data/icons/sleekxp/Microsoft%20Office%202007%20PowerPoint.png';
$txtImg = 'http://cdn1.iconfinder.com/data/icons/CrystalClear/128x128/mimetypes/txt2.png';
$xlsImg = 'http://cdn2.iconfinder.com/data/icons/sleekxp/Microsoft%20Office%202007%20Excel.png';
$audioImg = 'http://cdn2.iconfinder.com/data/icons/oxygen/128x128/mimetypes/audio-x-pn-realaudio-plugin.png';
$videoImg = 'http://cdn4.iconfinder.com/data/icons/Pretty_office_icon_part_2/128/video-file.png';
$htmlImg = 'http://cdn1.iconfinder.com/data/icons/nuove/128x128/mimetypes/html.png';
$fileImg = 'http://cdn3.iconfinder.com/data/icons/musthave/128/New.png';

$files = $page->$field;
foreach ($files as $f) {   
    switch (get_file_extension($f)) {
        case 'pdf':
            $img = $pdfImg;
            break;
        case 'doc':
            $img = $docImg;
            break;
        case 'docx':
            $img = $docImg;
            break;
        case 'txt':
            $img = $txtImg;
            break;
        case 'xls':
            $img = $xlsImg;
            break;
        case 'xlsx':
            $img = $xlsImg;
            break;
        case 'xlsm':
            $img = $xlsImg;
            break;
        case 'ppt':
            $img = $pptImg;
            break;
        case 'pptx':
            $img = $pptImg;
            break;
        case 'mp3':
            $img = $audioImg;
            break;
        case 'wmv':
            $img = $videoImg;
            break;
        case 'mp4':
            $img = $videoImg;
            break;
        case 'mpeg':
            $img = $videoImg;
            break;
        case 'html':
            $img = $htmlImg;
            break;
        default:
            $img = $fileImg;
            break;
    }   
   
    echo "<a href='{$f->url}' target='_blank'><img src='$img' title='$f' width='$fsize' /></a><p>{$f->description}</p>";
  
}
function get_file_extension($f) {
    $ftype = pathinfo($f);
    return $extension = $ftype['extension'];
}
?>

<?php
			
	?>