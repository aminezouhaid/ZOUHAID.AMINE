
let input_box = document.querySelector(".t9adiya_inp");
let add_btn = document.querySelector(".add");
let t9adiya_list = document.querySelector(".t9adiya_list");
let clear_btn = document.getElementById("clear");
let input_value;
let values = [];
add_btn.addEventListener("click",() =>{
    input_value = input_box.value;

    if(values.includes(input_value)){
        input_box.value = '';
        return;
    }

    values.push(input_value);

    t9adiya_list.innerHTML += "<div class='t9adiya'><input type='checkbox' name='check' class='check'><p class='info'>"+ input_value +"</p><button class='delete'>delete</button></div>";

    input_box.value = '';
});



document.onclick = function(e){
    if(e.target.className == "clear"){
        // e.target.parentNode.removeChild("t9adiya");
        t9adiya_list.innerHTML = '<button class="clear" id="clear">Clear the list of t9adiya</button>';
    }
}