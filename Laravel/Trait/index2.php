<?php
class classicPhone {
/*
 * Gọi điện
 */
    public function callVoice() {
        echo "<br>".__METHOD__;
    }
/*
 * Nhận cuộc gọi
 */
    public function receiveVoice(){
        echo "<br>".__METHOD__;
    }
}

/*
 * Khai báo Trait
 */
trait ipod {
    public function listenMusic(){
        echo "<br>".__METHOD__;
    }
}
trait radio {
    public function listenRadio() {
        echo "<br>".__METHOD__;
    }
}
trait computer {
    public function sendEmail(){
        echo "<br>".__METHOD__;
    }
    public function playGame(){
        echo "<br>".__METHOD__;
    }
    public function workOffice(){
        echo "<br>".__METHOD__;
    }
}

class smartPhone extends classicPhone {
    /*
     * Nhúng trait trong class để sử dụng đa kế thừa
     */
    use ipod, radio,computer;
}
/*
 * Khởi tạo đối tượng Smartphone
 */
$samsung = new smartPhone();
$samsung->callVoice();
$samsung->receiveVoice();
$samsung->listenMusic();
$samsung->listenRadio();
$samsung->playGame();