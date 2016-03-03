<?php


namespace IMooc;
/**
 * Description of IDatabase
 *
 * @author Administrator
 */
/**
 * 接口
 */
interface IDatabase{
    function connect($host,$user,$password,$dbname);
    function query($sql);
    function close();
}

