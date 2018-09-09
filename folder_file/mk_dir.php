<?php
if(!is_dir('http://localhost/test/folder_file/mk_dir.php/images'))
{
    mkdir('images', 0777);
    echo 'images -> ';
    if(!is_dir('http://localhost/test/folder_file/mk_dir.php/images/transfer'))
    {
        mkdir('http://localhost/test/folder_file/mk_dir.php/images/transfer', 0777);
        echo 'transfer -> ';
        if(!is_dir('http://localhost/test/folder_file/mk_dir.php/images/transfer/oo_receive_solve'))
        {
            mkdir('http://localhost/test/folder_file/mk_dir.php/images/transfer/oo_receive_solve', 0777);
            echo 'oo_receive_solve';
        }
    }
}
/*$path='images/transfer/oo_receive_solve/11';
$dir=$path;
if(!is_dir($dir))
{
    mkdir($dir, 0777);
}*/
?>