@extends('layout')

@section('content')
    <div class="main">
        <div class="about">
            <div class="d-flex about-oil">
                <div class="h1-about">
                    <img class="image-logo" src="{{ asset('images/logo_black.png') }}" alt="logo">
                    <h1 style="font-size: 4.5rem">
                        OIL MECHANIC
                    </h1>
                </div>
            </div>
            <div class="col-md-9 text-about" style="position: relative; top: -125px">
                «OIL MECHANIC» ведущий поставщик систем защиты погружного оборудования в скважине
                на территории России и СНГ.
                Основная задача нашего оборудования защищать кабельные линии и погружные установки от
                механических <br> повреждений в скважине, а также в процессе СПО и эксплуатации.
            </div>
        </div>
        <div class="">
            <img class="fon img-fluid" style="text-align: right;" src="{{ asset('images/fon.png') }}" alt="">
        </div>
{{--        <div class="col-md-9 text-about" style="text-align: right; position: relative; top: -125px">--}}
{{--            «OIL MECHANIC» ведущий поставщик систем защиты погружного оборудования в скважине--}}
{{--            на территории России и СНГ.--}}
{{--            Основная задача нашего оборудования защищать кабельные <br> линии и погружные установки от--}}
{{--            механических повреждений в скважине, а также <br> в процессе СПО и эксплуатации.--}}
{{--        </div>--}}


        <div class="col-md-10" style="font-size: 26px; text-align: right; position: relative; top: -12px; right: -214px;">
            <div>
                <div>Компания разработала широкий ассортимент изделий. Таким образом,<br></div>
                <div class="" style="position: relative; left: -90px">
                    «OIL MECHANIC» с большой вероятностью обеспечивает защиту кабеля и
                </div>

                <div class="" style="position: relative; left: -270px">
                    беспрепятственный спуск и подъем оборудования из скважины.<br>
                </div>
                <div class="" style="position: relative; left: -370px">
                    Первый патент на протектор кабеля был получен в 2000 году.
                </div>
            </div>
    </div>
<div class="companies row justify-content-center m-4 img-fluid">
    <img  src="{{ asset('images/companies.png') }}" alt="">
</div>

<div style="width: 100vw;
    position: relative;
    left: 50%;
    right: 50%;
    margin-left: -50vw;
    margin-right: -50vw;" id="systems" class="systems bg-green p-4">
    <div class="text-white d-flex justify-content-center " style="margin-bottom: 30px; font-size: 45px; font-weight: 250" >
        Системы защиты погружного оборудования и кабельных линий в скважине
    </div>
    <div class="row d-flex justify-content-center" style="border-top: 6px solid white;">
        @foreach($systems as $system)
                <div class="card col-md-4 bg-light m-5 p-3" style="width: 20rem; border: none">
                    <img style="width: 300px" class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-black">{{ $system->name }}</h5>
                        <a style="border: 1px solid black" class="btn bg-white" href="{{route($system->childs_count > 0 ? 'childs' : 'system', ['id' => $system->id])}}">Перейти</a>
                    </div>
                </div>
        @endforeach
    </div>
</div>

<div id="principles" class="principles mt-3">
   <h2>
       Принципы нашей работы
   </h2>

    <div class="row mt-4">
        <div class="col-md-4">
                <img class="icons justify-content-center" src="{{ asset('images/target.png') }}" alt="careful">
            <h5 class="mt-3">Забота о клиентах</h5>
            <p>Постоянно изучаем их потребности, предлагая новые полезные решения.
                Мы уверены, что это — залог нашего роста и появления новых
                долгосрочных партнерских отношений
            </p>
        </div>
        <div class="col-md-4">
            <img class="icons" src="{{ asset('images/experience.png') }}" alt="experience">
            <h5 class="mt-3">Обмен опытом</h5>
            <p>
                Мы ценим обмен идеями
                и предложениями, поэтому наша готовность найти новые решения
                в технологии и инновации образует ядро нашей политики ведения бизнеса
            </p>
        </div>
        <div class="col-md-4">
            <img class="icons" src="{{ asset('images/quality.png') }}" alt="quality">
            <h5 class="mt-3">Качественный сервис</h5>
            <p>
                Своевременная доставка, соблюдение правил охраны окружающей среды
                и правил безопасности, но нет предела совершенству. Мы не боимся трудностей и стремиться
                к их преодолению
            </p>
        </div>
    </div>
</div>

<div class="row d-flex mt-3" style="background: rgb(11, 69, 0, 0.95); width: 100vw;
     position: relative;
     left: 50%;
     right: 50%;
     margin-left: -50vw;
     color:white;
     margin-right: -50vw;">
    <div class="col-md-5">
        <h2 class="mt-4">
            География покупателей
        </h2>
        <p class="mt-3">
            Наше глубокое понимание проблем в профессиональной сфере помогло нам
            стать ведущими поставщиками технологических решений,
            связанных с нефтяной и газовой промышленностью.
            Компания также активно сотрудничает
            и с представителями малых и средних
            нефтегазодобывающих предприятий
        </pc>
    </div>
    <div class="col-md-7">
        <img class="map img-fluid" src="{{ asset('images/map.png') }}" alt="map">
    </div>
</div>

<div class="row mt-5">
    <h2 class="mt-4">
            Контакты
    </h2>
<div class="card">
  <div class="card-body">
      <span class="fa fa-mobile fa-2x text-success float-right pulse" title="online now"></span>
        <span>Телефон:</span>
        <a href="tel:+74956779007" class="text-muted small">+7 (495) 677-90-07</a>
        <br>
        <span>Телефон:</span>
        <a href="tel:+74956779008" class="text-muted small">+7 (495) 677-90-08</a>
        <br>
        <span>Email:</span>
        <a href="mailto:oilmechanic@bk.ru" class="text-muted small text-truncate">oilmechanic@bk.ru</span>
  </div>
</div>
</div>
@endsection
