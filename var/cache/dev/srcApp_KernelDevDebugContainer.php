<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGtzxxcg\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGtzxxcg/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGtzxxcg.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerGtzxxcg\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerGtzxxcg\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Gtzxxcg',
    'container.build_id' => 'f38325d2',
    'container.build_time' => 1645318901,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGtzxxcg');
