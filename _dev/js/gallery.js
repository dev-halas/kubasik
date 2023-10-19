const items = [...document.querySelectorAll('.offer-item')];
const ul = document.querySelector('.offer-nav-buttons');

const numberOfImagesOnPage = 12;

let currentImagesPage = 0;
let visibleItems = [];

const numberOfImages = Math.ceil(items.length / numberOfImagesOnPage);

const displayImagesOnPage = () => {
    visibleItems.forEach(item => {
        item.style.display = 'none';
    })
    visibleItems = items.filter((_, idx) => idx >= currentImagesPage * numberOfImagesOnPage );
    visibleItems.splice(numberOfImagesOnPage);
    visibleItems.forEach(item => {
        item.style.display = 'grid';
    })
}

const createNavigationButtons = () => {
    const docFrag = document.createDocumentFragment();

    for (let idx = 0; idx < numberOfImages; idx++) {
        const li = document.createElement("li");
        const button = document.createElement("button");
        button.className = `offer-nav-button ${!idx ? 'current' : ''}`;
        button.textContent = `${idx+1}`;
        li.appendChild(button);
        docFrag.appendChild(li);
    }
    
    if (ul) {
        ul.appendChild(docFrag);
    }
}

const addButtonEvent = () => {
    const buttons = document.querySelectorAll('.offer-nav-button');
    buttons.forEach((btn, idx) => {
        btn.addEventListener('click', _ => {
            buttons[currentImagesPage].classList.remove('current');
            currentImagesPage = idx;
            btn.classList.add('current');
            displayImagesOnPage();
        })
    })
}

window.addEventListener('load', _ => {
    displayImagesOnPage();
    createNavigationButtons();
    addButtonEvent();
})
