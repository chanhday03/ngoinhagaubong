<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $idpro=$_REQUEST['idpro'];
    $dsbl=loadall_binhluan($idpro);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../layout/assets/style.css">
</head>
<body>
<section class="comment">
        <div class="heading">
            <h1>Bình luận sản phẩm<br /><span>comment products</span></h1>
          </div>    
          <div class="form-commnet">
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
            <input type="hidden" name="idpro" value="<?=$idpro?>">
            <input type="text" name="noidung">
            <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn1">
        </form>
        <section class="main">
            <section class="attendance">
              <div class="attendance-list">
                <h1>List comment</h1>
                <table class="table">
                    <?php
                        foreach ($dsbl as $bl){
                            extract($bl);
                            echo'<tr><td>'.$noidung.'</td>';
                            echo'<td>'.$iduser.'</td>';
                            echo'<tr><td>'.$ngaybinhluan.'</td></tr>';
                        }
                    ?>
                </table>
              </div>
            </section>
          </section>

          <?php
            if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                $noidung=$_POST['noidung'];
                $idpro=$_POST['idpro'];
                $iduser=$_SESSION['user']['id'];
                $ngaybinhluan=date('h:i:sa d/m/Y');
                insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
                header("Location:".$_SERVER['HTTP_REFERER']);
            }
          ?>
    </div>
    </section>
</body>
</html>