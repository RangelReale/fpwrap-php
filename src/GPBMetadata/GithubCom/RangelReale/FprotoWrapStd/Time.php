<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: github.com/RangelReale/fproto-wrap-std/time.proto

namespace GPBMetadata\GithubCom\RangelReale\FprotoWrapStd;

class Time
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac7010a316769746875622e636f6d2f52616e67656c5265616c652f6670" .
            "726f746f2d777261702d7374642f74696d652e70726f746f120b6670726f" .
            "746f5f7772617022440a084e756c6c54696d6512290a0576616c75651801" .
            "2001280b321a2e676f6f676c652e70726f746f6275662e54696d65737461" .
            "6d70120d0a0576616c696418022001280842375a356769746875622e636f" .
            "6d2f52616e67656c5265616c652f6670726f746f2d777261702d7374642f" .
            "676f777261702f677770726f746f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

