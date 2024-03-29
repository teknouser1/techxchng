@extends('admin.layouts.app')

@section('content')
<!-- Basic datatable -->
		<div class="card">
			<div class="card-header header-elements-inline">
				<h5 class="card-title">{{ __('Categories') }}</h5>
				 <div class="btn-group pull-right" style="margin-right: 10px">
                            <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-success">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;New Category
                            </a>
                        </div>
			</div>

			<table class="table datatable-dom-position">
				<thead>
					<tr>
						<th>{{ __('Image') }}</th>
						<th>{{ __('Name') }}</th>
						<th>{{ __('Description') }}</th>
						{{--<th>{{ __('Keywords') }}</th>--}}
						<th class="text-center">{{ __('Action') }}</th>
					</tr>
				</thead>
				<tbody>
			    @if(!empty($categories) && count($categories->toArray())>0)
			      @foreach($categories as $category)
			        <tr>
						<td>
							@if(!empty($category->getImgUrl()))
							<img src="{{$category->getImgUrl()}}" alt="{{$category->name}}" class="img-preview rounded" style="max-height: 3rem;">
							@endif
						</td>
						<td>{{$category->name}}</td>
						<td>{{$category->description}}</td>
						{{--<td><span class="badge badge-primary">{!! $category->keywords->pluck('keyword')->implode('</span> <span class="badge badge-primary">') !!}</span></td>--}}
						<td class="text-center">
							<div class="list-icons">
								<div class="dropdown">
									<a href="#" class="list-icons-item" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a href="{{ route('admin.category.edit',$category->id) }}" class="dropdown-item" title="{{ __('Edit') }}"><i class="icon-pencil7"></i> {{ __('Edit') }}</a>
										<a href="javascript:void(0);" class="dropdown-item delete-record" title="{{ __('Delete') }}"><i class="icon-trash"></i> {{ __('Delete') }}</a>
										<form method="post" action="{{route('admin.category.destroy',$category->id)}}" class="delete-form" onsubmit="return confirm('Are you sure delete this category with his data?');">
		            						<input type="hidden" name="_method" value="delete" />
											@csrf
		            					</form>
									</div>
								</div>
							</div>
						</td>
			        </tr>
			      @endforeach
			    @endif
				</tbody>
			</table>
		</div>
		<!-- /basic datatable -->
@endsection
@section('js')
<script>
jQuery(document).ready(function($){

	// DOM positioning

	$(document).on("click",".delete-record",function(){
		$(this).next(".delete-form").submit();
	});

});
</script>
@endsection