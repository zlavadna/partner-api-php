<?php

namespace ZlavaDna\Transport;

interface IResponse {

    /**
     * Parse response.
     * @param string $data
     */
    public function setResponseData($data);

    /**
     * Returns data as a result of API call.
     * @return array|null
     */
    public function getData();

    /**
     * Finds out if API call is successful.
     * @return bool
     */
    public function getResult();

    /**
     * If there is any error, it will return error code.
     * Otherwise returns null.
     * @return int|null
     */
    public function getErrorCode();

    /**
     * If there is any error, it will return error message.
     * Otherwise returns null.
     * @return string|null
     */
    public function getErrorMessage();

}