@extends('layouts.base')

@section('content')

@if(session()->has('regSuccess'))
  <div class="alert alert-success mb-0" align="center">{{ session('regSuccess') }}</div>
@endif

{{-- carousel --}}
<div id="carouselExampleIndicators" class="carousel slide mb-5">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/images/mountain.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/leaf.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="/images/flower.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<div class="container-fluid">

  {{-- Cards --}}
  <div class="row cards mb-5"  align="center">
    <div class="col"></div>

    {{-- История --}}
    <div class="col-lg-5 col-12 mb-2">
      <div class="card">
        <div class="div-img"><img class="img-fluid" src="/images/history.jpg" alt="no image"></div>
        <div class="card-body bg-dark text-white">
          С 2020 по 2024 год сайт компании активно развивался и улучшал свои функции. Были добавлены новые разделы и возможности, проведены работы по улучшению дизайна и интерфейса, а также реализованы функции, которые сделали сайт более удобным и информативным для пользователей.
        </div>
        <a href="{{ route('about') }}">
          <div class="card-footer bg-black text-white" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Перейти на страницу 'О нас'">
            Узнать подробнее
          </div>
        </a>
      </div>
    </div>

    {{-- Опрос --}}
    <div class="col-lg-5 col-12 mb-2">
      <div class="card to-survey">
        <div class="div-img"><img class="img-fluid" src="/images/survey.jpg" alt="no image"></div>
        <div class="card-body bg-dark text-white">
          Чтобы сделать сайт ещё лучше и удобнее для пользователей, мы предлагаем вам пройти небольшой опрос. Ваши ответы помогут нам определить, какие функции и разделы наиболее востребованы, а также понять, что можно улучшить на сайте.
        </div>
        <a href="{{ route('survey') }}">
          <div class="card-footer bg-black text-white" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Перейти на страницу с опросом">
            <div>Пройти опрос</div>
          </div>
        </a>
      </div>
    </div>
    {{-- <div class="col-lg-1"></div> --}}
    <div class="col"></div>
  </div>

  {{-- Модальное окно --}}
  <div class="modal modal-xl" tabindex="-1" id="Modal1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header justify-content-center" >
          <h5 class="modal-title">Пользовательское соглашение</h5>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
        </div>
        <div class="modal-body">
          <p>1. Общие положения Пользовательского соглашения</p>
          <p>1.1. В настоящем документе и вытекающих или связанным с ним отношениях Сторон применяются следующие термины и определения:</p>
          <p>а) Платформа — программно-аппаратные средства, интегрированные с Сайтом Администрации;</p>
          <p>б) Пользователь — дееспособное физическое лицо, присоединившееся к настоящему
            Соглашению в собственном интересе либо выступающее от имени и в интересах
            представляемого им юридического лица.</p>
            <p>в) Сайт Администрации/ Сайт — интернет-сайты, размещенные в домене ________.ru и его
            поддоменах.</p>
            <p>г) Сервис — комплекс услуг и лицензия, предоставляемые Пользователю с использованием
            Платформы.</p>
            <p>д) Соглашение — настоящее соглашение со всеми дополнениями и изменениями.
            1.2. Использование вами Сервиса любым способом и в любой форме в пределах его
            объявленных функциональных возможностей, включая:</p>
            <p>просмотр размещенных на Сайте материалов;</p>
            <p>регистрация и/или авторизация на Сайте;</p>
            <p>размещение или отображение на Сайте любых материалов, включая но не ограничиваясь
            такими как: тексты, гипертекстовые ссылки, изображения, аудио и видео- файлы,
            сведения и/или иная информация;</p>
            <p>создает договор на условиях настоящего Соглашения в соответствии с положениями ст.437 и
            438 Гражданского кодекса Российской Федерации.</p>
            <p>1.3. Воспользовавшись любой из указанных выше возможностей по использованию Сервиса вы
            подтверждаете, что:</p>
            <p>а) Ознакомились с условиями настоящего Соглашения в полном объеме до начала
            использования Сервиса.</p>
            <p>б) Принимаете все условия настоящего Соглашения в полном объеме без каких-либо изъятий и
            ограничений с вашей стороны и обязуетесь их соблюдать или прекратить использование
            Сервиса. Если вы не согласны с условиями настоящего Соглашения или не имеете права на
            заключение договора на их основе, вам следует незамедлительно прекратить любое
            использование Сервиса.</p>
            <p>в) Соглашение (в том числе любая из его частей) может быть изменено Администрацией без
            какого-либо специального уведомления. Новая редакция Соглашения вступает в силу с момента
            ее размещения на Сайте Администрации либо доведения до сведения Пользователя в иной
            удобной форме, если иное не предусмотрено новой редакцией Соглашения.</p>
            <p>2. Общие условия пользования Сервисом</p>
            <p>2.1. Использование функциональных возможностей Сервиса допускается только после
            прохождения Пользователем регистрации и авторизации на Сайте в соответствии с
            установленной Администрацией процедурой.</p>
            <p>2.2. Технические, организационные и коммерческие условия использования Сервиса, в том
            числе его функциональных возможностей доводятся до сведения Пользователей путем
            отдельного размещения на Сайте или путем нотификации Пользователей.</p>
            <p>2.3. Выбранные Пользователем логин и пароль являются необходимой и достаточной
            информацией для доступа Пользователя на Сайт. Пользователь не имеет права передавать свои
            логин и пароль третьим лицам, несет полную ответственность за их сохранность,
            самостоятельно выбирая способ их хранения.</p>
        </div>
        <div class="modal-footer justify-content-center">
          <button type="button" onclick="acceptTU()" class="btn btn-success" data-bs-dismiss="modal">Принять и продолжить</button>
        </div>
      </div>
    </div>
  </div>

  {{-- Скрипт для открытия модального окна при загрузке сайта --}}
  @if(!isset($_COOKIE["tu"]))
    <script type="text/javascript">
      $(window).on('load',function(){
          $('#Modal1').modal('show');
      });
    </script>
  @endif

  {{-- Скрытая ошибка --}}
  <div hidden id="errorDiv" class="alert alert-danger" align="center">
    Вы уже подписаны, либо некорректный email
  </div>
  {{-- Скрытый успех --}}
  <div hidden id="successDiv" class="alert alert-success" align="center">
    Спасибо за подписку!
  </div>
  {{-- Форма с подпиской --}}
  <div class="row mb-5">
    <div class="col">
    </div>
    <div class="col-12 col-lg-6" align="center">

      <x-errors></x-errors>

      <form id="newsletterForm">
        @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row">
          <div class="col">
          </div>
          <div class="col-12 col-lg-8" align="center">
            <br />
            <h1 class="head mb-2">Подпишитесь на нашу рассылку</h1><br /><br />
          </div>
          <div class="col">
          </div>
        </div>
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input id="email" type="email" id="form3Example4" required class="form-control" placeholder="Email адрес" name="email"
            value="{{ old('email') }}" />
        </div>

        <!-- Submit button -->
        <button id="buttonSubmitNewsletter" type="submit" class="btn btn-success btn-glow btn-block mb-4"
          name="register" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Рассылка на ваш email свежих новостей" >Подписаться</button>

      </form>

      {{-- Ajax отправка email --}}
      <script>

        $('#newsletterForm').on('submit', (event) => {
          event.preventDefault();

          let button = document.querySelector('#buttonSubmitNewsletter');
          button.setAttribute('disabled', true);

          let errorDiv = document.querySelector('#errorDiv');
          let successDiv = document.querySelector('#successDiv');

          let email = $('#email').val();
  
          $.ajax({
            url: "/newsletter",
            type:"POST",
            data:{
              "_token": "{{ csrf_token() }}",
              email:email
            },
            success:function(response){
              successDiv.removeAttribute('hidden');//показать успешный alert
              errorDiv.setAttribute('hidden', true);//скрыть неуспешный alert
              button.innerText = 'Вы подписаны';
            },
            error: function (error) {
              button.removeAttribute('disabled');
              successDiv.setAttribute('hidden', true);//скрыть успешный alert
              errorDiv.removeAttribute('hidden');//показать неуспешный alert
              errorDiv.innerText = error.responseJSON.message;
            }
          })
        });
      </script>

    </div>
    <div class="col">
    </div>
  </div>

</div>
{{-- Конец теста --}}

@endsection
