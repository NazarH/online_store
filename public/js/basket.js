function basketBtnClick(id, link){
    var value  = document.getElementById('productLink'+link+id).href;
    document.getElementById('sendProductLink'+link+id).value=value;
    setTimeout(function(){ document.getElementById('basketBtn'+link+id).click();},500);
}
