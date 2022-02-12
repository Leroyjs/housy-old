@php($modalId = "modal-call-to-action")
@section($modalId)
  <section class="callback-from">
    <h2 class="callback-from__title text text_size_h2">
      Хотите работать с нами?
    </h2>
    <p class="callback-from__subtitle text text_size_desc">
      Оставьте заявку и наши менеджеры с вами свяжутся, <br>
      что бы уточнить детали проекта
    </p>

    <form action="/" class="callback-from__form"></form>

    <div class="callback-from__call">
      <p class="text text_color_white text_size_desc">
        или позвоните сами
      </p>
      <a class="callback-from__link text text_color_orange-1 text_size_desc"
         href="tel:+73433828003">
        +7 (343) 382 - 80 - 03
      </a>
    </div>
  </section>
@endsection
@include ('sections.modal', ['modalId' => $modalId])
