<!-- CONTENT -->
<section id="content">
  <!-- MAIN -->
  <main>
    <section class="table-data">
      <div class="table-box">
        <div class="head">
          <h1>Danh sách bình luận</h1>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Mã sản phẩm</th>
              <th>Mã người dùng</th>
              <th>Nội dung</th>
              <th>Thời gian</th>
              <th>Hoạt động</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($comment_list as $comment_list):?>
            <tr>
              <td>
                <?php echo $comment_list["id"] ?>
              </td>
              <td>
                <?php echo $comment_list["product_id"] ?>
              </td>
              <td>
                <?php echo $comment_list["user_id"] ?>
              </td>
              <td>
                <?php echo $comment_list["description"] ?>
              </td>
              <td>
                <?php echo $comment_list["time"] ?>
              </td>
              <td><a  onclick="return confirmDesactiv()" href="index.php?act=delcommnet&idcm=<?php echo $comment_list['id']?>"><i
                    class="fa-solid fa-trash"></i></a></td>
            </tr>
            <?php endforeach?>
          </tbody>
        </table>
        <!-- <div class="">
                  <a href="index.php?act=listUser">
                      <input type="button" value="Add New" class="btn">
                  </a>
              </div> -->
      </div>
    </section>
  </main>
  <!-- MAIN -->
</section>
<!-- CONTENT -->
<script>
  function confirmDesactiv() {
    return confirm("Xóa Bình Luận?");
}
</script>