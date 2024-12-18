{{-- Modal --}}
<div class="modal fade" id="hapus{{ $row->id }}" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Hapus data merk produk</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('delete.produk') }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="mb-3">
                        <P class="text-center">Hapus produk <strong style="color: red">{{ $row->nama_produk }}</strong>?</P>
                        <input type="hidden" name="id" value="{{ $row->id }}" class="form-control">
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>