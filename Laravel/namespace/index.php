<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/*
 * Namespace để tránh trường hợp trùng tên hàm, tên class
 */
class ConnectDatabase{
    public function connectSQL(){
        echo "<br> ".__METHOD__;
    }
}
//class ConnectDatabase{
//    public function connectMySQL(){
//        echo "<br> ".__METHOD__;
//    }
//}
?>
<h1>Namespace (Không gian tên) để tránh trường hợp trùng tên hàm, tên class</h1>
<pre>
    Khi 1 file không khai báo namespace như file index.php này thì xem như nó đang ở GLOBAL NAMSPACE
    nếu cùng namspace thì các class cùng tên nhau sẽ xảy ra lỗi
    Để sử dụng được class trong namespace khác thì sẽ phải
    import namespace đó vào file hiện tại
    Quá trình import sẽ sử dụng cú pháp:
    use namespace;
    VD:
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    * Cần chú ý : use bên trên class là import namespace
    còn use trong class là import trait cho mục đích đa kế thừa
    namespace App;

    // import namespace
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // import trait
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

</pre>
<?php
include_once "app/controllers/fontend/indexController.php";
include_once "app/controllers/backend/indexController.php";
include_once "app/models/commonModels.php";
include_once "vendor/vendor1/src/console/http.php";
/*
 * Không import namespace thì khi khởi tạo class phải sử dụng đầy đủ namespace
 */
use app\controllers\backend\indexController;
$BackendController = new indexController();
$BackendController->indexAction();
?>
</html>
