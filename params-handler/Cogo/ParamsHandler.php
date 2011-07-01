<?php
namespace Cogo;

trait ParamsHandler {
    /**
     * Parameters
     *
     * @var array
     */
    private $params;

    /**
     * Class constructor
     *
     * @param array $params
     */
    public function __construct(array $params) {
        $this->setParams($params);
    }

    /**
     * Set params
     *
     * @param array $params
     */
    public function setParams(array $params) {
        $this->params = $params;
    }

    /**
     * Get the params
     *
     * @return array
     */
    public function getParams() {
        return $this->params;
    }

    /**
     * Set a single param
     *
     * @param string $key
     * @param mixed  $value
     */
    public function setParam($key, $value) {
        $this->params[$key] = $value;
    }

    /**
     * Get a single param
     *
     * @param string $key
     * @return mixed
     */
    public function getParam($key) {
        return (isset($this->params[$key]) ? $this->params[$key] : null);
    }
}
