


@php
    $image_path="company";
    $images=array("_image_1"=>"image1.jpg", "image1.jpg","image1.jpg","image1.jpg","image1.jpg");

@endphp


@section('content')
 <img src="{{asset('images/{{$image_path.$images[0]}}')}}">

 <x-carusel variable="{{$images}}"/>
@endsection