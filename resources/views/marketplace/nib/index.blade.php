<x-app-layout>
    @if (session()->has('success'))
        <div class="alert alert-success my-4">
            {{ session()->get('success') }}
        </div>
    @endif
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
                        @if (!empty($NIB->akte_perusahaan))
                            <figure>
                                <img src="/storage/{{$NIB->akte_perusahaan}}" alt="{{$NIB->akte_perusahaan}}">
                            </figure>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if (!empty($NIB->sketsa_lokasi))
                            <figure>
                                <img src="/storage/{{$NIB->sketsa_lokasi}}" alt="{{$NIB->sketsa_lokasi}}">
                            </figure>
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        @if ($NIB->status == false)
                            Diproses
                        @else
                            Selesai
                        @endif
                    </td>
                    <td>
                        <a href="{{route('nib.edit', $NIB->id)}}" class="btn btn-warning">Edit</a>
                        <form action="{{route('nib.destroy', $NIB->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn border-none hover:bg-red-600 bg-red-600 p-4 text-white text-bold rounded-md font-bold cursor-pointer">
                        </form>
                        <a href="" class="btn bg-gray">Detail</a>
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
