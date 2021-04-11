function affiche() {
    var btn = document.getElementById("submitBtn");
    var msg = document.getElementById("message");
    var nul = document.getElementById("nul");
    btn.onclick = function(e) {
        e.preventDefault();
        var inputValuee = msg.value;
        if(msg.value === ''){
           alert("the input is empty");
            nul.classList.toggle("show");

        }
        
        else{
            msg.value = '';
            document.getElementById("name").innerHTML= "Hello " + inputValuee;
        }

    }

}
affiche();
