@extends('admin.layouts.app')

@section('content')
<!-- Basic datatable -->
		<div class="card">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">{{ __('Corporate buyers') }}</h5>
				<div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="{{ route('admin.corporate-buyers.create') }}" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;New Buyer
                            </a>
                        </div>
			</div>

			<table class="table datatable-user">
				<thead>
					<tr>
						<th>{{ __('Name') }}</th>
						<th>{{ __('Email') }}</th>
						<th>{{ __('Designation') }}</th>
						<th>{{ __('Company Name') }}</th>
						<th>{{ __('Contact No') }}</th>
						<th class="text-center">{{ __('Action') }}</th>
					</tr>
				</thead>
				<tbody>
			    
				</tbody>
			</table>
		</div>
		<!-- /basic datatable -->
@endsection
@section('js')
<script>
var userTable;
jQuery(document).ready(function($){
	userTable= $('.datatable-user').DataTable( {
      //pageLength:2,
      //"searching": false,
      "processing": true,
      "serverSide": true,
      "ajax": "{{route('admin.corporate-buyers.index')}}",
          "columns": [
            { data: "name"},
            { data: "email"},
            { data: "designation"},
            { data: "company_name"},
            { data: "contact_number"},
            { data: "action","orderable":false,"searchable": false}
        ],

      });
	// DOM positioning
	$(document).on("click",".delete-record",function(){
		$(this).next(".delete-form").submit();
	});

});
</script>
@endsection