<?php require_once 'header.php'; ?>
<div id="twinparty-hero">
    <div class="container">
        <div class="row row-pb-lg">
            <div class="col-sm-5">
                <div class="hero_img">
                    <a href="index.php"><img class="img-responsive" src="images/GOlogo.gif" alt="" width="300px"> </a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="hero_text about">
                    <h3>"Город открытий" – исследовательская лаборатория в условиях живого города</h3>
                    <h4>"Город открытий" - это увлекательное и познавательное путешествие для школьников, это знакомство
                        с инновационными отраслями и индустриями, возможность научиться открывать новые ресурсы в себе и
                        находить их в пространстве города</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="twinparty-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <h4>Наша цивилизация с каждым днем становится все более динамичной. </h4>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-question"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>Как будет выглядеть мир профессий для наших детей через 10 лет? </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-question"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>Какие навыки и умения будут по-прежнему актуальны, а какие потеряют свою значимость?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-question"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>Где, как и чему нужно сегодня учить наших детей, чтобы помочь им стать успешными в
                            будущем?</p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 animate-box">
                <h4>Эти вопросы волнуют не только нас, родителей, но и многих ученых и мыслителей современности.
                    <br>И все они сходятся в одном: успешность и эффективность человека будут определяться:</h4>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-warning-sign"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>не столько престижностью выбранной профессии, сколько увлеченностью своим делом</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-warning-sign"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>не столько имеющимся багажом знаний, сколько умением быстро находить и анализировать новую
                            информацию</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services animate-box">
							<span class="icon">
								<i class="flaticon-warning-sign"></i>
							</span>
                    <div class="desc">
                        <h3></h3>
                        <p>не столько специфическими профессиональными компетенциями, сколько универсальными
                            надпрофессиональными навыками </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 animate-box">
                <h3>Сделать ответственный выбор профессии и развить в себе навыки будущего подростку поможет программа
                    «Город открытий»</h3>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row pb-60 animate-box">
        <div class="col-md-12">
            <h3 style="text-align: center;">Во время поездки школьники на практике познакомятся с перспективными
                отраслями, посетив профильные организации, вузы и культурные объекты.</h3>
            <h1 style="text-align: center; padding-bottom: 0.5em;">Отрасли</h1>
        </div>
        <?php if ($isMobile) {
            ?>
            <div class="col-md-12" id="svgParent" style="padding: 0;">
                <object style="height: 2500px;margin-right: 5%;" type="image/svg+xml"
                        data="images/lustra_new_bw_mob.svg" id="svg" class="icon"></object>
            </div>

            <?php
        } else {
            ?>
            <div class="col-md-12" id="svgParent" style="height: 100%">
                <object type="image/svg+xml" data="images/lustra_bw.svg" id="svg" class="icon"></object>
            </div>
        <?php } ?>
    </div>
</div>


<!-- НАВИГАТОР БЛЯДЬ !-->
<div id="twinparty-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
                <h4 style="text-align: left;">Подростки будут изучать, как выбранные ими профессиональные направления
                    преломляются в каждой из этих отраслей.
                    <br>Чтобы помочь подростку выбрать профессиональное направление, на сайте есть специальный <a
                            href="child.php#twinparty-subscribe">навигатор для подростков</a>.
                    <br> А что думаете об этом вы? Какая область профессий более других интересна вашему ребенку?
                    <br>Поговорите с ним об этом.
                    <br>А прежде предлагаем вам воспользоваться навигатором для родителей. Он поможет вам проверить ваши
                    гипотезы. </h4>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#questions"
                        id="start_test" style="padding: 20px 45px;">Перейти к навигатору
                </button>
            </div>
        </div>
    </div>
</div>

<!-- КОНЕЦ НАВИГАТОРА БЛЯДЬ !-->


<div id="twinparty-services" class="twinparty-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 twinparty-heading animate-box">
                <h2><span class="thick">Что будет происходить в поездке «Город открытий» </span></h2>
                <p></p>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="wrap">
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!-- <span class="icon">
                                <i class="flaticon-bus"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>Дети с классом приедут в Москву и проведут пять дней в "Городе открытий"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!-- <span class="icon">
                                <i class="flaticon-game-controller"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>Путешествие начнется с общей деловой игры, где дети смогут поставить собственные
                                        цели и задачи</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!--<span class="icon">
                                <i class="flaticon-research"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>Подростки в сопровождении гидов посетят крупнейшие отраслевые компании, лучшие
                                        вузы и культурные площади Москвы</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!--<span class="icon">
                                <i class="flaticon-gps"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>В конце поездки дети собираются вместе и конструируют будущее отраслей в своих
                                        родных городах</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!--<span class="icon">
                                <i class="flaticon-gps"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>Вернувшись домой, они применят полученные знания и опыт, создав проект для своего
                                        города</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="services animate-box">
                                <!--<span class="icon">
                                <i class="flaticon-gps"></i>
                                </span> -->
                                <div class="desc">
                                    <h3></h3>
                                    <p>Вы обсудите с ребенком итоги поездки, поможете ему сформулировать для себя новые
                                        цели и спланировать шаги по их достижению. В этом вам помогут наши
                                        <a href="question.pdf" download="" target="_blank">рекомендации</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="twinparty-about">
    <div class="container">
        <div class="row row-pb-lg">
            <blockquote class="col-md-offset-1 col-md-10">
                <div class="about animate-box">
                    <h2>Чтобы присоединиться программе «Города открытий»</h2>
                    <ul>
                        <li>Обсудите с ребенком и совестно выберите профессиональное направление, сквозь призму которого
                            он будет исследовать различные индустрии Города открытий.
                        </li>
                        <li>Расскажите о программе «Город открытий» классному руководителю. Информация для педагогов
                            приведена на странице <a href="teach.php">Педагогам</a>.
                        </li>
                        <li>Вместе с педагогом и другими родителями выберите один из четырех образовательных
                            маршрутов:
                        </li>
                        <ul style="list-style: none;">
                            <li><b>Маршрут 1</b> - Креативные индустрии, Экология, Гуманитарные технологии, Урбанистика.
                            </li>
                            <li><b>Маршрут 2</b> - Энергетика, Транспорт и Космос, Цифровые технологии и
                                телекоммуникации, Биотехнологии и Медицина.
                            </li>
                            <li><b>Маршрут 3</b> - Креативные индустрии, Экология, Энергетика, Транспорт и космос.</li>
                            <li><b>Маршрут 4</b> - Гуманитарные технологии, Урбанистика, Цифровые технологии и
                                телекоммуникации, Биотехнологии и Медицина.
                            </li>
                        </ul>
                    </ul>
            </blockquote>
            <!-- <div id="accordion" class="accordion"> -->

        </div>
    </div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="questions" tabindex="-1" role="dialog" aria-labelledby="questions" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content white-popup">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <div class="navigator-preview">
                    <h5 class="modal-title">Ответьте, пожалуйста, на 10 вопросов Навигатора.
                        Он поможет вам лучше понять склонности вашего ребенка к одному или нескольким универсальным
                        профессиональным направлениям.
                        <br>Направление – это совокупность профессий, которые есть в большинстве организаций, независимо
                        от отраслей, к которым они принадлежат.
                        <br>Эта информация будет полезна при выборе образовательного маршрута "Города открытий", и, что
                        еще важнее, - совместно с ребенком определить вектор его будущей профессии.</h5>
                    
                </div>
                <div class="test-instructions">
                    <h5 class="modal-title" id="questionsTitle">Вопрос <span id="question_number">1</span> из 10</h5>
                    <span style="color: black;" id="first_quest"></span>
                    <p style="color: black; margin: 10px;"></p>
                </div>

            </div>
            <div class="cards">
                <div class="modal-body" style="color:black;">
                    <div style="text-align: center;">
                        <a id="start_cards" href="#">Продолжить</a>
                    </div>
                    <div class="square" style="display: none;">
                        <div class="item wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.5s">
                            <a data-id="0" class="square-link" href="#"><span class="square-text">1</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.0s" data-wow-delay="0.5s">
                            <a data-id="1" class="square-link" href="#"><span class="square-text">2</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.2s" data-wow-delay="0.5s">
                            <a data-id="2" class="square-link" href="#"><span class="square-text">3</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.4s" data-wow-delay="0.5s">
                            <a data-id="3" class="square-link" href="#"><span class="square-text">4</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <a data-id="4" class="square-link" href="#"><span class="square-text">5</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.6s" data-wow-delay="0.5s">
                            <a data-id="5" class="square-link" href="#"><span class="square-text">6</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.7s" data-wow-delay="0.5s">
                            <a data-id="6" class="square-link" href="#"><span class="square-text">7</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.8s" data-wow-delay="0.5s">
                            <a data-id="7" class="square-link" href="#"><span class="square-text">8</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="1.9s" data-wow-delay="0.5s">
                            <a data-id="8" class="square-link" href="#"><span class="square-text">9</span></a>
                        </div>
                        <div class="item wow zoomIn" data-wow-duration="2.0s" data-wow-delay="0.5s">
                            <a data-id="9" class="square-link" href="#"><span class="square-text">10</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-questions">
                <div class="modal-body" style="color:black;">
                    <div class="btn-group-vertical" style="display: inherit; background-color: #fff;">
                        <p><input name="question_0" id="question_0" type="checkbox" value="answer_1_1" data-answer="">
                            <label for="question_0" class="nav_label"></label></p>
                        <p><input name="question_1" id="question_1" type="checkbox"><label for="question_1" class="nav_label"></label>
                        </p>
                        <p><input name="question_2" id="question_2" type="checkbox" value="answer_1_2" data-answer="">
                            <label for="question_2" class="nav_label"></label></p>
                        <p><input name="question_3" id="question_3" type="checkbox" value="answer_1_3" data-answer="">
                            <label for="question_3" class="nav_label"></label></p>
                        <p><input name="question_4" id="question_4" type="checkbox" value="answer_1_4" data-answer="">
                            <label for="question_4" class="nav_label"></label></p>
                        <p><input name="question_5" id="question_5" type="checkbox" value="answer_1_5" data-answer="">
                            <label for="question_5" class="nav_label"></label></p>
                        <p><input name="question_6" id="question_6" type="checkbox" value="answer_1_6" data-answer="">
                            <label for="question_6" class="nav_label"></label></p>
                        <p><input name="question_7" id="question_7" type="checkbox" value="answer_1_7" data-answer="">
                            <label for="question_7" class="nav_label"></label></p>
                    </div>
                </div>
                <span id="errors" style="color: red;"></span>
                <div class="modal-footer" style="padding: 11px">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" id="next">Далее</button>
                    <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" style="overflow-y: auto;" id="end_test" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title" id="exampleModalCenterTitle">Результаты опроса</h5>
            </div>
            <div class="modal-body" style="color:black;">

                <div>

                    <h3 style="text-align: center;">Вот результаты Навигатора</h3>
                    <p style="color: black; text-align: center;">
                        Чем выше балл, тем выше интерес и склонности вашего ребенка к профессиям этой сферы. Скорее
                        всего, именно в ней он или она максимально реализует свой потенциал.
                    </p>
                    <div class="ways" id="accordion">
                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results  col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row navigator_results">
                            <div id="accordion" class="according col-xs-12">
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        <div class="col-xs-5 way">
                                            Направление
                                        </div>
                                        <div class="col-xs-1 value">
                                            Балл
                                        </div>
                                        <div class="arrow_results col-xs-1">
                                            +
                                        </div>
                                    </div>
                                    <div class="accordion-item-content">
                                        <div class="text">Описание</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                    <p style="color: black;" class="final_answer">

                    </p>
                </div>
                <div class="test-email" style="text-align: center;">
                    <div>
                        <p style="color: black;">
                            Может быть вы не заметили увлеченность вашего ребенка какой либо из сфер?
                            <br>Это было бы интересно обсудить.
                            <br>Поговорите о том, что интересно и нравится вашему ребенкую.
                            <br>Здесь несколько <a href="recomends.pdf" download="" target="_blank">рекомендаций</a> о
                            том, как построить вашу беседу.
                            <br>В "Городе открытий" ваш ребенок сможет проверить свои гипотезы и сделать более
                            ответсвенный выбор будущей профессии.
                            <br>Мы можем отправить результаты Навигатора вам на e-mai<br/>
                            Введи свой e-mail сюда
                            <input type="email" name="email" id="test_result_email" required="">
                        </p>
                        <span id="email-errors" style="color: red;"></span>
                    </div>
                    <button id="download_test_result">Отправить результаты Навигатора</button>
                </div>
                <div id="email-result" style="text-align: center;">
                    <span style="color: green;"></span>
                </div>
                <!-- </div> -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="hernya" aria-labelledby="questions" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content white-popup">
            <div class="modal-body" style="color: black;">
                <button type="button" class="close" id="way_hide" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div id="way_cosm" class="way_desc">
                    <h2>Транспорт и космос</h2>
                    <p>Человечество становится все более мобильным. За месяц мы преодолеваем расстояние больше, чем наши
                        деды проезжали за всю жизнь. Сегодня мы путешествуем не только между городами и континентами.
                        Люди могут покидать родную планету и вновь возвращаться домой. Мы уже побывали на Луне и, как
                        говорят ученые, уже скоро полетим на Марс. Такие возможности перед нами открывают транспортные и
                        космические технологии.
                        <br>Скорости наших перемещений возросли в тысячи раз и со временем будут только расти. Вместе с
                        этим будет увеличиваться и безопасность транспортных перевозок.
                        <br>В ближайшем будущем индустрия транспорта подарит человечеству умные дороги, беспилотные
                        автомобили, межпланетные космические корабли, а также новые средства передвижения по нашей
                        родной планете.</p>
                </div>
                <div id="way_tele" class="way_desc">
                    <h2>Цифровые технологии и телекоммуникации</h2>
                    <p>IT - это одна из самых быстро развивающихся отраслей в мире. Это технологии сбора и обработки
                        информации, создание новых программ и приложений, цифровых устройств и средств связи. Сегодня
                        цифровые технологии пронизывают всю нашу повседневную жизнь. А уже завтра обыденными станут
                        новые возможности - Интернет вещей, бытовые роботы, дополненная и виртуальная реальность,
                        нейронные сети и искусственный интеллект.</p>
                </div>

                <div id="way_bio" class="way_desc">
                    <h2>Биотехнологии и медицина</h2>
                    <p>Биотехнологии - активно развивающаяся отрасль, ищущая новые возможности использования
                        биологических систем и процессов. Она включает в себя несколько десятков различных направлений
                        на стыке биологии, химии и технических наук.
                        <br>Сегодня в сегменте медицины перспективные разработки ведутся в направлении редактирования
                        генома и генной терапии, разработке биосовместимых имплантов, создания лекарств и вакцин нового
                        поколения.
                        <br>В промышленном сегменте биотехнологий приоритетными областями являются получение
                        биополимеров и биотоплива.
                        <br>В аграрном сегменте передовые исследования ведутся в направлении создания новых сортов
                        растений и пород животных с заданными свойствам и производство биопрепаратов для растениеводства
                        и ветеринарии.</p>
                </div>

                <div id="way_creat" class="way_desc">
                    <h2>Креативные индустрии</h2>
                    <p>Креативные индустрии стирают грань между фантазией и реальным миром. Это архитектура, искусство и
                        культура, ремесла, дизайн, мода, музыка, литература и издательское дело, кино, телевидение,
                        реклама. Ключевой объединяющий фактор для всех этих культурных практик – это доминирование
                        креативной, творческой составляющей, нацеленность на то, чтобы создавать нечто, не
                        существовавшее ранее.
                        <br>Креативные индустрии не просто следуют трендам, они создают их. </p>
                </div>

                <div id="way_eco" class="way_desc">
                    <h2>Экология</h2>
                    <p>Человек – это вид, который за несколько тысячелетий изменил окружающую среду больше, чем это
                        сделали все остальные биологические виды планеты вместе взятые. И сегодня эти изменения угрожают
                        выживанию самого человека.
                        <br>Экология – это отрасль, призванная сохранить экосистемы планеты. Экология изучает влияние
                        деятельности человека на окружающую среду и принимает меры, чтобы уменьшить ее негативное
                        влияние и последствия.
                        <br>Перед отраслью стоят важнейшие вопросы: как преодолеть истощение почв, загрязнение мирового
                        океана? Как организовать безотходное производство? Как эффективно использовать и перерабатывать
                        отходы?</p>
                </div>
                <div id="way_urban" class="way_desc">
                    <h2>Урбанистика</h2>
                    <p>Урбанистика - это относительно молодая отрасль, в которой работают представители самых разных
                        профессий – технических, творческих и гуманитарных. Эти специалисты объединяют свои усилия,
                        чтобы сделать современные города комфортными для проживания.
                        <br>Как учесть образ жизни горожан и их потребности при строительстве? Как вписать новые здания
                        и сооружения в существующий ландшафт? Где расположить и как оборудовать транспортные узлы и зоны
                        отдыха, как создать оптимальное транспортное сообщение, чтобы всем горожанам было удобно? На эти
                        и многие другие вопросы призвана ответить урбанистка.</p>
                </div>
                <div id="way_human" class="way_desc">
                    <h2>Гуманитарные технологии</h2>
                    <p>Эта отрасль объединяет самые человеческие технологии. Сюда относятся образование, социальная
                        помощь и защита, психология, менеджмент, социология, антропология, политология и многие другие.
                        Это области профессиональной деятельности, центральным фокусом которых является человек,
                        человеческие отношения и общности. Они относятся к самым разным группам людей - семья, команда,
                        организация, корпорация, государство, этнос и человеческая цивилизация в целом. Гуманитарные
                        технологии нацелены на создание условий для всестороннего развития личности, преобразование
                        общества в открытое перспективное пространство согласно вызовам современности. </p>
                </div>
                <div id="way_energy" class="way_desc">
                    <h2>Энергетика</h2>
                    <p>Наша цивилизация становится все более энергоемкой. Обыденная жизнь каждого человека связана с
                        постоянным энергопотреблением. Новые технологии и производства требуют новых источников энергии.
                        При этом многие традиционные источники энергии иссякают, и добывать их становится все сложнее.
                        <br>Перед человечеством стоит задача поиска новых источников энергии и эффективных технологий ее
                        передачи и сохранения. В ближайшее время энергетическая отрасль создаст такие инновационные
                        решения, как атмосферная электроэнергеткика, холодный ядерный синтез, беспроводная передача
                        электричества.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>
