<x-admin-master>

    @section('content')
    <h1 class="h3 mb-0 text-gray-800">users</h1>
    @endsection
    
    
    @section('users')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">All Users</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-responsive table table-bordered" id="USERSTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Registered Date</th>
                <th>Updated Profile Date</th>
                <th>Delete</th>
                <th>Edit</th>
               
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->username}}</td>
                <td><div><img height="40px" src="{{asset($user->avatar)}}" alt=""></div></td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
                <td>{{ $user->updated_at->diffForHumans() }}</td>

                <td> 
                  {{-- @can('update', $post)
                <form method="POST" action="{{ route('post.destroy', $post->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form> 
                @endcan --}}
                </td>

                <td> 
                  {{-- @can('view', $post)
                  <form method="POST" action="{{ route('post.edit', $post->id) }}">
                    @csrf
                    @method('GET')
                    <button type="submit" class="btn btn-primary">Edit</button>
                  </form> 
                  @endcan --}}
                  </td>
                
              </tr>
            @endforeach
          </tbody>
          </table>
        </div>
      </div>
    </div>
   
@endsection


@section('scripts')
<!-- Page level plugins -->
<script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('js/demo/chart-pie-demo.js') }}"></script>
<script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
    
    
    </x-admin-master>