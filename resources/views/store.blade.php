

@foreach($items['items'] as $item)

    <div><h1>{{$item['title']}}</h1></div></br>
    <div>{!! $item['description'] !!}</div>
    <div><img src="{{$item['images']['0']['imageUrl']}}" ></div></br>
@endforeach


