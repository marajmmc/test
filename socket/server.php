<?php
/**
 * Created by PhpStorm.
 * User: Maraj
 * Date: 5/9/18
 * Time: 12:22 PM
 */
$host='127.0.0.1';
$port=20205;
set_time_limit(0);
$sock=socket_create(AF_INET, SOCK_STREAM, 0);
socket_bind($sock, $host,$port);
socket_listen($sock);
echo 'Listener for connection';

class Chat
{
    function readline()
    {
        return rtrim(fgets(STDIN));
    }
}

do
{
    $accept=socket_accept($sock);
    $msg=socket_read($accept,1024);
    $msg=trim($msg);
    echo 'Client Says:\t '.$msg.'\n\n';
    $line = new Chat();
    echo 'Enter Reply: ';
    $reply=$line->readline();
    socket_write($accept, $reply, strlen($reply));
}
while(true);
socket_close($accept);
socket_close($sock);