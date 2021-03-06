@include('admin.includes.header')
   <div class="right_col" role="main">
          <!-- top tiles -->
          
         

          <div class="row">


            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel tile">
                <div class="x_title">
                  <h2>Offer List</h2>
                 
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                 <table width="100%" class="table table-bordered table-striped">
                 	 <thead>
                        <tr>
                            <th>SI</th>
                            <th>Title</th>
                            <th>URL</th>
                            <th>Points</th>
                            <th>Photo</th>
                            <th>Created</th>
                            <th>Updated</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $i=1; ?>
                    @foreach($offers as $menu)
                    <tr>
                    	<td>{{ $i++ }}</td>
                    	<td>{{ $menu->title}}</td>
                        <td>{{ $menu->url }}</td>
                        <td>{{ $menu->points }}</td>
                        <td><img src="{{ URL::asset('admin/uploads/offer/'.$menu->image)}}" style="width:100px; height:auto" /></td>
                        <td>{{ $menu->created_at }}</td>
                        <td>{{ $menu->updated_at }}</td>
                        <td  align="center">
                        
                        {!! Form::open(['method'=>'delete', 'route'=>['offer.destroy', $menu->id]]) !!}                        
                        <a href="{{ route('offer.edit', $menu->id) }}" class="btn btn-warning btn-xs" style="font-size: 12px;">Edit</a>
						{!! Form::submit('Delete', ['class'=>'btn btn-danger btn-xs', 'onclick'=>'return confirm("Are you sure you want to delete this record?")']) !!}
						{!! Form::close() !!}						
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
 @include('admin.includes.footer')