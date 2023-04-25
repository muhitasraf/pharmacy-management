@extends('dashboard.index')
    @section('content')
    <div class="row">
        <div class="col col-md-12 table-responsive">
            <div class="table-responsive">
            	<table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th style="width: 5%;">SL.</th>
                            <th style="width: 15%;">Generic Name</th>
                            <th style="width: 20%;">Status</th>
                            <th style="width: 15%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($generic_name as $key=>$generic){ ?>
                        <tr>
                            <td><?php echo ++$key;?></td>
                            <td><?php echo $generic->generic_name;?></td>
                            <td><?php echo $generic->status==1 ? 'Active': 'InActive';?></td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{ URL::to('generic/'.$generic->id.'/edit') }}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a class="btn btn-success btn-sm" href="{{ URL::to('generic/'.$generic->id ) }}">
                                    <i class="fa fa-eye"></i>
                                </a>
                                <form action="{{ route('generic.destroy', $generic->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" style="display: inline-block;" onclick="return confirm('Are you sure to delete?')">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
