<x-app-layout>
    <h1>Ini halaman NIB</h1>
    <a href="{{route('nib.create')}}" class="btn btn-primary">Buat NIB</a>
    <div class="overflow-x-auto">
        <table class="table m-auto text-center">
          <thead>
            <tr>
              <th>No</th>
              <th>Email</th>
              <th>HP</th>
              <th>Deskripsi</th>
              <th>KTP</th>
              <th>NPWP</th>
              <th>Akte Perusahaan</th>
              <th>Sketsa Lokasi</th>
              <th>Status</th>
              <th>Aksi</th>
              <th>NIB</th>
            </tr>
          </thead>
          <tbody>
            @if ($nib->count())
                @foreach ($nib as $NIB)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$NIB->email}}</td>
                    <td>{{$NIB->no_hp}}</td>
                    <td>{{$NIB->deskripsi}}</td>
                    <td>
                        <figure>
                            <img src="/storage/{{$NIB->ktp}}" alt="{{$NIB->ktp}}">
                        </figure>
                    </td>
                    <td>
                        <figure>
                            <img src="/storage/{{$NIB->npwp}}" alt="{{$NIB->npwp}}">
                        </figure>
                    </td>
                    <td>
                        @if ($NIB->akte_perusahaan)
                            <figure>
                                <img src="/storage/{{$NIB->akte_perusahaan}}" alt="{{$NIB->akte_perusahaan}}">
                            </figure>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if ($NIB->sketsa_lokasi)
                            <figure>
                                <img src="/storage/{{$NIB->sketsa_lokasi}}" alt="{{$NIB->sketsa_lokasi}}">
                            </figure>
                        @else
                            -
                        @endif
                    </td>
                    <td>{{$NIB->status}}</td>
                    <td>
                        <a href="">Edit</a>
                        <a href="">Hapus</a>
                    </td>
                    <td>
                        @if ($NIB->nib)
                            <a href="">Download</a>
                        @else
                            -
                        @endif
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="11">Data Kosong</th>
                </tr>
            @endif
          </tbody>
        </table>
      </div>
</x-app-layout>
