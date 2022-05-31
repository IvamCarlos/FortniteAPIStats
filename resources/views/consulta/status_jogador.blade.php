<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortnite API</title>
    <script src="https://use.fontawesome.com/2884a73c4a.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</head>
<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-5">
                        <form action="{{ route('fortnite.status') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <h1 class="text-center"><b>Encontre suas estatísticas do Fortnite</b></h1>
                            </div>
                            <div class="card-body">
                                <div class="form-group"> 
                                    <input class="form-control" type="text" id="id" name="id" placeholder="Entre com seu Epic name...">
                                </div>
                                <div class="form-group">
                                    <select class="form-control" name="plataforma" id="plataforma">
                                        <option value="#">Selecione uma opção...</option>
                                        <option value="kbm">PC</option>
                                        <option value="gamepad">Console</option>
                                        <option value="touch">Celular</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-primary btn-lg btn-block">Pesquisar</button>
                            </div>
                        </form>
                    </div>

                    <div id="result"></div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('button').click(function(){
        $.ajax({
            type: "post",
            url: "{{ route('fortnite.status') }}",
            data: {
                _token: "{{ csrf_token() }}",
                id: $('#id').val(),
                plataforma: $('#plataforma').val(), 
            },
            success: function(data){
                console.log(data.resultado);
                console.log(data);
                if(data.resultado == "Jogador não encontrado!"){
                    $('#result').addClass('text-danger text-center').text(data.resultado);
                }else{
                    document.write(data);
                }
            },
            error: function(err){
                console.log(err);
            }
        })
    })
</script>

</html>
