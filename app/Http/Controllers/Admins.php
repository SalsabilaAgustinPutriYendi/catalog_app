<?php

use Illuminate\Validation\Rules\Enum;

enum AdminType: string
{
    case AdminPost = 'admin_post';
    case AdminKatalog = 'admin_catalog';
    case AdminPostAndCatalog = 'admin_post_and_catalog';
}
