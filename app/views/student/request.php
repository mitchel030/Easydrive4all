

<div class="container-fluid">
    <div class="row">
        <div class="col-2 p-0">
            <!-- Sidebar -->
        </div>
        <!-- Page Content -->
        <div class="content col-10">
            <h1>Request</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">
                        <!-- Button trigger modal
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#StudentModal">
                            Launch demo modal
                        </button>

                         Modal 
                    <div class="modal fade" id="StudentModal" tabindex="-1" aria-labelledby="StudentModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="StudentModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <form action="" method="POST" class="form">
                        <div class="row">
                            <div class="col-6">
                                <label class="visually-hidden">Product</label>
                                <input type="product" name="inputProduct" class="form-control" id="inputproduct" placeholder="Product">
                            </div>
                            <div class="col-6">
                                <label class="visually-hidden">Amount</label>
                                <input type="amount" name="inputAmount" class="form-control" id="inputamount" placeholder="Amount">
                            </div>
                            <br></br>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden">Reason</label>
                            <input type="reason" name="inputReason" class="form-control" id="inputreason" placeholder="Reason">
                        </div>
                        <br></br>   
                        <div class="row">
                            <div class="col-12">
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- // Require end include -->
<?php require_once APPROOT . '\views\includes\end.php'; ?>