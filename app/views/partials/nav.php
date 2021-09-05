<?php
function breadcrumbs($home = 'Home')
{
    global $page_title; //global varable that takes it's value from the page that breadcrubs will appear on. Can be deleted if you wish, but if you delete it, delete also the title tage inside the <li> tag inside the foreach loop.
    $breadcrumb  = '<div class="breadcrumb-container"><div class="container"><ol class="breadcrumb">';
    // $root_domain = ($_SERVER['HTTPS'] ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $root_domain = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
    $breadcrumbs = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
    $breadcrumb .= '<li><i class="fa fa-home"></i><a href="' . $root_domain . '" title="Home Page"><span>' . $home . '</span></a></li>';
    foreach ($breadcrumbs as $crumb) {
        $link = ucwords(str_replace(array(".php", "-", "_"), array("", " ", " "), $crumb));
        $root_domain .=  $crumb . '/';
        $breadcrumb .= '<li><a href="' . $root_domain . '" title="' . $page_title . '"><span>' . $link . '</span></a></li>';
    }
    $breadcrumb .= '</ol>';
    $breadcrumb .= '</div>';
    $breadcrumb .= '</div>';
    return $breadcrumb;
}
?>

<div>
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">DogSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ">
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link test" href="/about">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Dogs
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/dogs">All</a></li>
                            <li><a class="dropdown-item" href="/dogs/male?sex=m">Male</a></li>
                            <li><a class="dropdown-item" href="/dogs/female?sex=f">Female</a></li>
                        </ul>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link" href="/puppies">Puppies</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link" href="/gallery">Gallery</a>
                    </li>
                    <li class="nav-item hvr-underline-from-center">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- insert the breadcrumb links -->
    <!-- <?= breadcrumbs() ?> -->
</div>