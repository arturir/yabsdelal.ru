            <div class="feedBack calc">
                <div class="calcLeftColumn">
                    <img class="calcLeftColumn_img" src="/images/dialog.png" alt="dialog" />           
                </div> 
                <div class="calcRightColumn">
                    <h1 class="reviewsHeader1 header1">Хотите что-то спросить?</h1>
                    <p class="smallGreyText">Узнайте информацию о ремонте вашего устройства на прямую у специалиста</p>
                    <br/>
                    <div class="calcRightColumn_contacts">
                        <a href="tel:+79300304430"><h2 class="header2">+7-930-030-44-30</h2> 
                        </a>
                        <a href="tel:+79300304430">              <img
                            src="/images/phone.svg"
                            alt="triangle with all three sides equal"
                            height="32px"
                            width="32px" />
                        </a>
                        <a href="https://wa.me/79300304430"><img
                            src="/images/viber.svg"
                            alt="triangle with all three sides equal"
                            height="32px"
                            width="32px" />
                        </a>
                        <a href="https://viber.click/79300304430"><img
                            src="/images/whatsapp.svg"
                            alt="triangle with all three sides equal"
                            height="32px"
                            width="32px" />
                        </a>
                        <a href="https://t.me/vladimiriphone" target="_blank"><img
                            src="/images/telegram.svg"
                            alt="triangle with all three sides equal"
                            height="32px"
                            width="32px" />
                        </a>  
                    </div>
                    <br/>
                    <button class="greenButton callback">Перезвонить мне</button>
                </div>
            </div>
            <div class="ourLocation">
                <h1 class="header1">Посетите наш сервисный центр</h1>
                <div class="ourLocationWrapper aboutUs">
                    <div class="ourLocation_columnLeft ourExperience">
                        <div class="ourLocationPhotos">
                            <img class="ourLocation_img" src="/images/ourPlace1.jpg" alt="dialog" />
                            <img class="ourLocation_img" src="/images/ourPlace2.jpg" alt="dialog" />        
                            <img class="ourLocation_img" src="/images/ourPlace3.jpg" alt="dialog" /> 
                        </div>
                        <p class="header2 ourLocation_header2">ЦУМ «Валентина»</p> 
                        <div class="ourLocationBottomWrapper aboutUs">
                            <div class="ourLocation_columnRight">
                                <p>Дворянская 10, 2 этаж. Центральный вход универмага. </p>
                                <a href="/kontakty/"><p><u>Как добраться?</u></p> </a>
                            </div>
                            <div class="ourLocation_columnRight">
                                <p>Будни: с 10 до 19</p>
                                <p>Выходные: с 10 до 17</p>
                                <a href="tel:+7-930-030-44-30"><p>+7-930-030-44-30</p> </a>
                                                
                            </div>
                        </div>            
                    </div>
                    <div class="ourLocation_columnRight yandexMap">
                        <iframe src="https://yandex.ru/map-widget/v1/?z=15&ol=biz&oid=19637641765" width="100%" height="300" frameborder="0"></iframe>
                    </div>

                </div>
            </div>
            <script>
                document.getElementById('links').onclick = function (event) {
                  event = event || window.event
                  var target = event.target || event.srcElement
                  var link = target.src ? target.parentNode : target
                  var options = { index: link, event: event }
                  var links = this.getElementsByTagName('a')
                  blueimp.Gallery(links, options)
                }
              </script>
        </div>
    </div>
    <footer class="footer">
        <div class="footer_container">
            <a href="https://yabsdelal.ru"><div class="logo">ЯбСделал</div></a>
        </div>
        <nav class="footer_nav">
            <ul>
                <li><a href="https://yabsdelal.ru">Главная</a></li>
                <li><a href="/kontakty/">Контакты</a></li>
                <li><a href="/rekviziti/">Реквизиты</a></li>

            </ul>
            <ul>
                <li><a href="/remont-iphone/">Ремонт iPhone</a></li>
                <li><a href="/honor/">Ремонт Honor</a></li>
                <li><a href="/samsung/">Ремонт Samsung</a></li>
                <li><a href="/android/">Ремонт др. моделей</a></li>
            </ul>
            <!-- <ul>
                <li><a href="/reviews/">Все отзывы</a></li>
                <li><a href="/all-services/">Все услуги</a></li>
            </ul> -->
            <ul>
                <div class="footer_li__contacts">Контактный телефон:</div>
                <div class="footer_li__contactsmargin"><a href="tel:+7-930-030-44-30">+7-930-030-44-30</a></div>
                <div class="footer_li__contacts">Будни: с 10 до 19</div>
                <div class="footer_li__contactsmargin">Выходные: с 10 до 17</div>
                <br/>
                <a href="https://vk.com/remontiphonevladimir" target="_blank">
                <img
                                    src="/images/vk.svg"
                                    alt="vk.com link"
                                    height="36px"
                                    width="36px" />
                </a>
                
            </ul>
        </nav>


    </footer>

    <!-- The Gallery as lightbox dialog, should be a document body child element -->
    <div
    id="blueimp-gallery"
    class="blueimp-gallery"
    aria-label="image gallery"
    aria-modal="true"
    role="dialog"
    >
    <div class="slides" aria-live="polite"></div>
    <h3 class="title"></h3>
    <a
      class="prev"
      aria-controls="blueimp-gallery"
      aria-label="previous slide"
      aria-keyshortcuts="ArrowLeft"
    ></a>
    <a
      class="next"
      aria-controls="blueimp-gallery"
      aria-label="next slide"
      aria-keyshortcuts="ArrowRight"
    ></a>
    <a
      class="close"
      aria-controls="blueimp-gallery"
      aria-label="close"
      aria-keyshortcuts="Escape"
    ></a>
    <a
      class="play-pause"
      aria-controls="blueimp-gallery"
      aria-label="play slideshow"
      aria-keyshortcuts="Space"
      aria-pressed="false"
      role="button"
    ></a>
    <ol class="indicator"></ol>
    </div>
    <script type="module">
        import {calc} from '/scripts/script.js';
        document.addEventListener('DOMContentLoaded', calc()); // calc (бренд, id-модели, [порядковый номер услуг] - начинается с 0);
        
    </script>

    <script type="module" src="/scripts/script.js"></script>
    <script src="/gallery-master/js/blueimp-gallery.min.js"></script>
</body>
</html>