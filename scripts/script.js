'use strict';
/*burger */
const burger = document.querySelector('.headerBurger'),
      burgerMenu = document.querySelector('.burgerMenu'),
      body = document.querySelector('body');
burgerMenu.style.display = 'none';

function closeBurgerMenu(){
    burgerMenu.style.display = 'none';
    body.style.overflow = '';  
};

burger.addEventListener('click', ()=> {
    if (burgerMenu.style.display == 'none') {
        burgerMenu.style.display = 'flex';
        body.style.overflow = 'hidden'; 

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
        event.preventDefault();
        console.log('click');
        
    });

/*Calc */
const calcBrand = document.querySelector('#calc_brand');
const calcModelPhone = document.querySelector('#calc_model');
const calcServicePhone = document.querySelector('#calc_service');
const calcPrice = document.querySelector('#calc_price');
async function calc () {
    let response = await fetch('http://localhost:3000/db');
    if (response.ok) {
        response = await response.json();
        console.log('GET:', response);
        calcBrand.innerHTML = '';
        calcModelPhone.innerHTML = '';
        calcServicePhone.innerHTML ='';
        calcPrice.innerHTML = '0 ₽';
        Object.entries(response).forEach((elem, i) => {
            calcBrand.innerHTML += `<option value="${elem[0]}">${elem[0]}</option>`;
        });
        changeBrandPhone();
        changeModelPhone();
        calcBrand.addEventListener('change', changeBrandPhone);
        calcModelPhone.addEventListener('change', changeModelPhone);
        calcServicePhone.addEventListener('change', changeServicePhone);        
    }
    else {
        console.error('ОШИБКА ', response.status);
    }

    function changeBrandPhone () {
        let modelList = response[calcBrand.value];
        calcModelPhone.innerHTML = '';
        for (let i=0; i<Object.keys(modelList).length; i++){
            calcModelPhone.innerHTML += `<option value="${i}">${modelList[i].name}</option>`;
        }      
        changeModelPhone();  
    }

    function changeModelPhone () {
        let serivceList = response[calcBrand.value][calcModelPhone.value];
        
        console.log('SERVICES:', serivceList);
        let serivcesKeys = Object.keys(serivceList);
        calcServicePhone.innerHTML ='';
        for (let i=3; i<serivcesKeys.length; i++){
            calcServicePhone.innerHTML += `<option value="${i}">${serivcesKeys[i]}</option>`;
        }
        changeServicePhone();
    }

    function changeServicePhone () {     
        let serivces = response[calcBrand.value][calcModelPhone.value];
        let serivcesKeys = Object.keys(serivces);
        if (calcServicePhone.value == 3 || calcServicePhone.value == 4 || calcServicePhone.value == 5) {
            calcPrice.innerHTML = +serivces[serivcesKeys[2]] + +serivces[serivcesKeys[calcServicePhone.value]] + '₽';
        } else {
            calcPrice.innerHTML = +serivces[serivcesKeys[calcServicePhone.value]] + '₽';
        }
    }

}

calc();
