<?php
/**
 * Created by PhpStorm.
 * User: 1
 * Date: 13.11.2016
 * Time: 22:51
 */

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
</div>
</div>
</div><!-- #content -->

<?php if (is_active_sidebar('footer-1')) : ?>
    <?php get_sidebar('footer'); ?>
<?php endif; ?>

<a class="go-top"><i class="fa fa-angle-up"></i></a>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="grid foot">
        <p class="f-text1 box">ООО «ХОРОШЕЕ АГЕНСТВО» <br/>
            ЕГРПОУ: 39818659 <br/>
            р/счет: 26008053135083<br/>
            моб. +38(098) 116 9555
        </p>

        <p class="f-text2 box">г.&nbsp;Борисполь, <br/>
            ул.&nbsp;Киевский шлях, 2/6, <br/>ТРЦ «АЕРОМОЛ»<br>
            <span>e-mail:</span> coralborispol@gmail.com</p>

        <p class="f-text3 box">
            <a class="popmake-158 modal-link" href="#">Соглашение об обработке персональных данных.</a><br />

            <a class="popmake-bank modal-link" href="#">Банковская гарантия</a><br />

            <!--            <a class="modal-link" href="#confidenc3">Лицензия</a>-->
        </p>
    </div>
    <!--<div class="site-info container">
        <a href="<?php /*echo esc_url(__('http://wordpress.org/', 'sydney')); */?>"><?php /*printf(__('Proudly powered by %s', 'sydney'), 'WordPress'); */?></a>
        <span class="sep"> | </span>
        <?php /*printf(__('Theme: %2$s by %1$s.', 'sydney'), 'aThemes', '<a href="http://athemes.com/theme/sydney" rel="designer">Sydney</a>'); */?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<div class="modal-boxes">
    <div id="feedback" class="modal">
        <div class="form-block">
            <h3>Обратный звонок</h3>

            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 033 228 2822 ">

                <textarea class="text-field" name="comment"
                          placeholder="Ваш вопрос и желаемое время звонка*"></textarea>


                <input type="submit" class="send btn1" value="Перезвоните мне">
            </form>
        </div>
    </div>

    <div id="tour" class="modal">

        <h4>Получить Лучшие цены на туры
        </h4>
        <h5>в любую страну по запросу</h5>

        <div class="modal-img">
            <img src="http://www.makintour.com/uploads/Dunai.jpg" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 0332 28 28 22 ">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="hotel" class="modal">
        <h4>С удовольствием Расскажу вам больше
            о курортах и ценах на отдых</h4>

        <div class="modal-img">
            <img src="http://www.makintour.com/uploads/Dunai.jpg" id="modal-pic" alt=""/>
        </div>
        <div class="form-block">
            <form class="form" action="#">
                <input type="text" name="name" class="name text-field"
                       placeholder="Ваше имя*"
                       pattern="[A-Za-zА-Яа-яЁёІіЇї\s]{2,30}"
                       required="" title="например, Иванов Иван">

                <input type="text" name="phone" class="phone text-field"
                       placeholder="Контактный телефон*"
                       pattern="^([+]+)*[0-9\s-]{5,20}"
                       required="" title="например, +38 0332 28 28 22 ">

                <input type="submit" class="send btn1" value="Жду звонка">
            </form>
        </div>
    </div>

    <div id="confidenc" class="modal">
        <div class="form-block">
            <h3>>Соглашение об обработке
                персональных данных</h3>

            <p>Лица, предоставившие на данном сайте сведения, которые подпадают под определение
                «персональные данные» согласно действующему законодательству Украины,
                а также разместившие иную информацию, тем самым подтверждают свое согласие
                на обработку такой информации, в том числе персональных данных, и их передачу ООО «МАКИНТУР»
                для дальнейшей обработки в целях обратной связи и с другими целями в пределах осуществления
                своей хозяйственной деятельности, в том числе накопление и хранение такой информации.</p>

            <p>ООО «МАКИНТУР» гарантирует полную конфиденциальность при обработке данных,
                указанных посетителями на сайте компании.</p>

            <p>Лицо, указывающее какие либо данные на этом сайте, гарантирует,
                что предоставляемая информация является точной и достоверной,
                и не нарушает действующее законодательство Украины, законные права
                и интересы третьих лиц, а вся информация предоставлена в отношении себя лично.</p>
        </div>
    </div>

    <div id="confidenc2" class="modal">
        <div class="form-block">
            <img src="img/bankovskaya-garantiya.jpg" alt="Банківська гарантія">
        </div>
    </div>
    <div id="confidenc3" class="modal">
        <div class="form-block">
            <img src="img/license.jpg" alt="Ліцензія">
        </div>
    </div>

    <div id="works" class="modal">
        <div class="form-block">
            <h3>Как это работает?</h3>

            <p>Для Вас в нашей компании трудятся только профессиональные эксперты туризма,
                которые подберут наилучшие предложения по турам в любую точку мира, учтя все Ваши пожелания.</p>

            <p>Всё что Вам необходимо сделать, это за 10 секунд оформить простую форму,
                указав свои контакты для обратной связи - а дальше эксперт Вашего отдыха
                свяжется с Вами и сделает все, что бы Ваша поездка была комфортной и незабываемой.
                Укажите свои пожелания к туру, и наши эксперты подберут для Вас наиболее точные и выгодные
                предложения. </p>

            <p>Свяжитесь с нами напрямую и получите моментальную консультацию
                по Вашему туру с гарантией наилучшей цены!<br/>Звоните по номеру +38(068) 528 2227 </p>
            <!-- <p>Звоните по номеру +38(068) 528 2227 </p> -->
            <p></p>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</div><!-- #page -->
</body>
</html>
