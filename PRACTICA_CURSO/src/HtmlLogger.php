<?php

namespace War;

class HtmlLogger implements Logger
{
    public function info($message)
    {
        echo "<p>$message</p>";
    }
}