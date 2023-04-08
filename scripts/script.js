'use strict';
/*burger */
const burger = document.querySelector('.headerBurger'),
      burgerMenu = document.querySelector('.burgerMenu'),
      body = document.querySelector('body'),
      header = document.querySelector('header');
burgerMenu.style.display = 'none';

function closeBurgerMenu(){
    burgerMenu.style.display = 'none';
    body.style.overflow = '';
    header.style.position = 'fixed';
};

burger.addEventListener('click', (event)=> {
    event.preventDefault();
    if (burgerMenu.style.display == 'none') {
        burgerMenu.style.display = 'flex';
        body.style.overflow = 'hidden'; 
        header.style.position = 'static';

    } else {
        console.log('test2');
        closeBurgerMenu();
    }
});

burgerMenu.addEventListener('click', (event)=>{
    if (event.target.classList.contains('burgerMenu')){
        closeBurgerMenu();
    }
    
});

// добвать крестик для выхода из меню


/*menu*/
const menu = document.querySelector('.headerRight_menu');

    menu.addEventListener('click', (event)=> {
        // event.preventDefault();
        console.log('click');
        
    });

/*Calc */
const calcBrand = document.querySelector('#calc_brand');
const calcModelPhone = document.querySelector('#calc_model');
const calcServicePhone = document.querySelector('#calc_service');
const calcPrice = document.querySelector('#calc_price');
export async function calc (brand, modelId, ids) {
    
    modelId = modelId -1;
    let response = await fetch('/getjson.php?arg=0');
    console.log('RESPONSE!')
    if (response.ok) {
        response = await response.json();
        console.log('GET:', response);
        calcBrand.innerHTML = '';
        calcModelPhone.innerHTML = '';
        calcServicePhone.innerHTML ='';
        calcPrice.innerHTML = '0 ₽';
        if (brand) {
            calcBrand.innerHTML += `<option value="${brand}">${brand}</option>`;
        } else {
        Object.entries(response).forEach((elem, i) => {
            calcBrand.innerHTML += `<option value="${elem[0]}">${elem[0]}</option>`;
        });}
        changeBrandPhone();
        changeModelPhone('', '' ,ids);
        calcBrand.addEventListener('change', ()=>{changeBrandPhone('', modelId)});
        calcModelPhone.addEventListener('change', ()=>{changeModelPhone('', '' , ids)});
        calcServicePhone.addEventListener('change', changeServicePhone);   
        

    }
    else {
        console.error('ОШИБКА ', response.status);
    }

    function changeBrandPhone (event, modelId) {
        console.log('событие');
        let modelList = response[calcBrand.value][modelId] || response[calcBrand.value];
       
        calcModelPhone.innerHTML = '';
        if (!Array.isArray(modelList)) {modelList = [modelList]};
        for (let i=0; i<Object.keys(modelList).length; i++){
            calcModelPhone.innerHTML += `<option value="${i}" id="optionModel${i}">${modelList[i].name}</option>`;
        }      
        changeServicePhone();
        
    }
    function changeModelPhone (event, serivceList_, idService) {
        let serivceList = serivceList_ || response[calcBrand.value][calcModelPhone.value];
        console.log('changeModelPhone', serivceList);
        let serivcesKeys = Object.keys(serivceList);
        calcServicePhone.innerHTML ='';
        if (idService) {
            idService.forEach(i => calcServicePhone.innerHTML += `<option value="${i}" id="optionService${i}">${serivcesKeys[i]}</option>`);
            
            
        } else {
            for (let i=3; i<serivcesKeys.length; i++){
                if (serivceList[serivcesKeys[i]] == 0) {
                    continue;
                } else {
                calcServicePhone.innerHTML += `<option value="${i}" id="optionService${i}">${serivcesKeys[i]}</option>`;
                }
            }
        }
        changeServicePhone();
    }

    function changeServicePhone(event, serivces_) {    
        let serivces = serivces_ || response[calcBrand.value][calcModelPhone.value]; 
        console.log('changeServicePhone', serivces);
        let serivcesKeys = Object.keys(serivces);
        if (calcServicePhone.value == 3 || calcServicePhone.value == 4 || calcServicePhone.value == 5) {
            calcPrice.innerHTML = +serivces[serivcesKeys[2]] + +serivces[serivcesKeys[calcServicePhone.value]] + '₽';
        } else {
            calcPrice.innerHTML = +serivces[serivcesKeys[calcServicePhone.value]] + '₽';
        }
    }
    
}




//reviews
async function getReviews (){
    let response2 = await fetch('/getjson.php?arg=1');
    if (response2.ok) {
        response2 = await response2.json();
        response2 = response2.reviews;
        console.log('GET:', response2);
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
            
            console.log(column);
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
console.log(bookRepair);
const bookForm = document.querySelector('.requestForm'),
    closeForm = document.querySelector('.closeRequestForm');
console.log(bookForm);
bookRepair.addEventListener('click', ()=> {
    console.log('click');
    requestFormWrapper.style.display = 'flex';
    body.style.overflow = 'hidden'; 
    document.querySelector('.formServiceWrapper').style.display = 'block';
    document.querySelector('.header2Form').innerHTML = 'Запись на ремонт';
    document.querySelector('.clientModelPhone').value = document.querySelector(`#optionModel${document.querySelector('.calc_modelPhone').value}`).innerHTML;
    document.querySelector('.clientService').value = document.querySelector(`#optionService${document.querySelector('.calc_service').value}`).innerHTML;
    document.querySelector('.calc_service').value;
    document.querySelector('.clientPrice').value = document.querySelector('#calc_price').textContent;
});
closeForm.addEventListener('click', ()=> {
    requestFormWrapper.style.display = 'none';
    body.style.overflow = ''; 
});
requestFormWrapper.addEventListener('click',(event)=> {
    if (event.target.classList[0] == 'requestFormWrapper') {
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
    });