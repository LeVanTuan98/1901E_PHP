<?php
    class conNguoi {
        public $name;
        public function getInfo(){
            echo "<br>".__METHOD__;
        }
    }
    /*
     * Class nhanVien chỉ có thể kế thừa từ 1 class
     */
    class nhanVien extends conNguoi {

    }
