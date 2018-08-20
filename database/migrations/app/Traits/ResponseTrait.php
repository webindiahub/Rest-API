<?php

namespace App\Traits;

/**
 * Trait ResponseTrait
 */
trait ResponseTrait {
    /**
     * @var $err_code $err_message $status $data $responseObject
     */
    protected $err_code;
    protected $err_message = array();
    protected $status;
    protected $data = array();
    protected $responseObject;

    /**
     * @param bool $status
     * @return mixed
     */
    public function responseSerialize($status=True) {
        $this->responseObject['status'] = $status ? 'Success' : 'Failure';
        $this->responseObject['data'] = $this->data;
        $this->responseObject['error'] = (object) array(
            'error_code' => $this->err_code,
            'error_message' => is_string($this->err_message) ? array($this->err_message) : $this->err_message
        );
        return $this->responseObject;
    }
}