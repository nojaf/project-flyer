@inject('countries', 'App\Http\Utilities\Country')
<div class="form-group">
		<label for="street">Street:</label>
		<input type="text" name="street" class="form-control" value="{{ old('street') }}" required="required" pattern="" title="">
	</div>
	<div class="form-group">
		<label for="city">City:</label>
		<input type="text" name="city" class="form-control" value="{{ old('city') }}" required="required" pattern="" title="">
	</div>	
	<div class="form-group">
		<label for="zip">Zip/Postal Code:</label>
		<input type="text" name="zip" class="form-control" value="{{ old('zip') }}" required="required" pattern="" title="">
	</div>	
 	<div class="form-group">
		<label for="country">Country:</label>
		<select id="country" name="country" class="form-control">
			@foreach($countries::all() as $name => $code)
				<option value="{{ $code}}">{{ $name}}</option>
			@endforeach
		</select>
	</div>	   	
	<div class="form-group">
		<label for="state">Zip/Postal Code:</label>
		<input type="text" name="state" class="form-control" value="{{ old('state') }}" required="required" pattern="" title="">
	</div>	
	<hr>
	<div class="form-group">
		<label for="price">Sale Price:</label>
		<input type="text" name="price" class="form-control" value="{{ old('zip') }}" required="required" pattern="" title="">
	</div>	
	<div class="form-group">
	<label for="description">Home Description:</label>
		<textarea name="description" rows="10"
			class="form-control" value="{{ old('description')}}"></textarea>
	</div>	
	<div class="form-group">
		<label for="photos">Photos:</label>
		<input type="file" name="photos" class="form-control" value="{{ old('photos') }}">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-default">Create Flyer</button>
	</div>