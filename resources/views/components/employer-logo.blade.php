@props(['employer'=>null,'width' => 90])

<img src="${{ asset($employer->logo) }}" alt="employer logo" class="rounded-xl" width="{{$width}}">
