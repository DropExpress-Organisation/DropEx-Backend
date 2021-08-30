<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DropEx</title>
</head>
<body>
    <div class="container">

        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">Send SMS</div>
                    <div class="card-body">
                        {{-- <div id="twilio_response"></div> --}}
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="number" name="phone" class="form-control" id="phone">
                            </div>

                            <div class="form-group">
                                <label for="account">Message</label>
                                <input type="text" name="message" class="form-control" id="message">
                            </div>
                            <button id="sendSMS" class="btn btn-primary">Send SMS</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>

    <script>

    </script>
</body>
</html>