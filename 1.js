function success(element) {
    var ss = document.getElementById("success");
    var tabs = document.getElementsByClassName("tabs mt-3")[0];
    var modal = document.getElementsByClassName("modal-body")[0];
    modal.style.display = "none";
    ss.style.display = "";
    ss.style.margin="20px";
}

function paymentselect()
    {
        var d=document.getElementById("select");
        var displaytext=d.options[d.selectedIndex].text;
        document.getElementById("txtvalue").value=displaytext;
    }

let but=document.getElementsByClassName('button')[0]
let container=document.getElementsByClassName('container')[0]
let body=document.getElementsByClassName('body')[0]
let pop=document.getElementsByClassName('pop')[0]
but.onclick=()=>{
    container.style.display="none";   
    body.style.backgroundColor="white";
    pop.style.display = "block";
};
