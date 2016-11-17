<?php
/**
 * @package Sydney
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if (has_post_thumbnail() && (get_theme_mod('index_feat_image') != 1)) : ?>
        <div class="entry-thumb">
            <span class="custom-size" href="<?php the_permalink(); ?>"
               title="<?php the_title(); ?>"><?php the_post_thumbnail('sydney-large-thumb'); //, array('class' => 'miniature') ?></span>
        </div>
    <?php endif; ?>

    <header class="entry-header">
        <?php the_title(sprintf('<h2 class="title-post"><span style="color: #0088e7;" href="%s" rel="bookmark">', esc_url(get_permalink())), '</span></h2>'); ?>

        <!--		--><?php //if ( 'post' == get_post_type() && get_theme_mod('hide_meta_index') != 1 ) : ?>
        <!--		<div class="meta-post">-->
        <!--			--><?php //sydney_posted_on(); ?>
        <!--		</div><!-- .entry-meta -->
        <!--		--><?php //endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-post">
        <?php if ((get_theme_mod('full_content_home') == 1 && is_home()) || (get_theme_mod('full_content_archives') == 1 && is_archive())) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>

        <?php
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'sydney'),
            'after' => '</div>',
        ));
        ?>
    </div><!-- .entry-post -->

    <footer class="entry-footer">
        <?php //sydney_entry_footer(); ?>
        <div class="tprice"> <!-- for tags the_tags() --> <!-- for date the_date('d.m.y') -->
            <!--fot link to record the_permalink()-->
            <!-- для сокращенной записи the_excerpt();-->
            <div>от <strong><b><?php the_tags('<style>b a {color: #0088e7;}</style>'); ?></b></strong> $</div>
            <img style="display: none;" id="im" src="/wpress/wp-content/themes/sydney/img/icons/privilege2.png">
            <a rel="fancybox" href="#" class="popmake-129 btnprice modal-link product-link"
               data-order="AMC Royal Hotel 5*" country="Египет">Еще цены</a>
        </div>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
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


