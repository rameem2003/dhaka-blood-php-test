const title_greeting = document.getElementById("greetings");


let date = new Date();


let hour = date.getHours();


if(hour >= 5 && hour <= 11){
    title_greeting.innerHTML = "Good morning ";
}else if(hour >= 12 && hour <= 15){
    title_greeting.innerHTML = "Good Afternoon";
}else if(hour >= 16 && hour <= 18){
    title_greeting.innerHTML = "Good Evening ";
}else{
    title_greeting.innerHTML = "Good Night ";
}

console.log(hour);