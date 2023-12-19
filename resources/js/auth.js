function toggleFieldsets() {
    let fieldsets = document.querySelectorAll("fieldset");
    let nexts = document.querySelectorAll("fieldset .next");
    let previouses = document.querySelectorAll("fieldset .previous");

    let submitButton = document.querySelector("fieldset .submit");
    let progress = document.getElementById("progress");
    if (submitButton) {
        submitButton.addEventListener("click", function (e) {
            let currentFieldset = e.target.closest("fieldset");
            if (validateInputs(currentFieldset)) {
                return;
            } else {
                e.preventDefault();
            }
        });
    }

    nexts.forEach((button) => {
        button.addEventListener("click", function (e) {
            // e.preventDefault()
            let currentFieldset = button.closest("fieldset");
            let nextFieldset = currentFieldset.nextElementSibling;
            
            currentFieldset.style.right = "200%";
            nextFieldset.style.right = "0";
            
        });
    });

    previouses.forEach((button) => {
        button.addEventListener("click", function () {
            let currentFieldset = button.closest("fieldset");
            let previousFieldset = currentFieldset.previousElementSibling;

            currentFieldset.style.right = "-200%";
            previousFieldset.style.right = "0";

        });
    });
}

toggleFieldsets()