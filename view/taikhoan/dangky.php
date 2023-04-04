<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Đăng ký</title>
</head>

<body>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="relative flex flex-col m-6 space-y-8 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0">
            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14">
                <h2 class="text-3xl mb-4">Đăng ký</h2>
                <p class="mb-4">
                    Tạo tài khoản của bạn. Nó miễn phí và chỉ mất một phút
                </p>
                <form action="../../model/taikhoan/dangky.php" method="POST">
                    <div class="grid grid-cols-1 gap-5">
                        <input type="text" name="Username" placeholder="Username" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500
w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500" required="">

                    </div>
                    <div class="mt-5">
                        <input type="text" name="Email" placeholder="Email" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500
w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 w-full" required="">
                    </div>
                    <div class="mt-5">
                        <input type="password" name="Password" placeholder="Password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500
w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 w-full">
                    </div>
                    <div class="mt-5">
                        <input type="password" placeholder="Confirm Password" class="w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500
w-full p-2 border border-gray-300 rounded-md placeholder:font-light placeholder:text-gray-500 w-full" required="">
                    </div>
                    <div class="mt-5">
                        <input type="checkbox" class="border border-gray-400">
                        <span>
                            Tôi chấp nhận <a href="#" class="text-purple-500 font-semibold">Điều khoản sử dụng</a> & <a
                                href="#" class="text-purple-500 font-semibold">Chính sách bảo mật</a>
                        </span>
                    </div>
                    <div class="mt-5">
                        <button type="submit" name="btn_submit"
                            class="w-full bg-black text-white p-2 rounded-lg mb-6 hover:bg-white hover:text-black hover:border hover:border-gray-300">
                            Đăng Ký
                        </button>
                    </div>
                  
                </form>
            </div>
            <!-- {/* right side */} -->
            <div class="relative">
                <img src="../layout/assets/images/teddy-bears-cute-alone-in-forest.jpg" alt="img"
                    class="w-[400px] h-full hidden rounded-r-2xl md:block object-cover" />
                <!-- text on image  -->
                <div
                    class="absolute hidden bottom-10 right-6 p-6 bg-white bg-opacity-30 backdrop-blur-sm rounded drop-shadow-lg md:block">
                    <span class="text-white text-xl">“Tình yêu đến em không mong <br> đợi gì tình yêu đi em không hề
                        <br> hối tiếc…”
                    </span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>