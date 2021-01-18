<?php session_start()?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class=" container w-50 mx-auto my-5 border p-5 shadow">
    <form>
        <div class="mb-3 input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Amount <i class="fa fa-inr px-3" style="font-size:35px;"></i></span>
            <input type="button" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div id="paypal-button-container">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script>
    var url_string = window.location.href
    var url = new URL(url_string);
    var c = url.searchParams.get("amount");
    document.getElementById("exampleInputEmail1").value = c;
</script>
<script src="https://www.paypal.com/sdk/js?client-id=sb"></script>
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: c
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                alert('Transaction completed by ' + details.payer.name.given_name);
                location.href = "index.php";
            });
        }
    }).render('#paypal-button-container');
    //This function displays payment buttons on your web page.
</script>
<?php unset($_SESSION['cart']);?>