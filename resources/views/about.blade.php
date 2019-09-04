@extends('layouts.app')


@section('content')
<div class="container my-4">
    <p class="font-weight-bold">To animate any element add .animated class and then add one of the available classes
        which specify the fading effect.</p>

    <p><strong>Detailed documentation and more examples of animations you can find in our <a href="https://mdbootstrap.com/docs/jquery/css/animations/"
            target="_blank">Bootstrap Animations Docs</a>.</p>

    <p><strong>Examples of available animation classes:</strong></p>

    <ol>
        <li><code>.animated .fadeIn</code></li>
        <li><code>.animated .fadeInDown</code></li>
        <li><code>.animated .fadeInUp</code></li>
        <li><code>.animated .fadeInLeft</code></li>
        <li><code>.animated .fadeInRight</code></li>
        <li><code>.animated .fadeInDownBig</code></li>
        <li><code>.animated .fadeInUpBig</code></li>
        <li><code>.animated .fadeInLeftBig</code></li>
        <li><code>.animated .fadeInRightBig</code></li>
    </ol>

        <p><Strong>Note: </Strong>In the example below 1 sec delay to the animation. It is added via JavaScript and it's <strong>not</strong> necessary to make the animation working properly.</p>

    <div class="row mb-4">

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(31).jpg" alt="A view on mountains."
            class="img-fluid animated fadeIn">
        </div>

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(32).jpg" alt="Cottage on a lake surrounded by mountains."
            class="img-fluid animated fadeInDown">
        </div>

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg" alt="Cyclist riding down the mountain path."
            class="img-fluid animated fadeInUp">
        </div>

    </div>

    <div class="row mb-4">

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg" alt="View on mountains from mountain top."
            class="img-fluid animated fadeInLeft">
        </div>

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(14).jpg" alt="Rocky shore in the morning."
            class="img-fluid animated fadeInRight">
        </div>

        <div class="col-md-4">
        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg" alt="Rocky shore in the morning."
            class="img-fluid animated fadeInUp">
        </div>

    </div>
</div>
<script>
$(".animated").addClass("delay-3s");
</script>
@endsection
