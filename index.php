<?php
//HAntera vad användare skicka via $_GET

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// testa och validera inkommande variabler
is_string($page) or is_null($page)
  or die("Incoming value for page must be a string.");

// försätta jobba i säkerhet var_dump($page);


$dir  = __DIR__ . "/content";
$file = null;


switch ($page) {

    case 'home':
        $title="Home|site";
        $file = "$page.php";
        break;

    case 'about':
        $title="About|site";
        $file = "$page.php";
        break;

    case 'service':
        $title="Service|site";
        $file = "$page.php";
        break;

    case 'service_two':
        $title="Service2|site";
        $file = "$page.php";
        break;

    case 'contact':
        $title="Contact|site";
        $file = "$page.php";
        break;
    case 'blog':
        $title="Blog|site";
        $file = "$page.php";
        break;
    default:
        die("The value of ?page=" . htmlentities($page) . "  is not recognized as a valid page.");

}

?>




<?php include 'view/blocks/nav.php';?>

    <!-- Page Content -->
    <div class="container">

        <?php include("$dir/$file")?>

    </div>
    <!-- /.container -->
<?php include 'view/blocks/footer.php';?>
