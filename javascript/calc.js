/* var num1 = document.getElementById('num1');
var num2 = document.getElementById('num2');
var result = document.getElementById('result');
var whatPercentForm = document.getElementById('whatPercentForm');

whatPercentForm.addEventListener('submit', function(event){

    if(!num1.value || !num2.value){
        alert("HAHAHAHHAHAHAHHA");
    }
    else{

        //
        var x =  parseInt(num1.value);
        var y = parseInt(num2.value);

       
        var percentResult = x/100;
        var calculatePercent = y*percentResult;

        //alert(parseInt(calculatePercent));
        result.innerText = calculatePercent;
        event.preventDefault();
    }
    
}); */
 
const Http = new XMLHttpRequest();
const url='https://jsonplaceholder.typicode.com/posts';
Http.open("GET", url);
Http.send();

Http.onreadystatechange = function(){
    if(this.readyState==4 && this.status==200){
        var response = JSON.parse(this.responseText);
        alert(response[0].title);
        console.log(response.cookies);
    }
}
