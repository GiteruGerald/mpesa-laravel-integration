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
                    <div class="card-header">Transaction Reverse</div>
                    <div class="card-body">
                        <div idreverse2c_response"></div>
                        <form action="">
                            @csrf
                            <div class="form-group">
                                <label for="transactionid">Transaction ID</label>
                                <input type="text" name="transactionid" class="form-control" id="transactionid">
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="number" name="amount" class="form-control" id="amount">
                            </div>
                            <button id="reverse" class="btn btn-primary">Simulate STK</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.getElementById('reverse').addEventListener('click', (event) => {
            event.preventDefault()

            const requestBody = {
                amount: document.getElementById('amount').value,
                transactionid: document.getElementById('transactionid').value,
           
            }

            axios.post('reversal', requestBody)
                .then((response) => {
                    if (response.data.ResponseDescription) {
                        document.getElementById('reverse_response').innerHTML = response.data.ResponseDescription
                    } else {
                        document.getElementById('reverse_response').innerHTML = response.data.errorMessage
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
