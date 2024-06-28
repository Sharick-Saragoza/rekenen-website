let tableof = 2.5
let tabletimes = 3.3
let antwoordenGoed = 0;

function displayQuestion() {
    document.getElementById("tijd").innerHTML = "Je krijgt 2 minuten om zoveel mogelijk goede antwoorden te geven!";
    let opgtekst = ""
    let tafeltot = document.getElementById("inputtafellengte").value
    let tafelvan = document.getElementById("inputtafelvan").value
    tableof = tafelvan
    //ik moet een random getal hebben tussen 1 en tafeltot (ze mogen zelf beide ook)
    let randomnumber = Math.floor(Math.random() * tafeltot) + 1
    tabletimes = randomnumber
    //let randomnumber = Math.ceil(Math.random() * tafeltot)
    opgtekst = randomnumber + " x " + tafelvan
    document.getElementById("inputsom").value = opgtekst

    let count = 120;
    const timer = setInterval(function() {
    count--;
    console.log(count);
    if (count === 0) {
    clearInterval(timer);
    alert("Je tijd is op");
    }
    }, 1000);

}

function checkAnswer() {
    let answer = document.getElementById("inputantwoord").value
    let correctanswer = tableof * tabletimes
    if (answer == correctanswer){
        let opgtekst = ""
    let tafeltot = document.getElementById("inputtafellengte").value
    let tafelvan = document.getElementById("inputtafelvan").value
    tableof = tafelvan
    //ik moet een random getal hebben tussen 1 en tafeltot (ze mogen zelf beide ook)
    let randomnumber = Math.floor(Math.random() * tafeltot) + 1
    tabletimes = randomnumber
    //let randomnumber = Math.ceil(Math.random() * tafeltot)
    opgtekst = randomnumber + " x " + tafelvan
    document.getElementById("inputsom").value = opgtekst
        document.getElementById("inputantwoord").classList.remove("is-invalid");
        document.getElementById("inputantwoord").classList.add("is-valid");
        document.getElementById("antwoordengoed").innerHTML = antwoordenGoed++;
        document.getElementById("antwoordengoed").innerHTML = antwoordenGoed;
    }
    else{
        // alert("FOUT, Goeie antwoord=" + tableof * tabletimes)
        document.getElementById("inputantwoord").classList.remove("is-valid");
        document.getElementById("inputantwoord").classList.add("is-invalid")
        
    }   
}