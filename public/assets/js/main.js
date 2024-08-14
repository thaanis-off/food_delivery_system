/*=============== SEARCH BAR JS ===============*/
const toggleSearch = (search, button) =>{
    const searchBar = document.getElementById(search),
          searchButton = document.getElementById(button)
 
    searchButton.addEventListener('click', () =>{
        // We add the show-search class, so that the search bar expands
        searchBar.classList.toggle('show-search')
    })
 }
 toggleSearch('search-bar', 'search-button')
 
// btn increament start 

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity1');
    const buttonPlus = document.getElementById('button-plus1');
    const buttonMinus = document.getElementById('button-minus1');

    buttonPlus.addEventListener('click', function () {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    buttonMinus.addEventListener('click', function () {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity2');
    const buttonPlus = document.getElementById('button-plus2');
    const buttonMinus = document.getElementById('button-minus2');

    buttonPlus.addEventListener('click', function () {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    buttonMinus.addEventListener('click', function () {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const quantityInput = document.getElementById('quantity3');
    const buttonPlus = document.getElementById('button-plus3');
    const buttonMinus = document.getElementById('button-minus3');

    buttonPlus.addEventListener('click', function () {
        quantityInput.value = parseInt(quantityInput.value) + 1;
    });

    buttonMinus.addEventListener('click', function () {
        if (parseInt(quantityInput.value) > 1) {
            quantityInput.value = parseInt(quantityInput.value) - 1;
        }
    });
});
// btn icrmnt end


//passStrength

// var pass = document.getElementById('password')
// var msg = document.getElementById('message')
// var str = document.getElementById('strength')

// pass.addEventListener('input', () => {
//     if (pass.value.length > 0) {
//         msg.style.display = "block";
//     }
//     else {
//         msg.style.display = "none";
//     }
//     if (pass.value.length < 4) {
//         str.innerHTML = "weak";
//         pass.style.borderColor = "#ff5925";
//         msg.style.color = "#ff5925";
//     }
//     else if (pass.value.length >= 4 && pass.value.length < 8) {
//         str.innerHTML = "medium";
//         pass.style.borderColor = "yellow";
//         msg.style.color = "yellow";
//     }
//     else if (pass.value.length >= 8) {
//         str.innerHTML = "strong";
//         pass.style.borderColor = "#26d730";
//         msg.style.color = "#26d730";
//     }
// })