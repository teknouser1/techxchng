@extends('common_template')

@section('content')

<section class="site-section first_section" id="team-section">
	<div class="container">
		<div class="row mb-5">
            <div class="col-12 text-center">
                <h3 class="mb-3">Contacted Sellers (40) </h3>
            </div>
        </div>
			<table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">FullName</th>
			      <th scope="col">Email</th>
			      <th scope="col">Seller Type</th>
			      <th scope="col">View Profile</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>Test Patel</td>
			      <td>test@test.com</td>
			      <td>Corporate Seller</td>
			      <td><a href="{{ route('view-seller') }}">View Seller</a></td>
			    </tr>
			    <tr>
			      <th scope="row">2</th>
			      <td>Test1 Patel</td>
			      <td>test1@test.com</td>
			      <td>LinkedIn Seller</td>
			      <td><a href="{{ route('view-seller') }}">View Seller</a></td>
			    </tr>
			    <tr>
			      <th scope="row">3</th>
			      <td>Test2 Patel</td>
			      <td>test2@test.com</td>
			      <td>Corporate Seller</td>
			      <td><a href="{{ route('view-seller') }}">View Seller</a></td>
			    </tr>
			  </tbody>
			</table>

			 
			

			 	 <div class="row mb-5">
                	<div class="col-12 text-center">
                        <h3 class="mb-3">Technology Reported (40) </h3>
                    </div>
                </div>
                <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Image</th>
			      <th scope="col">Technology Title</th>
			      <th scope="col">summery</th>
			      <th scope="col">Technology Readiness</th>
			    </tr>
			  </thead>
			  <tbody>
			   <tr>
			      <td><div class="row tech-div">
                           <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Early in Market</td>
			    </tr>
			    <tr>
			        <td><div class="row tech-div">
                            <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Idea</td>
			    </tr>
			    <tr>
			        <td><div class="row tech-div">
                            <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Prototype</td>
			    </tr>
			  </tbody>
			</table>


			<div class="row mb-5">
                	<div class="col-12 text-center">
                        <h3 class="mb-3">Technology Buy (4) </h3>
                    </div>
                </div>
                <table class="table table-bordered">
			  <thead>
			    <tr>
			      <th scope="col">Image</th>
			      <th scope="col">Technology Title</th>
			      <th scope="col">summery</th>
			      <th scope="col">Technology Readiness</th>
			    </tr>
			  </thead>
			  <tbody>
			   <tr>
			      <td><div class="row tech-div">
                           <a href="{{ route('category-details') }}"> <img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Early in Market</td>
			    </tr>
			    <tr>
			        <td><div class="row tech-div">
                            <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Idea</td>
			    </tr>
			    <tr>
			        <td><div class="row tech-div">
                            <a href="{{ route('category-details') }}"><img src="{{ URL::asset('/frontend/images/img_1.jpg') }}" alt="Image" class="image-tech" width="50" style="height: 50px;"></a>
                    	</div>
                </td>
			      <td>Technology1</td>
			      <td>rem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more rece</td>
			      <td>Prototype</td>
			    </tr>
			  </tbody>
			</table>
</div>
</section>

@endsection