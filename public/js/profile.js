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
