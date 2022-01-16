@extends('client.section.base')

@section('content_front')

<!--coursel-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" style="height:500px;">
                            <div class="carousel-item active">
                                <img src="{{url('public')}}/images/sale.png" height="300px" class="d-block w-100" alt="..."> </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale5.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{url('public')}}/images/sale3.png" height="300px" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
 <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card" style="margin-bottom: 100px">
                    <div class="card-header">
                        Alamat
                    </div>
                    <div class="card-body">
                        <div class="row">
                          <div class="col-md-3">
                            <label for="" class="control-label">Provinsi</label>
                            <select name="" id="" class="form-control" onchange="gantiProvinsi(this.value)">
                              <option value="">Pilih Provinsi</option>
                              @foreach ($list_provinsi as $provinsi)
                                  <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kabupaten</label>
                            <select name="" id="kabupaten" class="form-control" onchange="gantiKabupaten(this.value)">
                              <option value="">Pilih Provinsi terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Kecamatan</label>
                            <select name="" id="kecamatan" class="form-control" onchange="gantiKecamatan(this.value)">
                              <option value="">Pilih Kabupaten terlebih dahulu</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label for="" class="control-label">Desa</label>
                            <select name="" id="desa" class="form-control">
                              <option value="">Pilih Kecamatan terlebih dahulu</option>
                            </select>
                          </div>                
                        </div>
                        <button class="btn btn-primary float-right " style="margin-top: 20px" ><i class="fa fa-save"></i> Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
      function gantiProvinsi(id) {
        $.get("api/provinsi/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kabupaten").html(option)
        });
      }
      function gantiKabupaten(id) {
        $.get("api/kabupaten/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option +=`<option value="${item.id}">${item.name}<option/> `;
          }
          $("#kecamatan").html(option)
        });
      }
      function gantiKecamatan(id) {
        $.get("api/kecamatan/"+id, function (result) {
          result = JSON.parse(result)
          option = ""
          for(item of result){
            option += `<option value="${item.id}">${item.name}<option/>`;
          }
          $("#desa").html(option)
        });
      }
    </script>
@endpush