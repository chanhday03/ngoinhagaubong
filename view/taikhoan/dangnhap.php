<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng Nhập</title>
  </head>
  <body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
      <div
        class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0"
      >
        <!-- left side -->
        <form action="../../model/taikhoan/dangnhap.php" class="flex flex-col justify-center p-8 md:p-14" method="POST">
          <span class="mb-3 text-4xl font-bold">Đăng Nhập</span>
          <span class="font-light text-gray-400 mb-8">
            Chào mừng quay trở lại! Vui lòng nhập tài khoản của bạn
          </span>
          <div class="py-4">
            <span class="mb-2 text-md">UserName</span>
            <input
              type="text"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
              name="userName"
              id="userName"
            />
          </div>
          <div class="py-4">
            <span class="mb-2 text-md">Password</span>
            <input
              type="password"
              name="passWord"
              id="passWord"
              class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500"
            />
          </div>
          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <input type="checkbox" name="ch" id="ch" class="mr-2" />
              <span class="text-md"> Nhớ trong 30 ngày</span>
            </div>
            <a href="#"><span class="font-bold text-md">Quên mật khẩu</span></a>
          </div>
          <button
            class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300" name="dangnhap"
          >
           Đăng Nhập
          </button>
          <button
            class="w-full border border-gray-300 text-md p-2 rounded-lg mb-6 hover:bg-black hover:text-white"
          >
            <img src="../layout/assets/images/google.svg" alt="img" class="w-6 h-6 inline mr-2" />
            Đăng nhập bằng Google
          </button>
          <div class="text-center text-gray-400">
            Bạn chưa có tài khoản? 
            <a href="signup.html"><span class="font-bold text-black">Đăng kí miễn phí</span></a>
          </div>
        </form>
        <!-- {/* right side */} -->
        <div class="relative">
          <img
            src="../layout/assets/images/teddy-bears-cute-alone-in-forest.jpg"
            alt="img"
            class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover"
          />
          <!-- text on image  -->
          <div
            class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block"
          >
            <span class="text-white text-xl"
              >“Tình yêu đến em không mong <br> đợi gì tình yêu đi em không hề <br> hối tiếc…”
            </span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>