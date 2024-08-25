<?php
function getPageSlug() {
    if ( isset($_GET['page']) ) {
        return $_GET['page'];
    }

    return 'home';
}