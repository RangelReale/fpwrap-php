<?php

namespace RangelReale\FPWrap;

class ServerStreamingCall extends AbstractCall
{
    private $responseObject;

    public function __construct(\Grpc\ServerStreamingCall $call, $responseObject = null)
    {
        parent::__construct($call);
        $this->responseObject = $responseObject;
    }
    
    public function responses()
    {
        foreach ($this->call->responses() as $resp) {
            if ($this->responseObject !== null) {
                $cur_resp = clone $this->responseObject;
                $cur_resp->import($resp);
                yield $cur_resp;
            } else {
                yield $resp;            
            }
        }
    }
    
    public function getStatus()
    {
        return $this->call->getStatus();
    }    

    public function checkStatus()
    {
        return \RangelReale\GRPCUtil\Util::checkStatus($this->getStatus());
    }
    
    public function getMetadata()
    {
        return $this->call->getMetadata();
    }    
}