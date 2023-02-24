// get all donors profile
const allDonors = document.querySelectorAll(".profile");



// search donor by blood group function
const searchBlood = () => {
    // get blood input
    const blood = document.getElementById("blood");

    for(b = 0; b<allDonors.length; b++){
        allDonors[b].style.display = "none";
    }

    for(let s = 0; s<allDonors.length; s++){
        const donorBlood = allDonors[s].getAttribute("data-blood");

        if(blood.value == donorBlood){
            allDonors[s].style.display = "block"
        }
        if(blood.value == ""){
            allDonors[s].style.display = "block"
        }
    }
}

// search donor by location function
const searchLocation = () => {
    // get location input
    const location = document.getElementById("location");

    for(l = 0; l<allDonors.length; l++){
        allDonors[l].style.display = "none";
    }

    for(let s = 0; s<allDonors.length; s++){
        const donorLocation = allDonors[s].getAttribute("data-location");

        if(location.value == donorLocation){
            allDonors[s].style.display = "block"
        }

        if(location.value == ""){
            allDonors[s].style.display = "block"
        }
    }
}