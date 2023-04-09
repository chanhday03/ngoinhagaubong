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
                <i class='bx bxs-add-to-queue'></i>
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
                <i class='bx bxs-card'></i>
                <span class="text">
                    <h3>30</h3>
                    <p>Products</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>20</h3>
                    <p>Users</p>
                </span>
            </li>

        </ul>
        </div>
    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->