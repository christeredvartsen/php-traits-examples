<?php
namespace Cogo;

abstract class Storage {
    /**
     * @see Cogo\ParamsHandler
     */
    use ParamsHandler;

    protected function someFilesystemRelatedMethod() {
        // ...
    }

    abstract protected function someOtherFilesystemRelatedMethod();
}
