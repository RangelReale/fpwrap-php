<?php

namespace RangelReale\FPWrap;

class BidiStreamingCall extends AbstractCall
{
    public $isRequestObject;
    private $responseObject;

    public function __construct(\Grpc\BidiStreamingCall $call, $isRequestObject, $responseObject = null)
    {
        parent::__construct($call);
        $this->isRequestObject = $isRequestObject;
        $this->responseObject = $responseObject;
    }
    
    public function read()
    {
        $resp = $this->call->read();
        if ($resp === null) {
            return null;
        }
        
        if ($this->responseObject !== null) {
            $cur_resp = clone $this->responseObject;
            $cur_resp->import($resp);
            return $cur_resp;
        }
        
        return $resp;
    }    

    public function write($data, array $options = [])
    {
        if ($data !== null && $this->isRequestObject !== null) {
            $this->call->write($data->export(), $options);
            return;
        }
        
        $this->call->write($data, $options);
    }    
    
    public function writesDone()
    {
        $this->call->writesDone();
    }    
    
    public function getStatus()
    {
        return $this->call->getStatus();
    }    
    
    public function checkStatus()
    {
        return \RangelReale\GRPCUtil\Util::checkStatus($this->getStatus());
    }
}