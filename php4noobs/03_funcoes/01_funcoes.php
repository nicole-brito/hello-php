<?php

echo "[" . date('Y-m-d H:i:s') . "] nic:" . strtoupper("Olar") . PHP_EOL;

function  sendMEssage(string $nickname, string $message)
{
    echo "[" . date('Y-m-d H:i:s') . "] $nickname: " . strtoupper($message) . PHP_EOL;
}

sendMEssage("nic", "olar");
sendMEssage("tom", "méo");
