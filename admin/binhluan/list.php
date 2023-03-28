<section class="comment">
        <div class="heading">
            <h1>Danh sách bình luận</h1>
          </div>    
          <div class="form-commnet">
        <form action="" method="POST">
            <input type="hidden" name="id" value="">
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
                      <th>Name User</th>
                      <th>Comment Content</th>
                      <th>Date</th>
                      <th>Action</th>
                      <th></th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                        foreach($listbinhluan as $binhluan){
                            extract($binhluan);
                            // $suabl="index.php?act=suabl&id=".$id;
                            $xoabl= "index.php?act=xoabl&id=".$id;
                            echo 
                        '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td> '.$id.' </td>
                            <td> '.$description.' </td>
                            <td> '.$user_id .' </td>
                            <td> '.$product_id.' </td>
                            <td> '.$time.' </td>
                            <td> <a href="'.$xoabl.'"> <input type="button" value="Xóa "></a></td>
                        </tr>';
                        } 
                        ?>
                  </tbody>
                </table>
              </div>
            </section>
          </section>
    </div>
    </section>