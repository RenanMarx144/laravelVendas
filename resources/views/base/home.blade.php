@extends('base.layout')
@section('title', 'Home')
@section('content')

    <div class="container pt-5 pb-5 mt-5">
        <form id="form" method="GET" action="{{route('carrinho')}}">
            @csrf
            <div class="row ">
                @foreach ($produtos as $prod)
                    <div class="col-4 mb-4 justify-content-center d-flex">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title" style="text-transform: uppercase">{{ $prod->name }}</h5>
                                <p class="card-text"> {{$prod->description}}</p>
                                <br>
                                <p> R$ {{$prod->value}}</p>
                                <div class="d-flex mt-auto align-items-center " style="height: 50px;">
                                    <a onclick="remove(event, '0')" class="btn"><i class="fa-solid fa-minus"></i></a>
                                    <p class="m-0 prod_0">0</p>
                                    <input type="hidden" name="count[{{$prod->id}}]" value="1" id="prod_0">
                                    <input type="hidden" name="prod[{{$prod->id}}]" value="{{$prod}}" id="prod_0">
                                    <a onclick="addmore(event, '0')" class="btn"><i class="fa-solid fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-3 mx-5"><button class="btn btn-primary" type="submit">Comprar</button></div>
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            // console.log('asd');

        });

        function addmore(e, id) {

        }

        function remove(e, id) {

        }
    </script>

@endsection
