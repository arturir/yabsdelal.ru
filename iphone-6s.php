<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/gallery-master/css/blueimp-gallery.min.css" />
    <title>Ремонт iPhone 6S во Владимире - сервис ЯбСделал</title><meta name='description' content='Сервисный центр по ремонту iPhone 6S во Владимире. Замена дисплея, стекла, акб, батареи и разъема с гарантией.'/>

</head>
<?php include 'header.php';?>
<div>
            <div class="mainBanner">
                <h1 class="mainBanner_h1">Ремонт iPhone 6s во Владимире</h1>
                <div class="mainBanner_bottom">
                    <a href="#calc"><button type="button" class="greenButton" id="howMuch" name="howMuch">Узнать стоимость</button></a>
                    <div class="mainBanner_description">&#128736  Среднее время ремонта ~ 3 часа</div>
                </div>
            </div>



            <div class="aboutUs">
                <div class="ourExperience">
                    <h2 class="header2">Работаем с 2019 г.</h2>
                    <h2 class="header2">Наладили более 4 000 устройств</h2>
                    <div class="raiting">
                        <div class="raiting_item"><a href="https://yandex.ru/profile/19637641765">Рейтинг Яндекс 4.9</a></div>
                        <div class="raiting_item"><a href="https://goo.gl/maps/72HzLeuUZXZEnsgz6">Рейтинг Google - 5.0</a></div>
                        <div class="raiting_item"><a href="https://2gis.ru/vladimir/firm/70000001035818248">Рейтинг 2ГИС - 4.5</a></div>
                    </div>
                    <hr class="greyLine"/>
                    <div class="ourExperience_wrapper">
                        <div class="ourExperience_column">
                            <p class="smallBoldText">От 30 до 180 дней гарантии на выполненный ремонт</p>
                            <p class="smallGreyText">Выдается гарантийный талон</p>
                        </div>
                        <div class="ourExperience_column">
                            <p class="smallBoldText">95% положительных отзывов</p>
                            <p class="smallGreyText">Более 100 положительных отзывов на Яндекс картах, Google-maps, 2ГИС, Вконтакте</p>
                        </div>
                    </div>
                </div>
                <div class="yandexMap">
                    <iframe src="https://yandex.ru/map-widget/v1/?z=15&ol=biz&oid=19637641765" width="100%" height="300" frameborder="0"></iframe>
                </div>

            </div>
        </div>
            <div class="examplesOurWork">
                <h1 class="header1">Примеры нашей работы</h1>
                <div id="links" class="photoAlbum">
                    <div class="photoAlbumLeft">
                        <a class="photoAlbumLeft_item" href="/images/review1.jpg" title="brokenphone">
                            <img class="photoAlbumLeft_itemImg" src="/images/thumbnails/review1.jpg" alt="brokenphone" />
                        </a>
                        <a class="photoAlbumLeft_item" href="/images/review2.jpg" title="brokenphone">
                            <img class="photoAlbumLeft_itemImg" src="/images/thumbnails/review2.jpg" alt="brokenphone" />
                        </a>
                    </div>
                    <div class="photoAlbumRight">
                        <div class="photoAlbumRight_topRow">
                            <a class="photoAlbumRight_smallItem" href="/images/review3.jpg" title="brokenphone">
                                <img class="photoAlbumRight_smallItemImg" src="/images/thumbnails/review3.jpg" alt="brokenphone" />
                            </a>
                            <a class="photoAlbumRight_smallItem" href="/images/review4.jpg" title="brokenphone">
                                <img class="photoAlbumRight_smallItemImg" src="/images/thumbnails/review4.jpg" alt="brokenphone" />
                            </a>
                        </div>
                        <div class="photoAlbumRight_bottomRow">
                            <a class="photoAlbumRight_smallItem" href="/images/review5.jpg" title="brokenphone">
                                <img class="photoAlbumRight_smallItemImg" src="/images/thumbnails/review5.jpg" alt="brokenphone" />
                            </a>
                            <a class="photoAlbumRight_smallItem" href="/images/review6.jpg" title="brokenphone">
                                <img class="photoAlbumRight_smallItemImg" src="/images/thumbnails/review6.jpg" alt="brokenphone" />
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="calc" id="calc">
                <div class="calcLeftColumn">
                    <img class="calcLeftColumn_img" src="/images/death-iphone.png" alt="death-iphone" />           
                </div>     
                <div class="calcRightColumn">
                    <h1 class="header1">Стоимость ремонта</h1>
                    <form>

                        <p class="smallBoldText">Выберите марку телефона</p>
                        <select id="calc_brand" name="brandPhone" class="calc_brandPhone">
                            <option value="id-1">iPhone</option>
                            <option value="id-2">Samsung</option>
                            <option value="id-3">Honor</option>
                        </select>

                        <p class="smallBoldText">Выберите модель телефона</p>
                        <select id="calc_model" name="modelPhone" class="calc_modelPhone">
                            <option value="id-1">iPhone 5s</option>
                            <option value="id-2">iPhone 6</option>
                            <option value="id-3">iPhone 6 Plus</option>
                        </select>
                        <p class="smallBoldText">Выберите услугу</p>
                        <select id="calc_service" name="modelPhone" class="calc_service">
                            <option value="display-replacment">Замена дисплея</option>
                            <option value="battery-replacment">Замена аккумулятора</option>
                            <option value="backcover-replacment">Замена крышки</option>
                        </select>


                        <div class="calcRightColumn_item">                   
                            <p class="bigText">Итоговая стоимость*: <strong id="calc_price">1500₽</strong></p>
                            <p class="smallGreyText">Включая стоимость запчастей и услуги по ремонту. *Не является публичной офертой.</p>
                        </div>
                        <div class="calcRightColumn_wrapper">
                            <div class="calcRightColumn_item">   
                                <p class="bigText">Гарантия: Есть</p>
                                <p class="smallGreyText">от 30 до 180 дней см. <a href="/time-and-garanty.pdf"><u>здесь</u></a></p> 
                            </div>

                            <div class="calcRightColumn_item">  
                                <p class="bigText">Сроки: ~1-4 часа</p>
                                <p class="smallGreyText">Время ремонта см. <a href="/time-and-garanty.pdf"><u>здесь</u></a></p>
                            </div>
                        </div>

                        <div class="calcRight_bottom">
                            <div><button type="button" class="greenButton" id="bookRepair">Записаться на ремонт</button></div>
                            <p class="smallGreyText smallGreyText_calc">&#127873;Получите подарок при записи на ремонт онлайн - <a href="/gifts.pdf"><u>подробнее</u></a></p>
                        </div>
                    
                    </form>
                </div>      
            </div> 

            <div class="reviews">
                <div class="reviewsHeader">
                    <h1 class="reviewsHeader1 header1">Наши отзывы</h1>
                    <div class="smallGreyText">Более 100 отзывов оставили наши клиенты. Из них более 95% - положительные.</div>
                </div>
                <div class="reviewsWrapper">
                    <!-- <div class="reviewsColumn">
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                    </div>
                    <div class="reviewsColumn">
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto eaque nisi harum rerum necessitatibus aut quidem! At nulla facilis vel delectus, placeat voluptatum sint minus a nemo aspernatur quisquam sapiente?
                            Maiores voluptatem deserunt atque eum esse repellat modi dolore accusamus minus soluta nulla eos facere quis ratione voluptates corrupti doloremque non dicta itaque, nam molestiae dolorem vitae! Fuga, dolor necessitatibus?
                            Quis soluta sunt nesciunt aliquam quod enim, rem voluptatem dolore aliquid? Autem, error? Id vero repellat rem quis, assumenda neque blanditiis possimus veniam velit maxime maiores ratione. Vel, blanditiis explicabo.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>

                    </div>
                    <div class="reviewsColumn">
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sapiente nihil adipisci, at ipsam accusantium cumque consectetur harum quis eius obcaecati, a iusto aut quaerat eveniet. Velit maxime doloribus debitis dolores.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>
                        <div class="reviewsItem">
                            <div class="reviewsItem_user">
                                <img class="reviewsItem_photo" src="images/thumbnails/reviews.jpg" alt="reviews">
                                <div class="reviewsItem_name smallBoldText">Иван Иванов</div>
                            </div>
                            <div class="reviewsItem_stars">&#11088; &#11088; &#11088; &#11088; &#11088;</div>
                            <div class="reviewsItem_text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus harum reiciendis nemo rerum esse inventore itaque quasi, a ipsum, adipisci fugiat in quis nulla perspiciatis, quia laboriosam alias voluptates debitis.
                            Nostrum dolor aperiam distinctio autem. Adipisci, obcaecati ex aliquid vero inventore facilis, velit, dolorem laudantium quam ipsam aspernatur harum expedita commodi quis similique ratione maiores. Rerum necessitatibus libero quis aliquid.</div>
                            <div class="reviewsItem_date smallGreyText">11.09.2022</div>
                            <div class="reviewsItem_resource smallGreyText">Вконтакте</div>
                        </div>

                    </div> -->
                </div>
            </div>
            
 <?php include 'footer.php';?>