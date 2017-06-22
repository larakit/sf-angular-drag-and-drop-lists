<?php
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-drag-and-drop-lists')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('angular-drag-and-drop-lists.min.js');
if(class_exists('\Larakit\NgAdminlte\LkNg')) {
    \Larakit\NgAdminlte\LkNg::moduleRegister('dndLists');
}