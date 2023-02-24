const areas = [
    "Abdullahpur, Dhaka",
    "Uttara",
    "Mirpur",
    "Pallabi",
    "Kazipara",
    "Kafrul",
    "Agargaon",
    "Sher-e-Bangla Nagar",
    "Dhaka Cantonment Cantonment area",
    "Banani Model Town",
    "Gulshan",
    "Mohakhali",
    "Bashundhara Residential Area",
    "Banasree",
    "Baridhara",
    "Uttarkhan",
    "Dakshinkhan",
    "Bawnia",
    "Khilkhet",
    "Tejgaon",
    "Farmgate",
    "Mohammadpur",
    "Rampura",
    "Badda",
    "Satarkul",
    "Beraid",
    "Khilgaon",
    "Vatara",
    "Gabtali",
]

const area_select = document.getElementById("area_select");
let option = ""

for(i = 0; i<areas.length; i++){
    option = option +  `<option value="${areas[i]}">${areas[i]}</option>`
}
area_select.innerHTML = option