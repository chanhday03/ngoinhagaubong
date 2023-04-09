<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>AdminHub</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    :root {
        --poppins: 'Poppins', sans-serif;
        --lato: 'Lato', sans-serif;
        --light: #F9F9F9;
        --brown: #a68567;
        --light-blue: #CFE8FF;
        --grey: #eee;
        --dark-grey: #AAAAAA;
        --dark: #342E37;
        --red: #DB504A;
        --yellow: #FFCE26;
        --light-yellow: #FFF2C6;
        --orange: #FD7238;
        --light-orange: #FFE0D3;
    }

    html {
        overflow-x: hidden;
    }

    body.dark {
        --light: #0C0C1E;
        --grey: #060714;
        --dark: #FBFBFB;
    }

    body {
        /* position: relative; */
        background: var(--grey);
        overflow-x: hidden;
    }

    /* SIDEBAR */
    #sidebar {
        position: fixed;
        top: 0;
        left: 0;
        width: 280px;
        height: 100%;
        background: var(--light);
        z-index: 2000;
        font-family: var(--lato);
        transition: .3s ease;
        overflow-x: hidden;
        scrollbar-width: none;
    }

    #sidebar::--webkit-scrollbar {
        display: none;
    }

    #sidebar.hide {
        width: 60px;
    }

    #sidebar .brand {
        font-size: 24px;
        font-weight: 700;
        height: 56px;
        display: flex;
        align-items: center;
        color: var(--brown);
        position: sticky;
        top: 0;
        left: 0;
        background: var(--light);
        z-index: 500;
        padding-bottom: 20px;
        box-sizing: content-box;
    }

    #sidebar .brand .bx {
        min-width: 60px;
        display: flex;
        justify-content: center;
    }

    #sidebar .side-menu {
        width: 100%;
        margin-top: 48px;
    }

    #sidebar .side-menu li {
        height: 48px;
        background: transparent;
        margin-left: 6px;
        border-radius: 48px 0 0 48px;
        padding: 4px;
    }

    #sidebar .side-menu li.active {
        background: var(--grey);
        position: relative;
    }

    #sidebar .side-menu li.active::before {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        top: -40px;
        right: 0;
        box-shadow: 20px 20px 0 var(--grey);
        z-index: -1;
    }

    #sidebar .side-menu li.active::after {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        bottom: -40px;
        right: 0;
        box-shadow: 20px -20px 0 var(--grey);
        z-index: -1;
    }

    #sidebar .side-menu li a {
        width: 100%;
        height: 100%;
        background: var(--light);
        display: flex;
        align-items: center;
        border-radius: 48px;
        font-size: 16px;
        color: var(--dark);
        white-space: nowrap;
        overflow-x: hidden;
    }

    #sidebar .side-menu.top li.active a {
        color: var(--brown);
    }

    #sidebar.hide .side-menu li a {
        width: calc(48px - (4px * 2));
        transition: width .3s ease;
    }

    #sidebar .side-menu li a.logout {
        color: var(--red);
    }

    #sidebar .side-menu.top li a:hover {
        color: var(--brown);
    }

    #sidebar .side-menu li a .bx {
        min-width: calc(60px - ((4px + 6px) * 2));
        display: flex;
        justify-content: center;
    }

    /* SIDEBAR */
    /* CONTENT */
    #content {
        position: relative;
        width: calc(100% - 280px);
        left: 280px;
        transition: .3s ease;
    }

    #sidebar.hide~#content {
        width: calc(100% - 60px);
        left: 60px;
    }

    /* NAVBAR */
    #content nav {
        height: 56px;
        background: var(--light);
        padding: 0 24px;
        display: flex;
        align-items: center;
        grid-gap: 24px;
        font-family: var(--lato);
        position: sticky;
        top: 0;
        left: 0;
        z-index: 1000;
    }

    #content nav::before {
        content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        bottom: -40px;
        left: 0;
        border-radius: 50%;
        box-shadow: -20px -20px 0 var(--light);
    }

    #content nav a {
        color: var(--dark);
    }

    #content nav .bx.bx-menu {
        cursor: pointer;
        color: var(--dark);
    }

    #content nav .nav-link {
        font-size: 16px;
        transition: .3s ease;
    }

    #content nav .nav-link:active {
        color: var(--brown);
    }

    #content nav form {
        max-width: 400px;
        width: 100%;
        margin-right: auto;
    }

    #content nav form .form-input {
        display: flex;
        align-items: center;
        height: 36px;
    }

    #content nav form .form-input input {
        flex-grow: 1;
        padding: 0 16px;
        height: 100%;
        border: none;
        background: var(--grey);
        border-radius: 36px 0 0 36px;
        outline: none;
        width: 100%;
        color: var(--dark);
    }

    #content nav form .form-input button {
        width: 36px;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        background: var(--brown);
        color: var(--light);
        font-size: 18px;
        border: none;
        outline: none;
        border-radius: 0 36px 36px 0;
        cursor: pointer;
    }

    #content nav .notification {
        font-size: 20px;
        position: relative;
    }

    #content nav .notification .num {
        position: absolute;
        top: -6px;
        right: -6px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid var(--light);
        background: var(--red);
        color: var(--light);
        font-weight: 700;
        font-size: 12px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #content nav .profile img {
        width: 36px;
        height: 36px;
        object-fit: cover;
        border-radius: 50%;
    }

    #content nav .switch-mode {
        display: block;
        min-width: 50px;
        height: 25px;
        border-radius: 25px;
        background: var(--grey);
        cursor: pointer;
        position: relative;
    }

    #content nav .switch-mode::before {
        content: '';
        position: absolute;
        top: 2px;
        left: 2px;
        bottom: 2px;
        width: calc(25px - 4px);
        background: var(--brown);
        border-radius: 50%;
        transition: all .3s ease;
    }

    #content nav #switch-mode:checked+.switch-mode::before {
        left: calc(100% - (25px - 4px) - 2px);
    }

    /* NAVBAR */
    /* MAIN */
    #content main {
        width: 100%;
        padding: 36px 24px;
        font-family: var(--poppins);
        max-height: calc(100vh - 56px);
        overflow-y: auto;
    }

    .head-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .head-header input,
    select {
        cursor: pointer;
        width: 150px;
        padding: 8px 20px;
        border-radius: 10px;
        outline: none;
        border: none;
        border: 1px solid var(--brown);
    }

    .head-header input:hover {
        background-color: var(--brown);
        color: white;
    }

    #content main .head-title {
        display: flex;
        align-items: center;
        justify-content: space-between;
        grid-gap: 16px;
        flex-wrap: wrap;
    }

    #content main .head-title .left h1 {
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 10px;
        color: var(--dark);
    }

    #content main .head-title .left .breadcrumb {
        display: flex;
        align-items: center;
        grid-gap: 16px;
    }

    #content main .head-title .left .breadcrumb li {
        color: var(--dark);
    }

    #content main .head-title .left .breadcrumb li a {
        color: var(--dark-grey);
        pointer-events: none;
    }

    #content main .head-title .left .breadcrumb li a.active {
        color: var(--brown);
        pointer-events: unset;
    }

    #content main .box-info {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        grid-gap: 24px;
        margin-top: 36px;
    }

    #content main .box-info li {
        padding: 24px;
        background: var(--light);
        border-radius: 20px;
        display: flex;
        align-items: center;
        grid-gap: 24px;
    }

    #content main .box-info li .bx {
        width: 80px;
        height: 80px;
        border-radius: 10px;
        font-size: 36px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #content main .box-info li:nth-child(1) .bx {
        background: var(--light-blue);
        color: var(--brown);
    }

    #content main .box-info li:nth-child(2) .bx {
        background: var(--light-yellow);
        color: var(--yellow);
    }

    #content main .box-info li:nth-child(3) .bx {
        background: var(--light-orange);
        color: var(--orange);
    }

    #content main .box-info li .text h3 {
        font-size: 24px;
        font-weight: 600;
        color: var(--dark);
    }

    #content main .box-info li .text p {
        color: var(--dark);
    }

    #content main .table-data {
        display: flex;
        flex-wrap: wrap;
        grid-gap: 24px;
        margin-top: 24px;
        width: 100%;
        color: var(--dark);
    }

    #content main .table-data>div {
        border-radius: 20px;
        background: var(--light);
        padding: 24px;
        overflow-x: auto;
    }

    #content main .table-data .head {
        display: flex;
        align-items: center;
        grid-gap: 16px;
        margin-bottom: 24px;
        color: var(--brown);
    }

    #content main .table-data .head h3 {
        margin-right: auto;
        font-size: 24px;
        font-weight: 600;
    }

    #content main .table-data .head .bx {
        cursor: pointer;
    }

    #content main .table-data .table-box {
        flex-grow: 1;
        flex-basis: 500px;
    }

    #content main .table-data .table-box table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        margin: 25px 0;
        margin: 0 auto;
    }

    #content main .table-data .table-box table th {
        padding: 15px 18px;
        font-size: 13px;
        text-align: left;
        border-bottom: 1px solid var(--grey);
        background: #a68567;
        border-right: 1px solid rgb(248, 244, 239);
    }

    #content main .table-data .table-box table td {
        padding: 16px 10px;
    }

    #content main .table-data .table-box table tr td:first-child {
        display: flex;
        align-items: center;
        grid-gap: 12px;
        padding-left: 6px;
    }

    #content main .table-data .table-box table tbody tr:nth-of-type(odd) {
        background: #f3f3f3;
    }

    #content main .table-data .table-box table tbody tr:last-of-type {
        border-bottom: 2px solid #a68567;
    }

    #content main .table-data .table-box table td img {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        object-fit: cover;
    }

    #content main .table-data .table-box table tbody tr:hover {
        background: #e7e5e5;
    }

    #content main .table-data .table-box table tr td .status {
        font-size: 10px;
        padding: 6px 16px;
        color: var(--light);
        border-radius: 20px;
        font-weight: 700;
    }

    #content main .table-data .table-box table tr td .status.completed {
        background: var(--brown);
    }

    #content main .table-data .table-box table tr td .status.process {
        background: var(--yellow);
    }

    #content main .table-data .table-box table tr td .status.pending {
        background: var(--orange);
    }

    #content main .table-data .todo {
        flex-grow: 1;
        flex-basis: 300px;
    }

    #content main .table-data .todo .todo-list {
        width: 100%;
    }

    #content main .table-data .todo .todo-list li {
        width: 100%;
        margin-bottom: 16px;
        background: var(--grey);
        border-radius: 10px;
        padding: 14px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    #content main .table-data .todo .todo-list li .bx {
        cursor: pointer;
    }

    #content main .table-data .todo .todo-list li.completed {
        border-left: 10px solid var(--brown);
    }

    #content main .table-data .todo .todo-list li.not-completed {
        border-left: 10px solid var(--orange);
    }

    #content main .table-data .todo .todo-list li:last-child {
        margin-bottom: 0;
    }

    /* MAIN */
    /* CONTENT */
    @media screen and (max-width: 768px) {
        #sidebar {
            width: 200px;
        }

        #content {
            width: calc(100% - 60px);
            left: 200px;
        }

        #content nav .nav-link {
            display: none;
        }
    }

    @media screen and (max-width: 576px) {
        #content nav form .form-input input {
            display: none;
        }

        #content nav form .form-input button {
            width: auto;
            height: auto;
            background: transparent;
            border-radius: none;
            color: var(--dark);
        }

        #content nav form.show .form-input input {
            display: block;
            width: 100%;
        }

        #content nav form.show .form-input button {
            width: 36px;
            height: 100%;
            border-radius: 0 36px 36px 0;
            color: var(--light);
            background: var(--red);
        }

        #content nav form.show~.notification,
        #content nav form.show~.profile {
            display: none;
        }

        #content main .box-info {
            grid-template-columns: 1fr;
        }

        #content main .table-data .head {
            min-width: 420px;
        }

        #content main .table-data .order table {
            min-width: 420px;
        }

        #content main .table-data .todo .todo-list {
            min-width: 420px;
        }
    }

    .btn {
        cursor: pointer;
        padding: 8px 20px;
        margin-top: 20px;
        margin-right: 10px;
        border-radius: 10px;
        cursor: pointer;
        background: transparent;
        border: 1px solid #a68567;
    }

    .btn:hover {
        background: #a68567;
        color: white;
        transition: 1s;
    }

    .nut {
        display: flex;
    }

    .fa-trash {
        color: red;
        font-size: 30px;
    }

    .fa-pen {
        color: greenyellow;
        font-size: 30px;
        margin-right: 30px;
    }
</style>

<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="index.php?act=danhsach">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <!-- <li class="active">
        <a href="index.php?act=listDB">
          <i class='bx bxs-dashboard'></i>
          <span class="text">Dashboard</span>
        </a>
      </li> -->
            <li>
                <a href="index.php?act=adddm">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Category</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=addsp">
                    <i class='bx bxs-analyse'></i>
                    <span class="text">Products</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=dskh">
                    <i class='bx bxs-group'></i>
                    <span class="text">User</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=dsbl">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Comment</span>
                </a>
            </li>
            <li>
                <a href="index.php?act=order">
                    <i class='bx bx-cart'></i>
                    <span class="text">Order</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="index.php?act=thongke">
                    <i class='bx bxs-chart'></i>
                    <span class="text">Statistical</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->
    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell'></i>
                <span class="num">8</span>
            </a>
            <a href="#" class="profile">
                <img src="img/people.png">
            </a>
        </nav>
        <!-- NAVBAR -->
    </section>
    <!-- CONTENT -->
    <script>
        const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');
        allSideMenu.forEach(item => {
            const li = item.parentElement;
            item.addEventListener('click', function () {
                allSideMenu.forEach(i => {
                    i.parentElement.classList.remove('active');
                })
                li.classList.add('active');
            })
        });
        // TOGGLE SIDEBAR
        const menuBar = document.querySelector('#content nav .bx.bx-menu');
        const sidebar = document.getElementById('sidebar');
        menuBar.addEventListener('click', function () {
            sidebar.classList.toggle('hide');
        })
        const searchButton = document.querySelector('#content nav form .form-input button');
        const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
        const searchForm = document.querySelector('#content nav form');
        searchButton.addEventListener('click', function (e) {
            if (window.innerWidth < 576) {
                e.preventDefault();
                searchForm.classList.toggle('show');
                if (searchForm.classList.contains('show')) {
                    searchButtonIcon.classList.replace('bx-search', 'bx-x');
                } else {
                    searchButtonIcon.classList.replace('bx-x', 'bx-search');
                }
            }
        })
        if (window.innerWidth < 768) {
            sidebar.classList.add('hide');
        } else if (window.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
        window.addEventListener('resize', function () {
            if (this.innerWidth > 576) {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
                searchForm.classList.remove('show');
            }
        })
        const switchMode = document.getElementById('switch-mode');
        switchMode.addEventListener('change', function () {
            if (this.checked) {
                document.body.classList.add('dark');
            } else {
                document.body.classList.remove('dark');
            }
        })
    </script>
</body>

</html>