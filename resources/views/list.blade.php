<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TodoJax</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="card">
                    <div class="card-header">
                      Quote
                      <a href="#" class="pull-right" id="addNew" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                            <div class="card">
                                    <ul class="list-group list-group-flush">
                                      @foreach ($items as $item)
                                      <li class="list-group-item list-group-item-action ourItem" data-toggle="modal" data-target="#myModal">{{ $item->item }}
                                      <input type="hidden" id="itemId" value="{{ $item->id }}"></li>
                                      @endforeach
                                    </ul>
                                  </div>
                      </blockquote>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    {{ csrf_field() }}

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title">Add New Item</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="id">
        <p><input type="text" id="addItem" class="form-control" placeholder="write here.."></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" style="display: none">Delete</button>
        <button type="button" class="btn btn-primary" id="saveChanges" style="display: none">Save changes</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="addButton">Add Item</button>
      </div>
    </div>
  </div>
</div>