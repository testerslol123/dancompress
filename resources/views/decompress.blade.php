@extends('layouts.app')

@section('content')
<h2 class="text-center">Halaman Dekompresi</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sit amet bibendum nulla. Integer porta ornare lacus, at molestie lacus ornare non. Praesent at erat et lorem suscipit aliquam ac sit amet nunc. Nullam felis ligula, dignissim interdum velit non, consequat aliquet nulla. Aenean mollis augue at elit aliquet congue. In rhoncus mi quis lacus maximus commodo quis id enim. Praesent aliquam ligula non enim efficitur cursus. In id semper ex. Donec pharetra auctor nulla. Mauris nec vestibulum mauris. Vivamus sollicitudin ornare sollicitudin. Sed mollis mauris quis leo iaculis gravida. Ut vehicula ligula id commodo ultricies. Curabitur felis augue, placerat id ornare in, mollis nec eros. Quisque finibus porttitor hendrerit. Fusce ultrices porta erat id ultrices.

Sed iaculis, erat et volutpat egestas, justo dolor molestie dui, vitae posuere risus est non purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque vitae purus id velit auctor lacinia. Proin gravida vitae metus vel mollis. Cras massa leo, lobortis in sodales et, tristique nec libero. Phasellus fermentum justo non pretium dictum. Pellentesque non sapien at mi efficitur euismod. Sed sagittis eros orci, eget aliquam felis bibendum vel. Vivamus nec dictum elit. Morbi sed bibendum lorem. Aenean ac mollis dolor, dignissim semper ex. Integer bibendum blandit elit, sed efficitur tellus elementum pharetra. Etiam a fermentum neque. Ut facilisis lorem felis, vitae mattis mi feugiat blandit.</p>

	<form enctype="multipart/form-data" method="POST">
		<div class="form-group">
  		<label for="exampleFormControlInput1">Input File: </label>
  		<input type="file" class="form-control-file" name="file[]"/>
      <div id="clone"></div>
		</div>
	</form>
  <hr>
  <div class="text-center">
    <a href="#" class="btn btn-info" id="decompress">DECOMPRESS</a>
  </div>
  <div class="text-center" id="result_compress">
  </div>
@endsection

@section('scripts')
<script type="text/javascript">
  $('#decompress').on('click', function(e) {
    var content = $('<p>Elapsed Time: 5 seconds</p>')
    $('#result_compress').append(content)
  })
</script>
  
@endsection