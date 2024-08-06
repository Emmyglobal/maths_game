
const checkbox = document.getElementById('check');
const submit = document.getElementById('sub');
const elements = document.querySelectorAll('.element');
const selectColour = document.getElementById('select');
console.log(`${selectColour}\n, ${checkbox}\n, ${submit}\n, ${elements}`);

checkbox.disabled = true;
submit.disabled = true;


elements.forEach((ele) =>  {
    const x = getIt();
    selectColour.innerHTML = x;
    ele.innerHTML = x;
    ele.style.backgroundColor = x;
    ele.addEventListener("click", () => {
        if (ele.innerHTML === selectColour.innerHTML) {
            checkbox.disabled = false;
            submit.disabled = false;
            submit.classList.remove("btn-light");
            submit.classList.add("btn-success");
        } else {
            location.reload(true);
        }
    });
});


function getIt() {
    const colour = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F"];
    let realColour = "#";
    for (var i = 0; i < 6; i++) {
    
    const random = Math.floor(Math.random() * 16);
    realColour += colour[random];
    }
    return realColour;
}

