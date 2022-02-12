<div class="modal main-padding-horizontal main-padding-vertical"
     id="{{$modalId}}">
  <div class="modal__inner">
    <svg class="modal__close" fill="none" viewBox="0 0 22 22">
      <path d="M1.7 20.3 20.3 1.7m-18.6 0 18.6 18.6L1.7 1.7Z" stroke="#FF7A00"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    @yield($modalId)
  </div>
</div>
