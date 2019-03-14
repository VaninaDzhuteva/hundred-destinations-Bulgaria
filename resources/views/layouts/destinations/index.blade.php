@extends('layouts.app')

@section('title', 'Стоте обекта')

@section('content')
    <div class="container-fluid bg-secondary">
        <div class="row py-5">
            <div class="col-12">
                <div class="destinations-container row p-4">
                    @foreach($destinations as $destination)

                        <div class="destination col-lg-2 text-center p-0">

                            <span class="destination-number">{{ $destination->number }}</span>

                            <div class="img-container text-center d-flex justify-content-center align-items-center">
                                <img src="{{ asset("images/$destination->image") }}" class=""
                                 alt="...">
                                <a href="{{ "/destinations/" . $destination->id }}" class="img-container__view-more">Виж повече</a>
                            </div>

                            <div class="title">{{ $destination->name }}</div>

                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @include('layouts.partials.messages')

                <form action="/destinations" method="post" enctype="multipart/form-data" class="">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="number">Номер</label>
                        <input value="{{ old('message') }}" type="text" name="number">
                    </div>

                    <div class="form-group">
                        <label for="category">Категория</label>
                        <input value="{{ old('message') }}" type="text" name="category">
                    </div>

                    <div class="form-group">
                        <label for="name">Име</label>
                        <input value="{{ old('message') }}" type="name" name="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Описание</label>
                         <textarea col="16" rows="16"value="{{ old('message') }}" name="description"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Снимка</label>
                        <input value="{{ old('message') }}" type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="location">Локация</label>
                        <input value="{{ old('message') }}" type="text" name="location">
                    </div>

                    <div class="form-group">
                        <label for="address">Адрес</label>
                        <input value="{{ old('message') }}" type="text" name="address">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Контакти</label>
                        <input value="{{ old('message') }}" type="tel" name="phone_number">
                    </div>

                    <div class="form-group">
                        <label for="email">Имейл:</label>
                        <input value="{{ old('message') }}" type="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="working_days">Работно дни:</label>
                         <textarea col="16" rows="16"value="{{ old('message') }}" name="working_days"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="working_hours">Работно часове:</label>
                         <textarea col="16" rows="16"value="{{ old('message') }}" name="working_hours"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="taxes">Такси</label>
                         <textarea col="16" rows="16"value="{{ old('message') }}" name="taxes"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="lectures">Беседи:</label>
                         <textarea col="16" rows="16"value="{{ old('message') }}" name="lectures"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="freeDay">Свободен ден</label>
                        <input value="{{ old('message') }}" type="text" name="freeDay">
                    </div>

                    <div class="form-group">
                        <label for="visited">Посещаван:</label>
                        <input value="{{ old('message') }}" type="number" name="visited">
                    </div>
                    <button type="submit" class="btn btn-primary">Въведи</button>
                </form>
            </div>
        </div>
    </div>

@endsection

{{--<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11890.670859003045!2d23.488145!3d41.8354528!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x667b71805d179058!2sVelyanova+house!5e0!3m2!1sen!2sbg!4v1552472454112" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11890.727523456806!2d23.4867428!3d41.8351478!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x83db2be1dc1ac3aa!2s%22Neofit+Rilski%22+House-Museum!5e0!3m2!1sen!2sbg!4v1552473721915" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11890.27022241314!2d23.4888104!3d41.8376092!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe6c610e359acb05b!2sMuseum+%22Nikola+Vaptsarov%22!5e0!3m2!1sen!2sbg!4v1552474118248" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2972.638054852539!2d23.48606201543978!3d41.83609137922556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14abaea3231f655b%3A0x2275b921d9f0646c!2zdWwuICJZYW5lIFNhbmRhbnNraSIgMywgMjc3MCDQutCyLiDQodGC0LDRgNC40Y8g0LPRgNCw0LQsIEJhbnNrbw!5e0!3m2!1sen!2sbg!4v1552474414994" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
--}}

