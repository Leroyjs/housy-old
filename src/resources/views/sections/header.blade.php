<header class="header main-padding-horizontal">
  <div class="header__inner">
    <button class="burger-button">
      <svg class="burger-button__svg" viewBox="0 0 16 16">
        <path class="burger-button__line" d="M3.3335 4.66663H12.6668"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="burger-button__line" d="M3.3335 7.99997H12.6668"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path class="burger-button__line" d="M3.3335 11.3333H12.6668"
              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>
    <a class="header__logo-link" href="/">
      @include ('particles.logo', ['className' => 'header__logo', 'type' => 'home'])
    </a>

    <button class="callback" data-modal="modal-call-to-action">
      <p class="callback__title text text_size_desc">
        +7 (343) 382 - 80 - 03
      </p>
      <div
        class="callback__img button button_type_svg button_color_orange-outline button_size_svg-small">
        <svg viewBox="0 0 16 16">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                fill="none"
                d="m2.3 1.3 2.5.1c.5 0 1 .4 1.1.8L6.6 4c.2.4.2 1 0 1.3l-1 1.4c.5.8 2 2.6 3.6 3.7l1.2-.7c.3-.2.6-.3 1-.2l2.3.6c.6.2 1 .8 1 1.4l-.2 2c0 .7-.6 1.2-1.3 1.2C4.2 13.7-1 1.3 2.3 1.3Z"/>
        </svg>
      </div>
    </button>
  </div>
</header>
@include ('sections.burger-menu')
