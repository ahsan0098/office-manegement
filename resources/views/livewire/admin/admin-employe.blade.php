<div>
    <div class="px-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Fixed Header Table</h3>

                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#exampleModal">
                                    Launch demo modal
                                </button> --}}
                                <input type="text" name="table_search" class="form-control float-right"
                                    placeholder="Search">

                                <div class="input-group-append mr-2">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-default btn-primary px-2" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="bi bi-person-plus-fill"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Salary</th>
                                    <th>Department</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <div>
                                    @foreach ($employe as $emp)
                                        <tr>
                                            <td>{{ $emp->id }}</td>
                                            <td>{{ $emp->name }}</td>
                                            <td>{{ $emp->email }}</td>
                                            <td>{{ $emp->salary }}</td>
                                            <td>Department name</td>
                                            <td>position</td>
                                            <td>Approved</td>
                                        </tr>
                                    @endforeach
                                </div>
                            </tbody>
                        </table>
                        {{-- <button wire:click.prevent="addEmploye">click me</button>
                        {{ $test }} --}}
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog" role="document">
                <div class="modal-content align self-center" style="width: 600px;">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Register new employe</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card card-primary">
                            <div class="card-body">
                                <form wire:submit.prevent="addEmploye">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name</label>
                                                <input type="text" name="emp_name" wire:model="emp_name"
                                                    class="form-control" id="exampleInputEmail1"
                                                    placeholder="Enter name">
                                                @error('emp_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-md-6">

                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" name="emp_mail"
                                                    wire:model="emp_email" id="exampleInputEmail1"
                                                    placeholder="Enter email">
                                                @error('emp_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>

                                        <!-- /.col -->
                                        <div class="col-md-6">

                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Password</label>
                                                <input type="text" class="form-control" name="emp_password"
                                                    wire:model="emp_password" id="exampleInputEmail1"
                                                    placeholder="Enter password">
                                                @error('emp_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Deparment</label>
                                                <select class="form-control select2" style="width: 100%;"
                                                    name="emp_department" wire:model="emp_department"
                                                    wire:click="changeEvent($event.target.value)">
                                                    <option selected="selected">Select</option>
                                                    <div>
                                                        @foreach ($deps as $dp)
                                                            <option value="{{ $dp->id }}">{{ $dp->name }}
                                                            </option>
                                                        @endforeach
                                                    </div>
                                                </select>
                                                @error('emp_department')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Position</label>
                                                <select class="form-control select2" style="width: 100%;"
                                                    name="emp_position" wire:model="emp_position">
                                                    <option selected="selected"></option>
                                                    <div>
                                                        @foreach ($sub_deps as $sd)
                                                            <option value="{{ $sd->id }}">{{ $sd->name }}
                                                            </option>
                                                        @endforeach
                                                    </div>
                                                </select>
                                                @error('emp_position')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                            <!-- /.form-group -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Salary</label>
                                                <input type="text" class="form-control" name="emp_salary"
                                                    wire:model="emp_salary" id="exampleInputEmail1"
                                                    placeholder="Enter salary">
                                                @error('emp_salary')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!-- /.form-group -->
                                        </div>
                                        <!-- /.row -->
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Regiter</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
