




@if( isset($notFound))
<div class="bg-danger"> Your url not found  </div>

@endif

<form method="post" action="{{route('urlstore')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Enter your URL</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="Enter url">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Shorten Url</label>
    <input type="text" class="form-control" name="shorten" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>