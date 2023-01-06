<?php
class DB{
    public $con;
    protected $servername = "localhost";
    protected $username = "cuongvu";
    protected $password = "";
    protected $dbname = "mvc";

    function __construct()
    {
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);
        mysqli_select_db($this->con, $this->dbname);
        mysqli_query($this->con, "SET NAME 'utf8");

        if($this->con){
            echo "connect Successfully";
        }
        else{
            die("Connection failed:" .mysqli_connect_error());
        }
    }

    

}

?>