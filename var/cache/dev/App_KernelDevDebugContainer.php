<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVtkAzNi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVtkAzNi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVtkAzNi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVtkAzNi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVtkAzNi\App_KernelDevDebugContainer([
    'container.build_hash' => 'VtkAzNi',
    'container.build_id' => '241a45f9',
    'container.build_time' => 1597968603,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVtkAzNi');
