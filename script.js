let activeCellId = 1;

//alert("script getriggerd");
let sudokustring = "<ul>";
for (i = 0; i < 81; i++)
{
    // OLD CODE sudokustring += "<li id='"+i+"' onclick='activateCell("+i+")'></li>";
    sudokustring += `<li id='${i}' onclick='activateCell(${i})'></li>`
}

sudokustring += "</ul>";
document.getElementById("sudoku").innerHTML = sudokustring;

function selectNumber(number){
    document.getElementById(activeCellId).innerText = number;
}

function activateCell(id){
    document.getElementById(activeCellId).classList.remove("bg-primary-subtle");
    activeCellId = id;
    document.getElementById(activeCellId).classList.add("bg-primary-subtle");
}

const sudokus = [6, 3, 7, 0, 1, 5, 2, 8, 9, 7, 1, 2, 0, 0, 0, 6, 4, 8, 6, 3, 7, 4, 1, 0, 2, 8, 9, 6, 0, 0, 4, 1, 5, 2, 8, 0, 7, 0, 0, 0, 0, 3, 6, 0, 8, 0, 5, 0, 8, 3, 0, 0, 0, 4, 7, 1, 0, 0, 0, 0, 6, 4, 8, 0, 0, 6, 0, 0, 0, 0, 9, 4,0, 5, 6, 8, 3, 0, 7, 9, 4];

function genrateSudoku(){
    let random_nmbr = Math.floor(Math.random()*7);
    let selected_sudoku = sudokus[random_nmbr];
    for (let i = 1; i < 81; i++) {
       document.getElementById(i).innerText = selected_sudoku[index];
       index++;
      }
}

