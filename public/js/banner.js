function pressLeft(key, count)
{
    document.getElementById('banner-item-'+key).style='display: none';
    if (key === 0) {
        document.getElementById('banner-item-'+(count-1)).style='display: flex';
    } else {
        document.getElementById('banner-item-'+(key-1)).style='display: flex';
    }
}

function pressRight(key, count)
{
    document.getElementById('banner-item-'+key).style='display: none';
    if (key+1 > count-1) {
        document.getElementById('banner-item-'+0).style='display: flex';
    } else {
        document.getElementById('banner-item-'+(key+1)).style='display: flex';
    }
}


