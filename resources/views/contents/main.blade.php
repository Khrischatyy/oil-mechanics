@extends('layout')

@section('content')

<div class="systems">
    <h2>
        Системы защиты погружного оборудования и кабельных линий в скважине
    </h2>
    <div class="row d-flex justify-content-center">
        @foreach($systems as $system)
            <a href="{{route('childs', ['id' => $system->id])}}">
                <div class="card col-md-4 bg-dark m-5" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset($system->image) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-white">{{ $system->name }}</h5>
                        <a href="#" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<div class="principles">
   <h2>
       Принципы нашей работы
   </h2>

    <div class="row mt-4">
        <div class="col-md-4">
            <img class="icons" src="{{ asset('images/target.png') }}" alt="careful">
            <h5>Забота о клиентах</h5>
            <p>Постоянно изучаем их потребности, предлагая новые полезные решения.
                Мы уверены, что это — залог нашего роста и появления новых
                долгосрочных партнерских отношений
            </p>
        </div>
        <div class="col-md-4">
            <img class="icons" src="{{ asset('images/experience.png') }}" alt="experience">
            <h5>Обмен опытом</h5>
            <p>
                Мы ценим обмен идеями
                и предложениями, поэтому наша готовность найти новые решения
                в технологии и инновации образует ядро нашей политики ведения бизнеса
            </p>
        </div>
        <div class="col-md-4">
            <img class="icons" src="{{ asset('images/quality.png') }}" alt="quality">
            <h5>Качественный сервис</h5>
            <p>
                Своевременная доставка, соблюдение правил охраны окружающей среды
                и правил безопасности, но нет предела совершенству. Мы не боимся трудностей и стремиться
                к их преодолению
            </p>
        </div>
    </div>
</div>

<div class="row d-flex">
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
@endsection
