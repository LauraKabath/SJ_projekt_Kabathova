/*toogle visibility*/
function togglePasswordVisibility(fieldId) {
    var passwordField = document.getElementById(fieldId);
    var toggleButton = document.querySelector(`[onclick="togglePasswordVisibility('${fieldId}')"]`);

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleButton.textContent = "Hide";
    } else {
        passwordField.type = "password";
        toggleButton.textContent = "Show";
    }
}