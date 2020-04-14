
function openmainpage() {
    const email = document.getElementById("emailInput").value;
    
    if(email === "zadhs2009@gmail.com"){
        window.open("main-page.html");
    }
    else{
        alert("Please enter the correct email address");
    }
    
}