<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVd442ol\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVd442ol/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVd442ol.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVd442ol\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVd442ol\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Vd442ol',
    'container.build_id' => '7bda1b7b',
    'container.build_time' => 1646320897,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVd442ol');
