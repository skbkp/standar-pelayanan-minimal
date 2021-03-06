@extends('_layouts.default')

@section('konten')
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>Kunci</h1>
      </div>
      <div class="col-md-6 text-right">
        {{-- <a href="{{route('kunci.create')}}" class="btn btn-success btn-md tombol-atas">Tambah</a> --}}
      </div>
    </div>
    <hr class="dashed mt20 mb20">
    <div class="row">
      <form action="{{route('kunci.index')}}" method="get">
        <div class="col-md-3 col-md-offset-8">
          <div class="form-group">
            <label for="kecamatan" class="control-label">Kecamatan</label>
            <select name="kecamatan" id="kecamatan" class="form-control">
              <option value="">Semua Kecamatan</option>
              @foreach ($d_kecamatan as $index => $item)
                <option value="{{$item->id}}" {{request('kecamatan') == $item->id?'selected':''}}>{{$item->nama}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-1 text-right oke">
          <button type="submit" class="btn btn-md btn-success">Oke</button>
        </div>
      </form>
    </div>
    <div class="row">
      <div class="col-md-12">
        <table class="table table-bordered table-custom">
          <thead>
            <tr>
              <th class="no">No</th>
              <th>Nama Kecamatan</th>
              <th width="200px">Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($t_kecamatan as $index => $item)
              <tr>
                <td>{{$index + 1}}</td>
                <td>{{$item->nama}}</td>
                <td>
                  <table width="100%">
                    <tr>
                      <td>
                        <a href="{{route('kunci.detail',['kecamatan' => $item->id])}}" class="btn btn-sm btn-warning">Detail</a>
                      </td>
                      <td>
                        <onoff style="margin-left: 7px;" nomor="false"></onoff>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            @empty
              <tr>
                <td align="center" colspan="3">Data Tidak Ada</td>
              </tr>
            @endforelse
            {{-- <onoff style="margin-left: 7px;" nomor="false"></onoff> --}}
          </tbody>
        </table>
        {!! $t_kecamatan->appends(Request::input()) !!}
      </div>
    </div>
  </div>
@endsection
