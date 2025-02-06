document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        let valid = true;

        // Validate all inputs
        const inputs = form.querySelectorAll("input, select");
        inputs.forEach(function(input) {
            if (input.value.trim() === "") {
                valid = false;
                input.style.borderColor = "red";
            } else {
                input.style.borderColor = "#ccc";
            }
        });

        if (!valid) {
            event.preventDefault();
            alert("يرجى تعبئة جميع الحقول.");
        }
    });
});
