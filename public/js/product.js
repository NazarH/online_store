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
