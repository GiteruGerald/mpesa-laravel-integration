<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Daraja</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto">
                <div class="card mt-5">
                    <div class="card-header">Transaction StatusCheck</div>
                    <div class="card-body">
                        <div id="b2c_response"></div>
                        <form action="">
                            @csrf

                            <div class="form-group">
                                <label for="transactionId">TransactionId</label>
                                <input type="text" name="transactionId" class="form-control" id="transactionId">
                            </div>
                      
                            <button id="status" class="btn btn-primary">Check Transaction</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.getElementById('status').addEventListener('click', (event) => {
            event.preventDefault()

            const requestBody = {
                transactionid: document.getElementById('transactionId').value,
            }

            axios.post('check-status', requestBody)
                .then((response) => {
                    if (response.data.ResponseDescription) {
                        document.getElementById('b2c_response').innerHTML = response.data.ResponseDescription
                    } else {
                        document.getElementById('b2c_response').innerHTML = response.data.errorMessage
                    }
                    console.log(response.data)
                })
                .catch((error) => {
                    console.log(error)
                })
        })
    </script>
</body>

</html>
