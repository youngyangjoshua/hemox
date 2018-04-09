@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row course-set courses__row">
            <article class="col-md-4 course-block course-block-lessons">
                test
            </article>
            <article class="col-md-4 course-block course-block-lessons">
                {{$product_id}}
            </article>
            <article class="col-md-4 course-block course-block-lessons">
                {{$product_quantity}}
            </article>
        </div>
    </div>
</div>
@endsection