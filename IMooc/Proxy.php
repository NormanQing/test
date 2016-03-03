<?php



namespace IMooc;

/**
 * Description of Proxy
 *
 * @author Administrator
 */
class Proxy implements IUserProxy{
    //put your code here
    public function getUserName($id) {
        $db=  Factory::getDatabase('slave');
        $db->query("select name from user where id={$id}");
    }
    
    public function setUserName($id, $name) {
        $db=  Factory::getDatabase('master');
        $db->query("update user set name='$name' where id={$id}");
    }
}
