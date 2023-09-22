localStorage.setItem('img_id', 0);

var imgArr = [];
function imgDel(id)
{
    imgArr.push(id);
    document.getElementById(id).style='display: none';
    localStorage.clear();
    localStorage.setItem('img_arr', imgArr);
    console.log(localStorage.getItem('img_arr'));
}


