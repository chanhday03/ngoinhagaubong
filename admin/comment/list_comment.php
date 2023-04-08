<!-- CONTENT -->
<section id="content">
  <!-- MAIN -->
  <main>
    <section class="table-data">
      <div class="table-box">
        <div class="head">
          <h1>List Comment</h1>
        </div>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>ID product</th>
              <th>ID user</th>
              <th>description</th>
              <th>Time</th>
              <th>Action</th>
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
              <td><a href="index.php?act=delcommnet&idcm=<?php echo $comment_list['id']?>"><i
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