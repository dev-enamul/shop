@extends('admin.layout.app')
@section('content')
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3" style="display:flex; justify-content: space-between;align-items: center; padding:0 10px">
                <h6 class="text-white text-capitalize  ">All Category</h6>
                <a href="{{url('/category/create')}}" class="btn btn-light  ">Add Category</a>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-secondary opacity-7">Category Name</th> 
                      <th class="text-secondary opacity-7">Category Slug</th> 
                      <th class="text-secondary opacity-7">Status</th>
                      <th class="text-secondary opacity-7">Description</th>
                      <th class="text-secondary opacity-7">Action</th>
                    </tr>
                  </thead>
                  <tbody> 
                      @foreach($datas as $data)
                    <tr>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$data->name}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$data->slug}}</p> 
                      </td>
                      <td class="align-middle text-center text-sm">
                          @if($data->status == 1)
                        <a href="" class="btn btn-success">Publish</a>
                        @else 
                        <a href="" class="btn btn-danger">Publish</a>
                        @endif
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$data->description}}</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{url('/category/edit/'.$data->id)}}" class="btn btn-success" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                        <a href="{{url('/category/delete/'.$data->id)}}" class="btn btn-danger" data-toggle="tooltip" data-original-title="Edit user">
                          Delete
                        </a>
                      </td>
                    </tr> 
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div> 
@endsection