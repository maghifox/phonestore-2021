<?php

class DBController
{
    // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "phonestore";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }

    function register($username,$password,$name)
    {
        $insert = mysqli_query($this->con,"insert into user values ('','$username','$password','$name')");
        return $insert;
    }

    function login($username,$password,$remember)
    {
        $query = mysqli_query($this->con,"select * from user where username='$username'");
        $data_user = $query->fetch_array();
        if(password_verify($password,$data_user['password']))
        {

            if($remember)
            {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($username)
    {
        $query = mysqli_query($this->con,"select * from user where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $data_user['name'];
        $_SESSION['is_login'] = TRUE;
    }

}