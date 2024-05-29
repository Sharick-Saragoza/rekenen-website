const oud = document.getElementById("inp_oud")

const soort = document.getElementById("select_soort")
const percentage = document.getElementById("inp_perc")
const factor = document.getElementById("inp_factor")

const nieuw = document.getElementById("inp_nieuw")

const knop = document.getElementById("losop_btn")

let ber_factor

function checkInformation()
{
    //alert("Hoi")
    if(oud.value != "") {
        oud.classList.remove('is-invalid')
        oud.classList.add('is-valid')
    } else {
        oud.classList.remove('is-valid')
        oud.classList.add('is-invalid')
    }
    if(soort.value != "Kies....") {
        soort.classList.remove('is-invalid')
        soort.classList.add('is-valid')
    } else {
        soort.classList.remove('is-valid')
        soort.classList.add('is-invalid')
    }
    if(percentage.value != "") {
        percentage.classList.remove('is-invalid')
        percentage.classList.add('is-valid')
    } else {
        percentage.classList.remove('is-valid')
        percentage.classList.add('is-invalid')
    }
    if(nieuw.value != "") {
        nieuw.classList.remove('is-invalid')
        nieuw.classList.add('is-valid')
    } else {
        nieuw.classList.remove('is-valid')
        nieuw.classList.add('is-invalid')
    }
    if(soort.value != "Kies...." && percentage.value != ""){
        if(soort.value == 1)
            ber_factor = percentage.value / 100
        else if (soort.value == 2)
            ber_factor = 1 + percentage.value / 100
        else 
            ber_factor = 1 - percentage.value / 100
        factor.value = ber_factor
        document.getElementById("inp_deler").value = ber_factor
    }
    if((oud.value != "" && nieuw.value != "") || (oud.value != "" && percentage.value != "" && soort.value != "Kies....") || (nieuw.value != "" && percentage.value != "" && soort.value != "Kies....")){
        knop.disabled = false
    } else {
        knop.disabled = true
    }
    
    
}

function solveProblem()
{
    
}