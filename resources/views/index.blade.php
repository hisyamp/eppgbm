<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Baffle JS Text Reveal</title>
      <link rel="stylesheet" href="style.css">
      <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

      <!-- use cdn for the library / link the library file -->
      <script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<body>
      <div class="container">
            <div class="data">eppbgm nya masih banyakkk</div>
            <div>
                  <form method="post" action="import_identitas" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <label for="file1">Data Identitas</label>
                              <br>
                              <input type="file" name="file1" id="file1">
                              <button type="submit" class="button">Upload</button>
                              <button class="button" style="background-color: blue" id="clear1" onclick="reqClear(1)">Clear</button>
                  </form>
                  
            </div>
            <br>
            <div>
                  <label for="file2">Data Pengukuran</label>
                  <br>
                  <input type="file" name="file2" id="file2">
                  <a href="{{url('import_pengukuran')}}" class="button" id="upload2">Upload</a>
                  <button class="button" style="background-color: blue" id="clear2" onclick="reqClear(2)">Clear</button>
            </div>
            <!-- <button class="button">Upload</button> -->
      </div>
      @if (session('alert'))
            Swal.fire(
                'Sukses!',
                'Data Berhasil Ditambahkan!.',
                'success'
            )
      @endif
      
      <script type="text/javascript">

            const text = baffle(".data");
            text.set({
                  characters: '█▓█ ▒░/▒░ █░▒▓/ █▒▒ ▓▒▓/█ ░█▒/ ▒▓░ █<░▒ ▓/░>',
                  speed: 120
            });
            text.start();
            text.reveal(4000);

      </script>
      <script>
            function reqClear(a){
                  console.log("clear");
                  var url;
                  a == 1 ? url = "{{url('/reqtarget')}}" : url = "{{url('/reqtarget')}}";
                  $.ajax({
                        url: url,
                        type: "get",
                        success: function(data) {
                              // console.log(data)
                        },
                        error: function(data) { 
                              // console.log(data)
                        }
                  });
            }
      </script>
</body>

</html>