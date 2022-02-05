<div class="col-xs-12  col-md-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 7)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>Salsa/Prom</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Roses are red, violets are </h2><br> 
      <h2>blue..prom date me</h2><br> 
      <h2>and you?</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/7')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>Salsa/Prom</h1>
      <h2>Roses are red, violets are </h2><br> 
      <h2>blue..prom date me</h2><br> 
      <h2>and you?</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/7')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-xs-12  col-md-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 8)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>Beach Party</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Glide on Wind,</h2><br><h2> Flow with Tides.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/8')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>Beach Party</h1>
      <h2>Glide on Wind,</h2><br><h2> Flow with Tides.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/8')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div>

<div class="col-xs-12  col-md-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 9)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>NSS Camps</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Which started with a </h2><br><h2>compulsion but ended up</h2><br><h2>multilying our friends.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/15')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>NSS Camps</h1>
      <h2>Which started with a </h2><br><h2>compulsion but ended up</h2><br><h2>multilying our friends.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/9')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div> 

<!-- <div class="col-sm-4">
  @php
  $myview = App\Bucket::where('roll', Auth::user()->rollno)->where('list', 9)->get()->toArray();
  @endphp
  @if(!empty($myview))
  <aside class="profile-card" style="background: url({{$myview[0]['pic']}}); background-size: 100% 100%; background-repeat: no-repeat;">
    <header>
      <h1>BIRTHDAY</h1><i class="fa fa-check-circle" style="color: #5cb85c; font-size: 30px;" title="Task Completed!"></i>
      <h2>Tick tock Its 12.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/9')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Change" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @else
  <aside class="profile-card" style="background: url(https://s-media-cache-ak0.pinimg.com/736x/3a/1f/02/3a1f02c10700daa80655a302c5a27acf.jpg);">
    <header>
      <h1>BIRTHDAY</h1>
      <h2>Tick tock Its 12.</h2>
    </header>
    <div class="profile-bio" style="text-align: center;">
      <form action="{{ url('/bucketpost/9')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="file" required="required" name="fileToUpload" >
        <br><br>
        <input type="submit" value="Upload Image" name="submit" class="btn btn-success" align="right">
      </form>
    </div>
  </aside><br>
  @endif
</div> -->