localStorage.setItem('img_id', 0);

var imgArr = [];
function imgDel(id){
    imgArr.push(id);
    document.getElementById(id).style='display: none';
    localStorage.clear();
    localStorage.setItem('img_arr', imgArr);
    console.log(localStorage.getItem('img_arr'));
}

function addAction(route){
    document.getElementById('banner-create').action=route;
}

function pressLeft(key, count){
    document.getElementById('banner-item-'+key).style='display: none';
    if(key === 0){
        document.getElementById('banner-item-'+(count-1)).style='display: flex';
    } else {
        document.getElementById('banner-item-'+(key-1)).style='display: flex';
    }
}

function pressRight(key, count){
    document.getElementById('banner-item-'+key).style='display: none';
    if(key+1 > count-1){
        document.getElementById('banner-item-'+0).style='display: flex';
    } else {
        document.getElementById('banner-item-'+(key+1)).style='display: flex';
    }
}

/* Img slide */
let key = 0;
function leftClick(){
    document.getElementById('l').click();
}
function pressLeftImg(count){
    document.getElementById('block-image-'+key).style='border: none';
    document.getElementById('main-img-'+key).style='display: none';
    if(key === 0){
        key = count - 1;
        document.getElementById('block-image-'+0).style='border: none;';
        document.getElementById('block-image-'+key).style='border: 1px solid #C3C3C3;';
        document.getElementById('main-img-'+key).style='display: block';
    } else {
        key--;
        document.getElementById('block-image-'+key).style='border: 1px solid #C3C3C3;';
        document.getElementById('main-img-'+key).style='display: block';
    }
}

function rightClick(){
    document.getElementById('r').click();
}
function pressRightImg(count){
    document.getElementById('block-image-'+key).style='border: none';
    document.getElementById('main-img-'+key).style='display: none';
    key++;
    if(key > count-1){
        key = 0;
        document.getElementById('block-image-'+(count-1)).style='border: none;';
        document.getElementById('block-image-'+key).style='border: 1px solid #C3C3C3;';
        document.getElementById('main-img-'+key).style='display: block';
    } else {
        document.getElementById('block-image-'+key).style='border: 1px solid #C3C3C3;';
        document.getElementById('main-img-'+key).style='display: block';
    }
}

function submitSort(){
    document.getElementById('sort_btn').click();
}

var menu = 0;
function visibleMenu(){
    if(menu === 0){
        document.getElementById('menu').style='display: block';
        document.getElementById('menu_back').style='display: block';
        document.getElementById('body').style='overflow-y: hidden;'
        menu = 1;
    } else {
        document.getElementById('menu').style='display: none';
        document.getElementById('menu_back').style='display: none';
        document.getElementById('body').style='overflow-y: visible';
        menu = 0;
    }
}

var login = 0;
function loginFunc(){
    if(login === 0){
        document.getElementById('loginForm').style='display: flex';
        document.getElementById('authBack').style='display: flex';
        document.getElementById('body').style='overflow-y: hidden';
        login = 1;
    } else {
        document.getElementById('loginForm').style='display: none';
        document.getElementById('authBack').style='display: none';
        document.getElementById('body').style='overflow-y: visible';
        login = 0;
    }
}

var reg = 0;
function registerForm(){
    if(reg === 0){
        document.getElementById('loginForm').style='display: none';
        document.getElementById('registerForm').style='display: flex';
        document.getElementById('authBack').style='display: flex';
        document.getElementById('body').style='overflow-y: hidden';
        reg = 1;
    } else {
        document.getElementById('registerForm').style='display: none';
        document.getElementById('authBack').style='display: none';
        document.getElementById('body').style='overflow-y: visible';
        login = 0;
        reg = 0;
    }
}

var prof = 0;
function profileFunc(){
    if(prof === 0){
        document.getElementById('profDropdown').style='display: flex';
        prof = 1;
    } else {
        document.getElementById('profDropdown').style='display: none';
        prof = 0;
    }
}

function personalView(){
        document.getElementById('temp').style='display: none';
        document.getElementById('personal').style='display: flex';
        document.getElementById('orders').style='display: none';
        document.getElementById('personalInfo').style='background: black; color: white;';
        document.getElementById('ordersInfo').style='background: white; color: black;';
}
function ordersView(){
        document.getElementById('temp').style='display: none';
        document.getElementById('personal').style='display: none';
        document.getElementById('orders').style='display: flex';
        document.getElementById('personalInfo').style='background: white; color: black;';
        document.getElementById('ordersInfo').style='background: black; color: white;';
}

var rev = 0;
function reviewFunc(){
    if(rev === 0){
        document.getElementById('pageTop').click();
        document.getElementById('reviewForm').style='display: flex';
        document.getElementById('authBack').style='display: flex';
        document.getElementById('body').style='overflow-y: hidden';
        rev = 1;
    } else {
        document.getElementById('reviewForm').style='display: none';
        document.getElementById('authBack').style='display: none';
        document.getElementById('body').style='overflow-y: visible';
        rev = 0;
    }
}

function roleChange(){
    document.getElementById('changeRole').click();
}

function basketBtnClick(id, link){
    var value  = document.getElementById('productLink'+link+id).href;
    document.getElementById('sendProductLink'+link+id).value=value;
    setTimeout(function(){ document.getElementById('basketBtn'+link+id).click();},500);
}

function showOrderHidden1(){
    console.log(1);
    document.getElementById('orderHidden1').style='display: flex !important;';
    document.getElementById('orderHidden2').style='display: none !important;';
}

function showOrderHidden2(){
    console.log(2);
    document.getElementById('orderHidden1').style='display: none !important;';
    document.getElementById('orderHidden2').style='display: flex !important;';
}

/*
function navStyle(id){
    document.getElementById(id).style='background: white; color: black;';
    localStorage.setItem('item_id', id);
}
window.onload = navStyle(localStorage.getItem('item_id'));
*/


