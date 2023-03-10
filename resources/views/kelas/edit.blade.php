@extends('main.layout')
@section('content')
    <center>
        <br>
        <h2>Edit Data Kelas</h2>
        <form method="POST" action="/kelas/update/{{ $kelas->id }}" >
        @csrf
        <table width="50%">
            <tr>
                <td width="25%">Kelas</td>
                <td width="25%"><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
            </tr>

            <tr>
                <td class="25%">Jurusan</td>
                <td width="25%">
                    <select name="jurusan_id">
                        @foreach ($jurusan as $j)
                            @if ($kelas->jurusan_id == $j->id)
                                <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option>
                            @else
                                <option value="{{ $j->id }}">{{ $j->nama_jurusan }}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <center><button class="button-primary" type="submit">UBAH</button></center>
                </td>
            </tr>
        </table>
        </form>
    </center>
@endsection