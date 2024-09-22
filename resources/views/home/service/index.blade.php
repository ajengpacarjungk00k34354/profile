<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Our Services</h1>
        <div class="row">
            @foreach ($services as $item)
                <div class="col-md-3 my-3">
                    <div class="text-center">
                        <i class="{{ $item->icon }} fa-3x text-success"></i>
                        <h5><b>{{ $item->title }}</b></h5>
                        <p>{{ $item->desc }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
