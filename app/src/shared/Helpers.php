<?php

namespace App\shared;
class Helpers
{
    public static function getPageSlug(): string {
        if ( isset($_GET['page']) ) {
            return $_GET['page'];
        }

        return 'home';
    }
}