

<x-app-web-layout>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 style="font-size: 1.5rem; font-weight: bold;"> Edit Role</h4>
                    <a href="{{url ('roles')}}" class="btn btn-danger float-end">Back</a>

                </div>
                <div class="card-body">
                    <form action="{{url ('roles/'.$role->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Role Name</label>
                            <input type="text" name="name" value="{{$role->name}}" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


</x-app-web-layout>