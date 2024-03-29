<?php

use Kirby\Cms\App as Kirby;
use Kirby\Data\Data as Data;

Kirby::plugin("cookbook/programmable-blueprints", [
    "blueprints" => [
        "site" => function () {
            if (($user = kirby()->user()) && $user->isAdmin()) {
                return Data::read(kirby()->root('blueprints') . '/site.admin.yml');
            } else {
                return Data::read(kirby()->root('blueprints') . '/site.editor.yml');
            }
        },
    ]
]);