<html>
<body>
<div>
    <form method="post">
        <table>
            <tr>
                <td>Enter Msg</td>
                <input type="text" name="txtMassage"/>
                <input type="submit" name="btnSend" value="Send"/>
            </tr>
            <?php
            $host='127.0.0.1';
            $port=20205;
            if(isset($_POST['btnSend']))
            {
                $msg=$_REQUEST['txtMassage'];
                $sock=socket_create(AF_INET, SOCK_STREAM, 0);
                socket_connect($sock, $host, $port);
                socket_write($sock, $msg, strlen($msg));
                $reply=socket_read($sock, 1024);
                $reply=trim($reply);
                $reply='Server says: \t'.$reply;
            }
            ?>
            <tr>
                <td>
                    <textarea name="" id="" cols="30" rows="10"><?php echo @$reply;?></textarea>
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>