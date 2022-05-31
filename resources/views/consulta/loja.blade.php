<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortnite API</title>
    <script src="https://use.fontawesome.com/2884a73c4a.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach($resultado as $r)
                <div class="col-sm-3">
                    <div class="card-deck">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $r->imageUrl }}" style="width: 150px; height: 150px;"alt="Skin">
                            <div class="card-body">
                                <h5 class="card-title">{{ $r->name }}</h5>
                                <p class="card-text">{{ $r->rarity }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">VBucks: {{ $r->vBucks }}</small>
                            </div>
                        </div>
                    </div><br>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>