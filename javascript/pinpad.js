



const display = document.querySelector("#display");
const buttons = document.querySelectorAll("button");

let canAddValues = true;

buttons.forEach((btn) => {
    btn.addEventListener("click", () => {
        if (btn.id === "login") {
            display.value = "Login";
            canAddValues = false;
        } else if (btn.id === "delete") {
            display.value = " ";
            canAddValues = true;
        } else {
            if (canAddValues) {
                display.value += btn.id;
            }
        }
    });
});






