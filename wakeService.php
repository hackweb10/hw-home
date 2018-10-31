<?php
namespace hwHome;
class WakeOnLAN
{
    public static function wakeUp2($macAddressHexadecimal, $broadcastAddress)
    {
        $macAddressHexadecimal = str_replace(':', '', $macAddressHexadecimal);
        // check if $macAddress is a valid mac address
        if (!ctype_xdigit($macAddressHexadecimal)) {
            throw new \Exception('Mac address invalid, only 0-9 and a-f are allowed');
        }
        $macAddressBinary = pack('H12', $macAddressHexadecimal);
        $magicPacket = str_repeat(chr(0xff), 6).str_repeat($macAddressBinary, 16);
        if (!$fp = fsockopen('udp://' . $broadcastAddress, 7, $errno, $errstr, 2)) {
            throw new \Exception("Cannot open UDP socket: {$errstr}", $errno);
        }
        fputs($fp, $magicPacket);
        fclose($fp);
        echo 'woke up';
    }
    
    public static function wakeUp($mac, $addr){
        $addr_byte = explode(':', $mac);
        $hw_addr = '';

        for ($a=0; $a < 6; $a++) $hw_addr .= chr(hexdec($addr_byte[$a]));

        $msg = chr(255).chr(255).chr(255).chr(255).chr(255).chr(255);

        for ($a = 1; $a <= 16; $a++) $msg .= $hw_addr;

        // send it to the broadcast address using UDP
        // SQL_BROADCAST option isn't help!!
        $s = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
        if ($s == false)
        {
            echo "Error creating socket!\n";
            echo "Error code is '".socket_last_error($s)."' - " . socket_strerror(socket_last_error($s));
        }
        else
        {
            // setting a broadcast option to socket:
            $opt_ret = socket_set_option($s, 1, 6, TRUE);
            if($opt_ret < 0)
            {
                echo "setsockopt() failed, error: " . strerror($opt_ret) . "\n";
            }
            $e = socket_sendto($s, $msg, strlen($msg), 0, $addr, 2050);
            echo $e;
            socket_close($s);
            echo " Magic Packet sent (".$e.") to ".$addr.", MAC=".$mac;
        }
    } 
    
}
?>
