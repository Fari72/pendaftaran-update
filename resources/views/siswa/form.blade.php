<div class="modal fade" id="modalForm" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">

                        {{-- Add Nama --}}
                        <label class="" for="nama">Nama Siswa</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama')}}" class="form-control @error('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        {{-- Add Jurusan --}}
                        <label class="mt-2" for="jurusan_id">Jurusan</label>
                        <select type="text" name="jurusan_id" id="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
                            <option selected>Pilih...</option>
                            @foreach($jurusan as $jurusan)
                                <option value="{{$jurusan->id}}">{{$jurusan->nama}}</option>
                            @endforeach
                        @error('jurusan_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        </select>

                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>