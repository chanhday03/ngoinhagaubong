<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $product_id=$_REQUEST['product_id'];
    $dsbl=get_binhluan($product_id);
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
            <input type="hidden" name="ngoinhagaubong" value="<?=$product_id?>">
            <input type="text" name="description">
            <input type="submit" name="guibinhluan" value="Gửi bình luận" class="btn1">
        </form>
        <section class="main">
            <section class="attendance">
              <div class="attendance-list">
                <h1>List comment</h1>
                <table class="table">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name Product</th>
                      <th>Name User</th>
                      <th>Comment Content</th>
                      <th>Date</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                        foreach ($dsbl as $bl){
                            extract($bl);
                            echo'<tr><td>'.$id.'</td>';
                            echo'<td>'.$product_id .'</td>';
                            echo'<td>'.$user_id .'</td>';
                            echo'<td>'.$description.'</td>';
                            echo'<td>'.$time.'</td></tr>';
                        }
                    ?>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </section>

          <?php
            if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                $description=$_POST['description'];
                $product_id =$_POST['product_id '];
                $user_id=$_SESSION['user']['id'];
                $time=date('h:i:sa d/m/Y');
                insert_binhluan($description,$user_id,$product_id,$time);
                header("Location:".$_SERVER['HTTP_REFERER']);
            }
          ?>
    </div>
    </section>
</body>
</html>