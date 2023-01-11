let s = document.getElementById('login_log');
let x = document.getElementById('login_reg');
let ss = document.getElementById('but_top_l');
let xx = document.getElementById('but_top_r');

function login_reg(){
    s.classList.remove("display_l");
    x.classList.add("display_r");
    xx.classList.remove("style_top");
    ss.classList.add("style_top");
}
function login_log(){
    x.classList.remove("display_r");
    s.classList.add("display_l");
    ss.classList.remove("style_top");
    xx.classList.add("style_top");
}