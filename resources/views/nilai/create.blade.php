@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Tambah Data Nilai</h2>
            <form method="POST" action="/nilai/store">
            @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">Guru Mapel</td>
                        <td width="25%">
                            <select name="mengajar_id">
                                <option></option>
                                @foreach ($mengajar as $r)
                                    <option value="{{ $r->id }}">{{ $r->guru->nama_guru }} {{ $r->mapel->nama_mapel }} {{ $r->kelas->nama_kelas }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">Siswa</td>
                        <td width="25%">
                            <select name="siswa_id">
                                <option></option>
                                @foreach ($siswa as $s)
                                    <option value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UH</td>
                        <td width="25%"><input type="number" name="uh">
                    </tr>
                    <tr>
                        <td width="25%">UTS</td>
                        <td width="25%"><input type="number" name="uts">
                    </tr>
                    <tr>
                        <td width="25%">UAS</td>
                        <td width="25%"><input type="number" name="uas">
                    </tr>
                    <tr>
                        <td colspan="2">
                            <center><button class="button-primary" type="submit">Simpan</button></center>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
@endsection