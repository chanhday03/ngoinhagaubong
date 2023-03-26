
<!-- footer -->
<footer class="footer" id="footer">
    <div class="footer-box">
        <img src="https://img.freepik.com/premium-vector/cute-teddy-bear-logo-template_83738-274.jpg?w=2000" alt="" />
        <p>Address : so 1 Trinh Van Bo , Nam Tu Liem , Ha Noi</p>
        <div class="social">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>
    </div>
    <div class="footer-box">
        <h2>Categories</h2>
        <a href="">Gấu bông</a>
        <a href="">Thỏ bông</a>
        <a href="">Gấu bông</a>
    </div>
    <div class="footer-box">
        <h2>Usefull Links</h2>
        <a href="">Payment & Tax</a>
        <a href="">Term of Use</a>
        <a href="">My Blog</a>
        <a href="">Return Policy</a>
    </div>
    <div class="footer-box">
        <h2>Newsletter</h2>
        <p>
            Get 10% Discount with <br />
            Email Newsletter
        </p>
        <form action="">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="" id="" placeholder="Enter Your Mail" />
            <i class="fa-solid fa-arrow-right"></i>
        </form>
    </div>
</footer>
<div class="copyright">
    <p>Copyright @ChanhDay</p>
</div>
<script src="https://kit.fontawesome.com/62fe7548c5.js" crossorigin="anonymous"></script>
<script>
    var swiper = new Swiper(".home-slider", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
    });

    let prev = document.getElementById("prev");
    let next = document.getElementById("next");
    let image = document.querySelector(".images");
    let items = document.querySelectorAll(".images .item");
    let contents = document.querySelectorAll(".content .item");

    let rotate = 0;
    let active = 0;
    let countItem = items.length;
    let rotateAdd = 360 / countItem;

    function nextSlider() {
        active = active + 1 > countItem - 1 ? 0 : active + 1;
        rotate = rotate + rotateAdd;
        show();
    }

    function prevSlider() {
        active = active - 1 < 0 ? countItem - 1 : active - 1;
        rotate = rotate - rotateAdd;
        show();
    }

    function show() {
        image.style.setProperty("--rotate", rotate + "deg");
        image.style.setProperty("--rotate", rotate + "deg");
        contents.forEach((content, key) => {
            if (key == active) {
                content.classList.add("active");
            } else {
                content.classList.remove("active");
            }
        });
    }
    next.onclick = nextSlider;
    prev.onclick = prevSlider;
    const autoNext = setInterval(nextSlider, 3000);
</script>
<script>
    /* When the user clicks on the button, 
    toggle between hiding and showing the dropdown content */
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
</script>
</body>

</html>