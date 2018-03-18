<?php

namespace Steamrobot;

class Steamrobot
{
    public function handle()
    {
        $mailbox = imap_open(
            "{imap.gmail.com:993/imap/ssl}INBOX",
            "atomy1338@gmail.com",
            "DfOLrvkn"
        );

        var_dump($mailbox);die(' ' . __FILE__ . ':' . __LINE__); // %TODO
    }
}