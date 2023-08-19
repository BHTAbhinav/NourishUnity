function success(element) {
    var ss = document.getElementById("success");
    var tabs = document.getElementsByClassName("tabs mt-3")[0];
    var modal = document.getElementsByClassName("modal-body")[0];
    modal.style.display = "none";
    ss.style.display = "";
    ss.style.margin="20px";
}

function generateCertificate() {
    var cer=document.getElementById("certificate-hidden");
    var name=document.getElementById("name");
    var certname=document.getElementById("certname");
    cer.style.display="";
    certname.innerHTML=name.value;
}