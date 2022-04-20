

<div class="container-fluid">
    <div class="row">
        <div class="col-2 p-0">
        </div>
        <!-- Content -->
        <div class="content col-10">
            <h1>Request item</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">

                    <form action="<?= URLROOT ?>/students/request" method="POST" class="form">
                        <div class="row">
                            <div class="col-6">
                                <label class="visually-hidden">Naam</label>
                                <input type="naam" name="naam" class="form-control" id="naam" placeholder="Naam">
                            </div>
                            <div class="col-6">
                                <label class="visually-hidden">Studentennummer</label>
                                <input type="studentennummer" name="studentennummer" class="form-control" id="studentennummer" placeholder="Studentennummer">
                            </div>
                            <br></br>
                        </div>
                        <div class="col-12">
                            <label class="visually-hidden">Item</label>
                            <input type="item" name="item" class="form-control" id="item" placeholder="Item">
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
