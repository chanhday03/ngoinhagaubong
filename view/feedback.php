
<style>
@import url("https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Pacifico&display=swap");
.text_feedback {
    margin-bottom: 5px;
    font-size: 30px;
    color: rgb(54, 54, 49);
    text-align: center;
    font-weight: bold;
}

.emoji {
    font-size: 40px;
    display: flex;
    justify-content: center;
}

.emoji>div:not(:first-child) {
    margin-left: 10px;
}

.emoji>div {
    cursor: pointer;
    transition: transform 0.2s ease-in;
}

.emoji>div:hover {
    cursor: pointer;
    transform: scale(1.4);
}

.textarea {
    height: 300px;
    width: 30%;
    display: block;
    background-color: #a68567;
    color: #eee;
    border: none;
    resize: none;
    outline: none;
    height: 0;
    opacity: 0;
    transition: all 0.6s cubic-bezier(0.075, 0.82, 0.165, 1);
}

.textarea--active {
    padding: 10px;
    opacity: 1;
    height: 50px;
    font-size: 15px;
}

.btn_feedback {
    text-decoration: none;
    color: #746161;
    padding: 4px 10px;
    border-radius: 4px;
    background-color: rgb(210, 237, 101);
    position: absolute;
    right: 30px;
    font-weight:bold;
    bottom: 5px;
    display : none;
}

.btn--active {
    display: inline-block;
}

</style>
<form action="model/feedback.php" class="w-full pt-36 pb-20 relative" method="POST">
    <div class="wrapper">
        <p class="text_feedback">Trải nghiệm của bạn về Website này ?</p>
        <div class="emoji">
            <div onclick="setInputValue_1()">😊</div>
            <div onclick="setInputValue_2()">😢</div>
            <div onclick="setInputValue_3()">😁</div>
            <div onclick="setInputValue_4()">😍</div>
            <div onclick="setInputValue_5()">😠</div>
        </div>
    </div>
    <div class="flex w-full justify-center ">
    <textarea class="textarea border " cols="30" rows="10" name="note"
        placeholder="Bạn hãy cho chúng mình biết về đánh giá của bạn  !"></textarea>
    </div>
    <?php
    if(isset($_SESSION["id"])){
        echo '<input type="hidden" value=" '.$_SESSION["id"].'" name="user_id" class="user_id">';
    }?>
    
    <input type="hidden" value=" " name="emoji" class="hidden">
    <button type="submit" class="btn_feedback border-2 border-[#a68567]" name="btn_feedback" value="feedback">Gửi cho bọn tớ !</button>

</form>
<script>
const container = document.querySelector('.container');
const emoji = document.querySelector('.emoji');
const textarea = document.querySelector('.textarea');
const btn = document.querySelector('.btn_feedback');
const hidden = document.querySelector('.hidden');
emoji.addEventListener('click', (e) => {
    if (e.target.className.includes('emoji')) return;
    textarea.classList.add('textarea--active');
    btn.classList.add('btn--active');

})
container.addEventListener('mouseleave', () => {
    if (e.target.className.includes('emoji')) return;
    textarea.classList.remove('textarea--active');
    btn.classList.remove('btn--active');
})

function setInputValue_1() {
    hidden.setAttribute("value", "😊");
    alert("Đã chọn tâm trạng 😊");
}

function setInputValue_2() {
    hidden.setAttribute("value", "😢");
    alert("Đã chọn tâm trạng 😢");
}

function setInputValue_3() {
    hidden.setAttribute("value", "😁");
    alert("Đã chọn tâm trạng 😁");
}

function setInputValue_4() {
    hidden.setAttribute("value", "😍");
    alert("Đã chọn tâm trạng 😍");
}

function setInputValue_5() {
    hidden.setAttribute("value", "😠");
    alert("Đã chọn tâm trạng 😠");
}
</script>

</html>