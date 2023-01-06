<?php
class SvModel extends DB{
    public function GetSV(){
        return "Vu Van Cuong- qua dep trai-2";
    }
    public function Total($m, $n){
        return $m - $n;
    }
    public function listSv(){
        $qr = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $qr);
    }
}
?>