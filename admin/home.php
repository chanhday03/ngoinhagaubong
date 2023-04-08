<!-- CONTENT -->
<section id="content">
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <a href="index.php?act=listdm"> <i class='bx bxs-add-to-queue'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdsdm as $dsdm) {
                        extract($dsdm);
                        echo '
                        <h3>' . $countsp . '</h3>
                        <p>' . $tendm . '</p>';
                    }

                    ?>
                </span>
            </li>
            <li>
                <a href="index.php?act=listsp"> <i class='bx bxs-card'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdssp as $dssp) {
                        extract($dssp);
                        echo '
                        <h3>' . $count . '</h3>
                        <p>Product</p>';
                    }

                    ?>
                </span>
            </li>
            <li>
                <a href="index.php?act=dskh"><i class='bx bxs-group'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdsuser as $dsuser) {
                        extract($dsuser);
                        echo '
                        <h3>' . $count . '</h3>
                        <p>User</p>';
                    }

                    ?>
                </span>
            </li>

        </ul>
        <ul class="box-info">
            <li>
                <a href="index.php?act=dsbl"><i class='bx bxs-message-dots'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdscomment as $dscmt) {
                        extract($dscmt);
                        echo '
                        <h3>' . $count . '</h3>
                        <p>Comment</p>';
                    }

                    ?>
                </span>
            </li>
            <li>
                <a href="index.php?act=feedback"> <i class='bx bxs-note'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdsfeedback as $dsfeedback) {
                        extract($dsfeedback);
                        echo '
                        <h3>' . $count . '</h3>
                        <p>Feedback</p>';
                    }

                    ?>
                </span>
            </li>
            <li>
                <a href="index.php?act=dskh"><i class='bx bxs-group'></i></a>
                <span class="text">
                    <?php
                    foreach ($listdsuser as $dsuser) {
                        extract($dsuser);
                        echo '
                        <h3>' . $count . '</h3>
                        <p>User</p>';
                    }

                    ?>
                </span>
            </li>

        </ul>
       
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->