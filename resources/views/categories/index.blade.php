@extends('layouts.app')
@section('content')

    @if (session("info"))
        <div class="alert alert-secondary">
            {{session("info")}}
        </div>
    @endif
<div class="card">
    <div class="card-body">
      <div class="row">
        <h4 class="card-title d-inline mt-2">CATEGORY LIST
            {{-- <a href="{{ url('categories/create') }}"><button class="btn btn-primary btn-sm mb-2 float-end" onclick="test_sidebar()"> <i class="fas fa-plus"></i> Add</button></a> --}}
            <button type="button" class="btn btn-primary btn-sm mb-2 float-end" data-bs-toggle="modal" data-bs-target="#exampleModal-4"> <i class="fas fa-plus"></i> ADD</button>
        </h4>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                    <th>No</th>
                    <th>Category Name (ENG)</th>
                    <th>Category Name (MM)</th>
                    <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                    @php $i = 1; @endphp
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->name_mm }}</td>
                        <td class="text-center">
                            <a href="#">
                                <button class="btn btn-outline-warning pt-1 pb-1" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{$category->id}}"> <i class="ti-pencil-alt"></i> </button>
                            </a>
                            <form action="{{ url('categories/delete',['id'=>$category->id]) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure want to delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" id="PopoverCustomT-1" class="btn btn-outline-danger pt-1 pb-1"><i class="ti-trash"> </i></button>
                            </form>
                          {{-- <a href="categories/{{$category->id}}/edit">
                            <button class="btn btn-outline-warning pt-1 pb-1"> <i class="ti-pencil-alt"></i> </button>
                          </a>
                            <a href="categories/delete/{{$category->id}}">
                                <button class="btn btn-outline-danger pt-1 pb-1"> <i class="ti-trash"></i> </button>
                            </a> --}}
                        </td>
                    </tr>

                    {{-- edit category modal --}}
                    <div class="modal fade" id="editCategoryModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Category Edit</h5>
                            <a href="{{ url('categories/') }}" class="btn"><i class="ti-close" style="font-size: 10px"></i></a>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('categories.update', $category->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Category Name (ENG)</label>
                                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" id="recipient-name">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Category Name (MM)</label>
                                        <input type="text" name="name_mm" value="{{ $category->name_mm }}" class="form-control" id="recipient-name">
                                        <div class="text-danger form-control-feedback">
                                            {{$errors->first('name_mm')}}
                                        </div>
                                    </div>
                            </div>
                            <div class="modal-footer">
                            <button type="submit" class="btn btn-success">SAVE</button>
                            </form>
                            <a href="{{url('categories/')}}" class="btn btn-light">CANCEL</a>
                            </div>
                        </div>
                        </div>
                    </div>

                    @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- create category modal --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
      <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ModalLabel">Category Create</h5>
                <a href="{{ url('categories/') }}" class="btn"><i class="ti-close" style="font-size: 10px"></i></a>
              {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> --}}
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Category Name (ENG)</label>
                        <input type="text" name="name" class="form-control" id="recipient-name">
                        <div class="text-danger form-control-feedback">
                            {{$errors->first('name')}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Category Name (MM)</label>
                        <input type="text" name="name_mm" class="form-control" id="recipient-name">
                        <div class="text-danger form-control-feedback">
                            {{$errors->first('name_mm')}}
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-success">SAVE</button>
            </form>
            <a href="{{url('categories/')}}" class="btn btn-light">CANCEL</a>
              {{-- <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> --}}
            </div>
          </div>
        </div>
      </div>


@endsection
