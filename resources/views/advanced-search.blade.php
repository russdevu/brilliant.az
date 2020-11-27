@extends('layouts.site')

@section('page-title', 'Расширенный поиск')

@section('rubrics')
    @include('includes.rubrics')
@endsection

@section('main-container')
    <div class="as-wrapper">
        <form class="as" method="GET">
            <div class="as_select as_select--single as-item">
                <select>
                    <option value="all">Все изделия</option>
                    <option value="Бриллианты">Бриллианты</option>
                    <option value="Кольца">Кольца</option>
                    <option value="Серьги">Серьги</option>
                </select>
                <span></span>
            </div>

            <div class="as_select as_select--single as-item">
                <select>
                    <option value="all">Город</option>
                    <option value="Баку">Баку</option>
                    <option value="Гянджа">Гянджа</option>
                    <option value="Сумгаит">Сумгаит</option>
                </select>
                <span></span>
            </div>

            <div class="as-item_price as-item">
                <label for="currency">
                    Цена,&nbsp;&nbsp;AZN
                </label>
                <input 	class="amount_input"
                        type="number"
                        name="amount">
                <p>—</p>
                <input  class="amount_input"
                        type="number"
                        name="amount">
            </div>

            <div class="as_checkbox as-item">
                <label for="barter">Бартер</label>
                <input id="barter" name="barter" type="checkbox">
            </div>

            <div class="single-input_wrapper as-item">
                <label>
                    <svg>
                        <use xlink:href="sprite.svg#search">
                        </use>
                    </svg>
                </label>
                <input class="single-input" type="text">
            </div>

            <div class="as-item as-btn">
                <button class="primary-btn searchBtn" type="submit">
                    Поиск
                </button>
            </div>
        </form>
    </div>
@endsection
