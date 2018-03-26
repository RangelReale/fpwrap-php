<?php

namespace RangelReale\FPWrap;

class ClientStreamingCall extends AbstractCall
{
    public $isRequestObject;
    private $responseObject;

    public function __construct(\Grpc\ClientStreamingCall $call, $isRequestObject, $responseObject = null)
    {
        parent::__construct($call);
        $this->isRequestObject = $isRequestObject;
    }
    
    public function write($data, array $options = [])
    {
        if ($data !== null && $this->isRequestObject !== null) {
            $this->call->write($data->export(), $options);
            return;
        }
        
        $this->call->write($data, $options);
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
}