function draw(){

    getImage();

    var canvas = document.getElementById('tile');
    if (canvas.getContext){
        var ctx = canvas.getContext('2d');
    }
}


function getImage(){
    var iterArray = <?php echo $tile['data']; ?>;

    alert(iterArray[0]);
}
