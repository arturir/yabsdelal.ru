<body> 
    <div class="burgerMenu">
        <nav>
            <li><a href="/remont-iphone/">Ремонт iPhone</a></li>
            <li><a href="/android/">Ремонт Android-смартфонов</a></li>
            <li><a href="/kontakty/">Контакты</a></li>
        </nav>
    </div>
    <div class="requestFormWrapper">
        
        <div class="requestForm">
            <img class="closeRequestForm" src="/images/close.svg" title="close-button" height="32px" width="32px">
            <form action="/send.php" method="POST">
                <div>
                <h2 class="header2 header2Form">Запись на ремонт</h2>
                <p class="pForm">Ваше имя</p>
                <input type="text" name="name"> <br/>
                <p class="pForm">Ваш номер телефона</p>
                <input type="text" name="tel"><br/>
                </div>
                <div class="formServiceWrapper">
                    <p class="pForm" id="pModelPhone">Ваша модель телефона</p><input type="text" class="clientModelPhone"  name="clientModelPhone" value="" disabled><br/>
                    <p class="pForm" id="pService" >Выбранная услуга</p><input type="text" class="clientService" name="clientService" value="" disabled><br/>
                    <p class="pForm" id="pPrice">Стоимость</p><input type="text" class="clientPrice" name="clientPrice" value="" disabled>
                    <p>Мы свяжемся с вами для записи вас на ремонт в удобное для вас время. </p>
                </div>
                <p class="bigText">Вы также можете связаться с нами по телефону:</p>        
                <div class="calcRightColumn_contacts">
                    <a href="tel:+79300304430"><h2 class="header2">+7-930-030-44-30</h2> 
                    </a>
                    <a href="tel:+79300304430"><img src="/images/phone.svg" alt="triangle with all three sides equal" height="32px" width="32px">
                    </a>
                </div>
                <p class="bigText">Или написать нам в мессенджере:</p>
                <a href="https://wa.me/79300304430"><img src="/images/viber.svg" alt="triangle with all three sides equal" height="64px" width="64x">
                </a>
                <a href="https://viber.click/79300304430"><img src="/images/whatsapp.svg" alt="triangle with all three sides equal" height="64px" width="64px">
                </a>
                <a href="https://t.me/vladimiriphone" target="_blank"><img src="/images/telegram.svg" alt="triangle with all three sides equal" height="64px" width="64px">
                </a>  
                <p class="pPrivacy">Данная форма записи на ремонт не является публичной офертой. Нажимая кнопку "Отправить"
                    вы соглашаетесь с <a href="/privacy.pdf/"><u>политикой конфиденциальности</u></a> и даете согласие на <a href="/privacy.pdf/"><u>обработку персональных данных.</u></a>  </p> 
               </p>
               <button type="submit" class="greenButton buttonOnForm" id="buttonOnForm" name="buttonOnForm">Отправить</button>
           
            </form>
        </div>
    </div>

    <div class="body">  
        <header>
            <div class="headerLeft">
                <a href="https://yabsdelal.ru"><div class="logo">ЯбСделал</div></a>
                <div class ="headerLeft_contacts"> 
                    <a href="tel:+79300304430"><div class="headerLeft_number">&#128222 +7-930-030-44-30</div></a>
                    <div class="headerLeft_address">ул. Дворянская 10 (ЦУМ Валентина), 2 этаж</div>
                    <div class="headerLeft_scheme"><u><a href="/kontakty/">Схема прохода</a></u></div>
                </div>
            </div>
            <div class="headerRight">
                <div class="headerRight_menu"><a href="/remont-iphone/">Ремонт iPhone</a></div>
                <div class="headerRight_menu"><a href="/android/">Ремонт Android</a></div>
                <div class="headerRight_contacts"><a href="/kontakty/">Контакты</a></div>
            </div>
            <a href="#">
                <div class="headerBurger">
                    <span></span>
                </div>
            </a>
        
        </header>