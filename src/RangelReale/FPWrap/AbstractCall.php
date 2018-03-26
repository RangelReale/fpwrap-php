<?php

namespace RangelReale\FPWrap;

class AbstractCall
{
    /**
     * @var \Grpc\AbstractCall
     */
    protected $call;
    
    public function __construct($call)
    {
        $this->call = $call;
    }
    
    /**
     * @return mixed The metadata sent by the server
     */
    public function getMetadata()
    {
        return $this->call->getMetadata();
    }

    /**
     * @return mixed The trailing metadata sent by the server
     */
    public function getTrailingMetadata()
    {
        return $this->call->getTrailingMetadata();
    }

    /**
     * @return string The URI of the endpoint
     */
    public function getPeer()
    {
        return $this->call->getPeer();
    }

    /**
     * Cancels the call.
     */
    public function cancel()
    {
        $this->call->cancel();
    }

    /**
     * Set the CallCredentials for the underlying Call.
     *
     * @param CallCredentials $call_credentials The CallCredentials object
     */
    public function setCallCredentials($call_credentials)
    {
        $this->call->setCredentials($call_credentials);
    }    
}
