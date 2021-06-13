console.log("Ajax tutorials in one videos");


    let fetchBtn=         document.getElementById('fetchBtn');

fetchBtn.addEventListener('click',buttonclickHandler)

function buttonclickHandler(){


    console.log('u have clicked button');
    const xhr = new XMLHttpRequest();

xhr.open('GET','harry.txt',true);



}