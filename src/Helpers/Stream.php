<?php

namespace Helpers;

class Stream
{
    public static function getContents($stream)
    {
        stream_set_blocking($stream, true);
        
        $data = "";
        
        while ($buf = fread($stream,4096)) {
            $data .= $buf;
        }
        
        fclose($stream);

        return $data;
    }
}