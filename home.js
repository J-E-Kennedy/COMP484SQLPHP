function start(){
    passMatch()

}

function passMatch()
{

    pw=document.getElementById("pw").value;
    rePassword=document.getElementById("repw").value;
    if(pw !== rePassword)
    {
        document.getElementById("nomatch").style.visibility="visible";
    }
    else
    {
        document.getElementById("nomatch").style.visibility="hidden";
    }
}
window.addEventListener("load", start,false);