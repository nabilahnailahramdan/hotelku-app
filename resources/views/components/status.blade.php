@if ( session('status')=='store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil Simpan!</strong> Data telah berhasil di simpan.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ( session('status')=='update')
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil Update!</strong> Data telah berhasil di ubah.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

@if ( session('status')=='destroy')
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Berhasil Hapus!</strong> Data telah berhasil di hapus.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif