<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-drag-and-drop-lists')
    ->usePackage('larakit/sf-angular')
    ->ngModule('dndLists')
    ->setSourceDir('public')
    ->jsPackage('angular-drag-and-drop-lists.min.js');
