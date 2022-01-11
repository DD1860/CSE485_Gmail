function click_show_more() {
    var x = document.getElementById('show-more');
    if (x.style.display == 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}

let btn_popup_reply = document.getElementById("popup-btn-reply");
let popup_reply = document.querySelector(".popup-reply");
let close_btn_reply = document.querySelector(".close-btn-reply");
// Hiển thị popup khi nhấp chuột vào button
btn_popup_reply.onclick = function() {
    popup_reply.style.display = "block"
}
// Đóng popup khi ấn vào nút đóng
close_btn_reply.onclick = function() {
    popup_reply.style.display = "none"
}

let btnpopupforward = document.getElementById("popup-btn-forward");
let popupforward = document.querySelector(".popup-forward");
let closeBtnforward = document.querySelector(".close-btn-forward");
// Hiển thị popup khi nhấp chuột vào button
btnpopupforward.onclick = function() {
    popupforward.style.display = "block"
}
// Đóng popup khi ấn vào nút đóng
closeBtnforward.onclick = function() {
    popupforward.style.display = "none"
}