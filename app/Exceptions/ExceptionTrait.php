<?php

namespace App\Exceptions;

use App\Traits\ResponseTrait;
use Illuminate\Http\Response;
use Exception;

trait ExceptionTrait {

    use ResponseTrait;
    /**
     * Utility function to check whether array is Associative or Numeric Indexed
     * @param $arr
     * @return bool
     */
    protected function isAssoc($arr)
    {
        return array_keys($arr) !== range(0, count($arr) - 1);
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function notFoundExceptionMessage(Exception $exception) {
        /**
         * Inspect your HTTP not found exception and return messages
         */
        return [
            '404 URL requested not found.',
        ];
    }
    protected function validationExceptionMessage(Exception $exception){
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        $messageArray = array();
        $storeExceptionMessages = $exception->errors();
        if($this->isAssoc($storeExceptionMessages)) {
            foreach ($storeExceptionMessages as $key => $storeExceptionMessage) {
                $messageConstruction = implode(" ", $storeExceptionMessage);
                $messageArray[] = $messageConstruction;
            }
        } else {
            $messageArray = implode($storeExceptionMessages);
        }
        return $messageArray;
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function ModelNotFoundExceptionMessage(Exception $exception) {
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        return [
            'Sorry! No record found for that entry.',
            'Your ID may be not valid',
            "Your Account may not be active"
        ];
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function MethodNotAllowedExceptionMessage(Exception $exception) {
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        return [
            'Sorry! The HTTP Method you requested does not exists.',
            'Please check method that are allowed by system.'
        ];
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function QueryExceptionMessage(Exception $exception) {
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        $messageArray = $exception->getMessage();
        return (array)$messageArray;
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function PDOExceptionMessage(Exception $exception) {
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        $messageArray = $exception->getMessage();
        return (array)$messageArray;
    }
    /**
     * @param Exception $exception
     * @return array
     */
    protected function ExceptionMessage(Exception $exception) {
        /**
         *  Inspect the ValidationException from the object and return a proper message
         */
        $messageArray = $exception->getMessage();
        return (array)$messageArray;
    }

    public function apiException($request, Exception $e)
    {
        $this->data = [];
        $exceptionClasses = [
            'Symfony\Component\HttpKernel\Exception\NotFoundHttpException' => ['notFoundExceptionMessage', Response::HTTP_NOT_FOUND],
            'Illuminate\Validation\ValidationException' => ['validationExceptionMessage', Response::HTTP_OK],
            'Illuminate\Database\Eloquent\ModelNotFoundException' => ['ModelNotFoundExceptionMessage', Response::HTTP_FORBIDDEN],
            'Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException' => ['MethodNotAllowedExceptionMessage', Response::HTTP_INTERNAL_SERVER_ERROR],
            'Illuminate\Database\QueryException' => ['QueryExceptionMessage', Response::HTTP_FORBIDDEN],
            'PDOException' => ['PDOExceptionMessage', Response::HTTP_FORBIDDEN],
            'Exception' => ['ExceptionMessage', Response::HTTP_OK]
        ];

        $exceptionArrayMapper = array(
            'responseCode' => 1,
            'functionCode' => 0
        );

        foreach($exceptionClasses as $key => $value) {
            if($e instanceof $key) {

                $this->err_code = $value[$exceptionArrayMapper['responseCode']];
                $this->err_message = $this->{$value[$exceptionArrayMapper['functionCode']]}($e);
                break;
            }
        }

        return $this->responseSerialize(false);
    }
}