<form method="POST" action="{{route('delete_categorry',$categorry->id)}}">
    @csrf
    @method('DELETE')
  <!-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Categorry name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="categorries_name"
    value="{{$categorry->categorries_name}}"/> 
  </div> -->
  
  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
