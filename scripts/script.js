 'use strict';
 /*burger menu */
const burger = document.querySelector('.headerBurger'),
      burgerMenu = document.querySelector('.burgerMenu'),
      body = document.querySelector('body'),
      header = document.querySelector('header'),
      closeBurgerMenuButton = document.querySelector('.closeBurgerMenu'),
      headerBurger = document.querySelector('.headerBurger');
function closeBurgerMenu(){
    burgerMenu.style.display = 'none';
    body.style.overflow = '';
    header.style.position = 'fixed';
    headerBurger.style.display = 'block';
};
function openBurgerMenu() {
    header.style.position = 'inherit';
    burgerMenu.style.display = 'flex';
    body.style.overflow = 'hidden';
    headerBurger.style.display = 'none';
}
burger.addEventListener('click', (event) => {
    openBurgerMenu();
});
closeBurgerMenuButton.addEventListener('click', (event) => {
    closeBurgerMenu();
});
/*menu*/
const menu = document.querySelector('.headerRight_menu');

    menu.addEventListener('click', (event)=> {
        // event.preventDefault();
        console.log('click');
        
    });

/*Calc */
export function calc () {
    const calcBrand = document.querySelector('#calc_brand');
    const calcModelPhone = document.querySelector('#calc_model');
    const calcServicePhone = document.querySelector('#calc_service');
    const calcPrice = document.querySelector('#calc_price');
    let response;

    calcBrand.addEventListener('change', ()=> {changeBrandPhone(calcBrand.value)});
    calcModelPhone.addEventListener('change', () => {changeModelPhone()});
    calcServicePhone.addEventListener('change', () => {changeServicePhone()});

    async function getBrands (brand, modelId, ids) {
        response = await fetch('/getjson.php?arg=1');
        if (response.ok) {
  
            let listBrandHTML = '';
            response = await response.json();
            console.log(response);
            response.brands.forEach(element => {
                listBrandHTML +=`<option value="${element.id}">${element.brands}</option>`;
            });
            calcBrand.innerHTML = listBrandHTML;
        }
        changeBrandPhone();
    }

    async function changeBrandPhone (modelId) {
        response = await fetch(`/getjson.php?arg=${calcBrand.value}`);
        if (response.ok) {
            response = await response.json();
            calcModelPhone.innerHTML = '';
            for (let i=0; i<response.length; i++){
                calcModelPhone.innerHTML += `<option value="${i}" id="optionModel${i}">${response[i]['Модель']}</option>`;
            }      
        }
        changeModelPhone();
    }

    function changeModelPhone () {
        calcServicePhone.innerHTML = '';
        for (let i=2; i<Object.keys(response[calcModelPhone.value]).length; i++){
            calcServicePhone.innerHTML += `<option value="${i}" id="optionService${i}">${Object.keys(response[calcModelPhone.value])[i]}</option>`;
        }      
        changeServicePhone();
    }

    function changeServicePhone() {
        let key = Object.keys(response[calcModelPhone.value])[calcServicePhone.value]; 
        calcPrice.innerHTML = response[calcModelPhone.value][key] + '₽';
    }

    async function start () {
        await getBrands();
        await changeBrandPhone(calcBrand.value);
    }
    start ();
}


//reviews
async function getReviews (){
    let response2 = await fetch('/getjson.php?arg=0');
    if (response2.ok) {
        response2 = await response2.json();
        response2 = response2.reviews;
        const reviewsWrapper = document.querySelector('.reviewsWrapper');
        let j=0;
        for (let i=0; i<3; i++) {
           
            let column = document.createElement('div');
            column.classList.add('reviewsColumn');
            for (let l=0; l<3; l++) {
                column.insertAdjacentHTML('afterbegin', `<div class="reviewsItem">
                <div class="reviewsItem_user">
                    <img class="reviewsItem_photo" src="${response2[j].avatar}" alt="reviews">
                    <div class="reviewsItem_name smallBoldText">${response2[j].name}</div>
                </div>
                <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                <div class="reviewsItem_text">${response2[j].text}</div>
                <div class="reviewsItem_date smallGreyText">${response2[j].date}</div>
                <div class="reviewsItem_resource smallGreyText"><a href="${response2[j].resource}" target="_blank">${response2[j].source}</a></div>
            </div>`);
            j++;
            };
            
            reviewsWrapper.insertAdjacentElement('afterbegin', column);

        }
    } else {
        console.error('ОШИБКА ', response.status);
    }
}
getReviews ();


/**book a repair **/

const requestFormWrapper = document.querySelector('.requestFormWrapper');
const bookRepair = document.querySelector('#bookRepair');
const bookForm = document.querySelector('.requestForm'),
    closeForm = document.querySelector('.closeRequestForm');
bookRepair.addEventListener('click', ()=> {
    requestFormWrapper.style.display = 'flex';
    body.style.overflow = 'hidden'; 
    header.style.position = 'inherit';
    document.querySelector('.formServiceWrapper').style.display = 'block';
    document.querySelector('.header2Form').innerHTML = 'Запись на ремонт';
    document.querySelector('.clientModelPhone').value = document.querySelector(`#optionModel${document.querySelector('.calc_modelPhone').value}`).innerHTML;
    document.querySelector('.clientService').value = document.querySelector(`#optionService${document.querySelector('.calc_service').value}`).innerHTML;
    document.querySelector('.calc_service').value;
    document.querySelector('.clientPrice').value = document.querySelector('#calc_price').textContent;
});
closeForm.addEventListener('click', ()=> {
    header.style.position = 'fixed';
    requestFormWrapper.style.display = 'none';
    body.style.overflow = ''; 
});
requestFormWrapper.addEventListener('click',(event)=> {
    if (event.target.classList[0] == 'requestFormWrapper') {
        header.style.position = 'fixed';
        requestFormWrapper.style.display = 'none';
        body.style.overflow = ''; 
    }
});

/* callback */
const callbackButton = document.querySelector('.callback');
    callbackButton.addEventListener('click', ()=> {
        requestFormWrapper.style.display = 'flex';
        body.style.overflow = 'hidden'; 
        document.querySelector('.formServiceWrapper').style.display = 'none';
        document.querySelector('.header2Form').innerHTML = 'Форма обратного звонка';
        header.style.position = 'inherit';
    });


