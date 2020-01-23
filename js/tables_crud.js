
function openForm(x) {
    document.getElementById(x).style.display="block";
}

function closeForm(x) {
    document.getElementById(x).style.display= "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target.className === "crudModal") {
        event.target.style.display = "none";
    }
}