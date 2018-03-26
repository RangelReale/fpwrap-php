<?php

namespace RangelReale\FPWrap;

class UnaryCall extends AbstractCall
{
    private $responseObject;
    
    public function __construct(\Grpc\UnaryCall $call, $responseObject = null)
    {
        parent::__construct($call);
        $this->responseObject = $responseObject;
    }
    
    public function wait()
    {
        list ($resp, $status) = $this->call->wait();
        if ($status->code != \Grpc\STATUS_OK) {
            return [null, $status];
        }
        
        if ($this->responseObject !== null) {
            $this->responseObject->import($resp);
            return [$this->responseObject, $status];
        }
        return [$resp, $status];
    }    
    
    public function response()
    {
        list ($resp, $status) = $this->wait();
        \RangelReale\GRPCUtil\Util::checkStatus($status);
        return $resp;
    }
    
    public function getMetadata()
    {
        return $this->getMetadata();
    }    
}