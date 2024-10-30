@extends('layouts/app')

@section('titulo', 'Vista principal')

@section('contenido')
    <br>
    <div class="container" style="height: 85vh">
        <div class="row">
            <div class="col">
                <br>
                <br>
                <br>
                <br>
                <br>
                <h1>La escritora surcoreana Han Kang gana el premio Nobel de Literatura 2024</h1>
                <hr>
                <p> <span>La Academia Sueca le otorgó este jueves a la escritora surcoreana Han Kang el premio Nobel de Literatura de 2024.</span>

                    La academia destacó a Han Kang "por su intensa prosa poética que confronta traumas históricos y expone la fragilidad de la vida humana".
                    
                    De acuerdo a la Academia Sueca, la obra de la surcoreana "confronta traumas históricos y conjuntos de reglas invisibles".
                    
                    "Tiene una conciencia única de las conexiones entre el cuerpo y el alma, los vivos y los muertos, y en su estilo poético y experimental se ha convertido en una innovadora de la prosa contemporánea", añadió.</p>
            </div>
            <div class="col">
                <br>
                <br>
                <br>
                <br>
                <br>
                <img src="{{asset('images/Surcoreana.jpg')}}"class="img-fluid" alt="La escritora surcoreana Han Kang recibe el premio Nobel de Literatura.">
            </div>
        </div>
    </div>
    <br>
@endsection

    