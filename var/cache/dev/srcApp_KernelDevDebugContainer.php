<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZxSwAHV\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZxSwAHV/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZxSwAHV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZxSwAHV\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerZxSwAHV\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'ZxSwAHV',
    'container.build_id' => '01a7a3ac',
    'container.build_time' => 1647710228,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZxSwAHV');
