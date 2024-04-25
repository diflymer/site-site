@extends('layouts.base')

@section('content')



<div class="container-fluid">
    {{-- <div class="row">
        <div class="col">
        </div>
        <div class="col-12 col-lg-8" align="center">
          <br />
          <h1 class="head">О нас</h1><br /><br />
        </div>
        <div class="col">
        </div>
    </div> --}}
    <div class="row accordion">

        <div class="col-12">
            <h1 class="my-3" align="center">Наша история</h1>
            {{-- Accordion --}}
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      2024
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Год только начался, ещё всё впереди!</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      2023
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">В 2023 году сайт продолжил своё развитие. Были добавлены новые разделы, функции и возможности, которые позволили сайту стать ещё более популярным и востребованным среди пользователей.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        2022
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">В 2022 году сайт продолжал расти и развиваться. Были проведены масштабные работы по улучшению дизайна и интерфейса сайта. Также были добавлены новые функции, которые сделали сайт ещё более полезным и удобным для пользователей.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
                        2021
                    </button>
                  </h2>
                  <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">В 2021 году сайт продолжал развиваться и улучшаться. Были добавлены новые разделы и функции, чтобы сделать сайт более удобным и информативным для пользователей.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                        2020
                    </button>
                  </h2>
                  <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">В 2020 году был создан сайт компании. Основная цель — предоставить пользователям полезную информацию и ресурсы. Сайт быстро стал популярным среди целевой аудитории.</div>
                  </div>
                </div>
            </div>
            {{-- end Accordion --}}
        </div>
    </div>
</div>

@endsection