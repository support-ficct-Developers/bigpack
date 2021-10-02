@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')

@stop

@section('content')
<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
</head>
<body> 
	<!--cliente, proveedor, productos¿,personal-->
    <div class="container">
        <div class="cabecera"style="display: flex">
            <img src="{{asset('imagenes/logo.png')}}" width="100" height="100">
            <h1 class= "title"> PACKS FICCT </h1>
        </div>
    </div>
    
	<div class= "menu" >
        <div class="card-deck dashboard-card-deck">

            <div class="semestre">
                <form action="{{route('postMaterias')}}">
                    <div class="card dashboard-card" role="listitem" data-region="course-contend">
                        <input type="hidden" name="idSemestre" value="1" class="focus border-primary  form-control"  >
                        <button  class="btn btn-secundary btn-sm" >
                            <div class="card.img dashboard-card-img" style="color:#30ceae">
                                <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                            </div>
                            <div class="card-body pr-1 course-info-container" >
                                <h4>1er Semestre</h4>
                            </div>
                        </button>
                    </div>
                </form>
            </div>
            

             <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="2" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>2do Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="3" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>3er Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

             <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="4" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>4to Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="5" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>5to Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="6" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>6to Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="7" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>7mo Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="8" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>8vo Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="5" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>9no Semestre</h4>
                        </div>
                    </button>
                </div>
            </form>

            <form action="{{route('postMaterias')}}">
                <div class="card dashboard-card" role="listitem" data-region="course-contend">
                    <input type="hidden" name="idSemestre" value="6" class="focus border-primary  form-control"  >
                    <button  class="btn btn-secundary btn-sm" type="submit">
                        <div class="card.img dashboard-card-img" style="color:#30ceae">
                            <img src="{{asset('imagenes/logo.png')}}" width="150" height="150">
                        </div>
                        <div class="card-body pr-1 course-info-container" >
                            <h4>ELECTIVAS</h4>
                        </div>
                    </button>
                </div>
            </form>
            

        </div>
</body>


@stop

@section('css')
    <link rel="stylesheet" href="css/home.css">
	
@stop

@section('js')
@stop
