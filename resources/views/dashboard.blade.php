<!doctype html>
<html lang="en">

<head>
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{ asset('../css/style.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center text-capitalize">dice game</h1>
        <form action="{{ route('mulai') }}" method="POST" id="form_tambah_edit">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="pemain" name="pemain" placeholder="Password"
                            required>
                        <label class="text-capitalize" for="pemain">player</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="dadu" name="dadu" placeholder="Password"
                            required>
                        <label class="text-capitalize" for="dadu">dice</label>
                    </div>
                </div>
                <div class="col">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg">Roll</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</body>

</html>
