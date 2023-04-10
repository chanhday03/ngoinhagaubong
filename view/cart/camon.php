<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

    .camon {
        width: 1248px;
        gap: 50px;
        margin: 0 auto;
        margin-bottom: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .camon .logo img {
        width: 100%;
        height: 500px;
    }

    h4 {
        font-weight: bold;
        font-size: 18px;
        color: darkgoldenrod;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    }
</style>
<div class="camon">
    <div class="logo">
        <img src="https://i.pinimg.com/564x/33/eb/35/33eb35718e2b37b45c33592f7f484cab.jpg" alt="">
    </div>
    <div class="tittle">
        <?php
    echo' <h4>Cảm ơn quý khách đã mua hàng, chúng tôi sẽ liên hệ với bạn sớm nhất!</h4>';
unset($_SESSION["mycart"]);?>
    </div>
</div>