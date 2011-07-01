<?php
namespace Cogo;

abstract class Database {
    /**
     * @see Cogo\ParamsHandler
     */
    use ParamsHandler {
        setParams as private;
        setParam as protected;
    }

    protected function someDatabaseRelatedMethod() {
        // ...
    }

    abstract protected function someOtherDatabaseRelatedMethod();
}
