<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXHacFJe\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXHacFJe/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXHacFJe.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXHacFJe\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXHacFJe\App_KernelDevDebugContainer([
    'container.build_hash' => 'XHacFJe',
    'container.build_id' => '5c107bbe',
    'container.build_time' => 1689155154,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXHacFJe');
