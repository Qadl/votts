PROLIFLRR


@foreach ($conts as $item)

<img src="{{asset('uploads/images/'.$item->image)}}" width="100px" alt="Image">
<p>{{$query->fName}}</p>
<img class='prvimg' id="preview-image" src="/img/hhh.jpg" alt="preview image">
<img src="/img/uae.jpg" class="xt-img">
@endforeach


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="{{route('votings', ['id'=> $vprof->id])}}" method="post" enctype="multipart/form-data">
            <p name="cand_id">{{$vprof->user_id}} </p>

            <input type="number" name="cand_id" value="{{$vprof->user_id}}" readonly>
            <input type="number" name="votesNo" placeholder="votes">
            <button>GO</button>
            @csrf
        </form>
    </div>
</body>

</html>