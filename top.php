<?php
// parse the url into htmlentities to remove any suspicious vales that someone
// may try to pass in. htmlentities helps avoid security issues.

$phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");

$path_parts = pathinfo($phpSelf);

 ?>	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wavelength</title>

        <meta charset="utf-8">
        <meta name="author" content="Aaron Delin and Bridget Lavelle"> 
        <meta name="description" content="The latest news and releases in the music industry">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/new.css?version=<?php print time(); ?>" type="text/css" media="screen">
    

    <?php
            $debug = false;
            
            // This if starement allows us in the classroom to see what our variables are
            // This is NEver done on a live site 
            if (isset($_GET['debug'])) {
                $debug = true;
            }
     $domain = '//';
     
     $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, 'UTF-8');
     
     $domain .=$server;
     
     if ($debug){
    print '<p>php Self: ' . $phpSelf;
    print '<pdomain: ' . $domain;
    print '<p>Path Parts<pre>';
    print_r($path_parts);
    print '</pre></p>';
     }
     
//%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^%^
//
// include all libraries
//
            
print PHP_EOL . '<!-- include libraries -->' . PHP_EOL;

require_once 'lib/security.php';

include_once 'lib/validation-functions.php';

include_once 'lib/mail-message.php';



print PHP_EOL . '<!-- finished including libaries -->' . PHP_EOL;
?>
    </head>
    <!-- ######################         Body Section       ##################### -->
<?php
print '<body id="' . $path_parts['filename'] . '">' . PHP_EOL;

include 'header.php';
print PHP_EOL;

include 'nav.php';
print PHP_EOL;

if ($debug) {
    print '<p>DEBUG MODE IS ON</p>';
}

print "<!-- End of top.php -->";
?>
    
<!-- ######################### Main Section ########################### -->
