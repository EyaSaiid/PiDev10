<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCzMLgL6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCzMLgL6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCzMLgL6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCzMLgL6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerCzMLgL6\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'CzMLgL6',
    'container.build_id' => '43d0962a',
    'container.build_time' => 1644662693,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCzMLgL6');
