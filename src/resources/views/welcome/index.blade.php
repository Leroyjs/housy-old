<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href={{mix('/welcome/index.css')}}>
</head>

<body>
    <header>

    </header>
    <main>
        <section style="background-color: black">
            <button class="button button_type_svg button_color_white">
                <svg viewBox="0 0 29 23">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z" />
                </svg>
            </button>
            <button class="button button_type_svg button_color_white-outline button_size_svg-lg">
                <svg viewBox="0 0 29 23">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z" />
                </svg>
            </button>
            <button class="button button_type_svg button_color_orange">
                <svg viewBox="0 0 29 23">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z" />
                </svg>
            </button>
            <button class="button button_type_svg button_color_orange-outline">
                <svg viewBox="0 0 29 23">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z" />
                </svg>
            </button>
            <button class="burger-button">
                <svg class="burger-button__svg" viewBox="0 0 16 16">
                    <path class="burger-button__line" d="M3.3335 4.66663H12.6668" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path class="burger-button__line" d="M3.3335 7.99997H12.6668" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    <path class="burger-button__line" d="M3.3335 11.3333H12.6668" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button class="button button_type_svg button_color_orange-outline button_size_svg-small">
                <svg viewBox="0 0 16 16">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" fill="none" d="m2.3 1.3 2.5.1c.5 0 1 .4 1.1.8L6.6 4c.2.4.2 1 0 1.3l-1 1.4c.5.8 2 2.6 3.6 3.7l1.2-.7c.3-.2.6-.3 1-.2l2.3.6c.6.2 1 .8 1 1.4l-.2 2c0 .7-.6 1.2-1.3 1.2C4.2 13.7-1 1.3 2.3 1.3Z" />
                </svg>
            </button>
        </section>
        <section class="first-section main-padding-horizontal">
            <div class="first-section__overlay"></div>
            <div class="first-section__slide-wrapper">
                <div class="first-section__slide">
                    <h1 class="first-section__title text text_size_h1 text_color_white">
                        ЗАГOРОДНЫЙ ДОМ <br>
                        ПРАВИЛЬНОЙ <br>
                        ПОСТРОЙКИ
                    </h1>
                    <div class="first-section__desc text_color_white text_size_main-lg">
                        По замыслу создателей, HYGGE — это посёлок, в котором живут свободные
                        люди. Свободные от стереотипов, свободные в проявлении чувств и эмоций.
                        Люди, которые умеют наслаждаться каждым моментом и ценить повседневные
                        мелочи.
                    </div>
                </div>
            </div>
            <div class="first-section__slider-nav slider-nav">
                <div class="slider-nav__line-wrapper slider-nav__line-wrapper_active">
                    <div class="slider-nav__line">
                        <div class="slider-nav__line-inner"></div>
                    </div>
                </div>
                <div class="slider-nav__line-wrapper">
                    <div class="slider-nav__line">
                        <div class="slider-nav__line-inner"></div>
                    </div>
                </div>
                <div class="slider-nav__line-wrapper">
                    <div class="slider-nav__line">
                        <div class="slider-nav__line-inner"></div>
                    </div>
                </div>
                <a href="" class=" button button_type_svg button_color_orange-outline">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.885 9.99998L11.53 4.64498M3.11499 9.99998L16.885 9.99998L3.11499 9.99998ZM16.885 9.99998L11.53 15.355L16.885 9.99998Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
            <a href="#" class="first-section__arrow-wrapper">
                <span class="first-section__arrow-text text_color_white text_size_main">
                    вниз
                </span>
                <svg width="24" height="71" viewBox="0 0 24 71" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 10L12 68M12 68L5 61M12 68L19 61" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </section>
        <section class="snip">
            <div class="info-block">
                <div class="main-column-width snip__main-column sub-height main-padding-horizontal">
                    <div class="snip__text-arrow text-arrow">
                        <a href="" class="text-arrow__inner text-arrow__inner_rotate">
                            <svg class="text-arrow__arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 12L14 5M3 12L21 12L3 12ZM21 12L14 19L21 12Z" stroke="#e76100" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="text-arrow__text text_color_orange-2 text_size_small text_weight_bold">
                                о компании
                            </div>
                        </a>
                    </div>
                    <div>
                        <h2 class="snip__title text text_size_h1 text_color_white">
                            СТРОИМ <br>
                            ПО СНИПУ
                        </h2>
                        <div class="snip__desc text text_size_main text_color_white">
                            По замыслу создателей, HYGGE — это посёлок, в котором живут
                            свободные люди. Свободные от стереотипов, свободные в проявлении
                            чувств и эмоций. Люди, которые умеют наслаждаться каждым моментом и
                            ценить
                        </div>
                        <a href="" class="snip__arrow button button_type_svg button_color_white-outline button_size_svg-lg text_color_white text_size_main-lg">
                            <svg viewBox="0 0 29 23">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M27.9 11.5 17.5 1.1M1 11.5H28 1Zm26.8 0L17.5 21.9l10.4-10.4Z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="expertise info-block sub-height">
            <div class="main-column-width expertise__main-column"></div>
            <div class="sub-column-width expertise__sub-column main-padding-horizontal">
                <h2 class="text text_color_white text_size_desc text_weight_bold">
                    Эксперт в области
                    девелопмента проектов
                    загородной недвижимости
                    Московского региона.
                </h2>
                <div class="expertise__desc text text_color_white text_size_main">
                    Компания ИНСЛИ Недвижимость создает проекты, в которых простор и свобода соединяются с комфортом и безопасностью, образуя точки роста нового поколения людей.
                </div>
            </div>
        </section>
        <section class="mission info-block sub-height">
            <div class="mission__main-column main-padding-horizontal main-column-width">
                <div class="mission__text-arrow text-arrow text-arrow_color_gray">
                    <a href="" class="text-arrow__inner text-arrow__inner_rotate">
                        <svg class="text-arrow__arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 12L14 5M3 12L21 12L3 12ZM21 12L14 19L21 12Z" stroke="#e76100" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="text-arrow__text text_size_small text_weight_bold">наша миссия и локациях</div>
                    </a>
                </div>
                <div>
                    <div class="text text_color_black text_weight_bold text_size_desc">
                        Свою МИССИЮ компания <br>
                        видит в том, чтобы вдохновлять <br>
                        людей жить. Жить за городом.
                    </div>
                    <div class="mission__desc text text_color_black text_weight_bold text_size_main-lg">
                        На текущий момент в портфеле компании <a href="" class="mission__desc-link text_color_orange-1">10 проектов на разной стадии развития,</a> в том числе и полностью построенные и заселенные коттеджные поселки, в которых жители уже радуются всем преимуществам загородной жизни
                    </div>
                    <div class="text-arrow">
                        <a href="" class="text-arrow__inner">
                            <div class="text-arrow__text text_color_orange-1 text_size_main">СМОТРЕТЬ ЛОКАЦИИ</div>
                            <svg class="text-arrow__arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 12L14 5M3 12L21 12L3 12ZM21 12L14 19L21 12Z" stroke="#ff7a00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mission__sub-column sub-column-width">
                <div class="mission__overlay"></div>
                <div class="mission__content main-padding-horizontal">
                    <div class="mission__sub-column-text text text_color_white text_weight_bold text_size_desc">
                        Пожалуй, популярной локации Подмосковья — по Новорижскому шоссе, на расстоянии 7 км от Москвы. Рядом живописный лесной массив и река Липка.
                    </div>
                    <div class="text-arrow">
                        <a href="" class="text-arrow__inner">
                            <div class="text-arrow__text text_color_orange-1 text_size_main">СМОТРЕТЬ ЛОКАЦИИ</div>
                            <svg class="text-arrow__arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 12L14 5M3 12L21 12L3 12ZM21 12L14 19L21 12Z" stroke="#ff7a00" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="section">
                <div class="section__col section__col_lg main-padding-horizontal">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem harum
                    incidunt inventore maiores molestiae nemo nobis quasi quis, rem sequi sit
                    voluptas voluptatibus! Aspernatur consequuntur earum, impedit nihil quas
                    veritatis.
                </div>
                <div class="section__col section__col_sm main-padding-horizontal">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem harum
                    incidunt inventore maiores molestiae nemo nobis quasi quis, rem sequi sit
                    voluptas voluptatibus! Aspernatur consequuntur earum, impedit nihil quas
                    veritatis.
                </div>
            </div>
        </footer>
    </main>
    <script src={{mix('/welcome/index.js')}}></script>
</body>

</html>