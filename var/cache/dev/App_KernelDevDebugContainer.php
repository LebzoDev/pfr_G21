<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYQ6uO0M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYQ6uO0M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerYQ6uO0M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerYQ6uO0M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerYQ6uO0M\App_KernelDevDebugContainer([
    'container.build_hash' => 'YQ6uO0M',
    'container.build_id' => 'ff7e5a91',
    'container.build_time' => 1598533862,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYQ6uO0M');
