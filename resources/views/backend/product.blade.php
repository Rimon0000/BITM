@extends('backend.layouts.master')

@section('content')
<section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <h1 class="text-center">Add Products</h1>
                    <form action="store.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="inputTitle" class="col-sm-2 col-form-label">Title:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="" id="inputTitle">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputLink" class="col-sm-2 col-form-label">Link:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link" value="" id="inputLink">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputMessage" class="col-sm-2 col-form-label">Messages:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="messages" value="" id="inputMessages">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDetails" class="col-sm-2 col-form-label">Details:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="details" value="" id="inputDetails">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection