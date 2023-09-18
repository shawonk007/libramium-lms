<x-admin-layout>

  <x-slot name="title" >
    {{ __('Sample') }}
  </x-slot>

  <x-slot name="header" >
    <h1 class="h3 mb-3">Blank Page</h1>
  </x-slot>

  <section class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title mb-0">Empty card</h5>
        </div>
        <div class="card-body">
        </div>
      </div>
    </div>
  </section>

  <x-slot name="script" ></x-slot>

</x-admin-layout>
