@extends('main.layout')
@section('content')
<center>
    <br>
    <h2>Ubah Data Mengajar</h2>
    @if (session('success'))
    <p class="text-success">{{ session('success') }}</p>    
    @endif

    @if (session('error'))
    <p class="text-danger">{{ session('error') }}</p>
    @endif

    <form method="post" action="/mengajar/update/{{ $mengajar->id }}">
    @csrf
    <table width="50%">
        <tr>
            <td width="25%">Nama Guru</td>
            <td width="25%">
                <select name="guru_id">
                    <option></option>
                    @foreach ($guru as $g)
                        @if ($mengajar->guru_id == $g->id)
                            <option value="{{ $g->id }}" selected>{{ $g->nama_guru }}</option>
                        @else
                            <option value="{{ $g->id }}">{{ $g->nama_guru }}</option>
                        @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%">Mata Pelajaran</td>
            <td width="25%">
                <select name="mapel_id">
                    <option></option>
                    @foreach ($mapel as $m)
                        @if ($mengajar->mapel_id == $m->id)
                            <option value="{{ $m->id }}" selected>{{ $m->nama_mapel }}</option>
                        @else
                            <option value="{{ $m->id }}">{{ $m->nama_mapel }}</option>
                        @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td width="25%">Kelas</td>
            <td width="25%">
                <select name="kelas_id">
                    <option></option>
                    @foreach ($kelas as $k)
                        @if ($mengajar->kelas_id == $k->id)
                            <option value="{{ $k->id }}" selected>{{ $k->nama_kelas }}</option>
                        @else
                            <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                        @endif
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <center><button class="button-primary" type="submit">Ubah</button></center>
            </td>
        </tr>
    </table>
    </form>
</center>

@endsection