@Vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="cards">
    @foreach ($array as $item)
    <div class="cardall">
        <img class="cardimg" src="{{ $item['path'] }}" alt="{{$item['title']}}">
        <h3> {{ $item['title'] }}</h3>
        <p> {{ $item['price']  }} &#8381; </p>
    </div>
    @endforeach
</div>
<h1>
    <li>
   <a href="{{ url('array/shuffle') }}">перемешать массив</a>  
    </li>
    <li>
    <a href="{{ url('array/sort') }}">отсортировать массив</a>
    </li>
    <li>
        <a href="{{ url('array/filter') }}">фильтр > 1000</a>
    </li>
</h1>