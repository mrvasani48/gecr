let btn1 = document.querySelector('#btn1');
let btn2 = document.getElementById("btn2");
let btn3 = document.getElementById("btn3");
let content =document.getElementById("content");

btn1.addEventListener('click', () => {
    content.innerHTML = '<h1>btn1</h1>';
});
btn2.addEventListener('click', () => {
    content.innerHTML = '<h1>btn2</h1>';
});
btn3.addEventListener('click', () => {
    content.innerHTML = '<h1>btn3</h1>';
});
