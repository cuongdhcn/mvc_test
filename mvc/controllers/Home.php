<?php
    class Home extends Controller{
        function SayHi(){
            $SinhVien = $this->model("SvModel");
            echo $SinhVien->GetSV();
        }
        function Show($year2, $year1){
            $SinhVien = $this->model("SvModel");
            $name = $SinhVien->GetSV();
            $tuoi = $SinhVien->Total($year2, $year1);
            $this->view("SvView", ["HoTen"=>$name,
             "Tuoi"=>$tuoi,
             "SV"=>$SinhVien->listSv()
            ]);
        }
       
    }
    
?>