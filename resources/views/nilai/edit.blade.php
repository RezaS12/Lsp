@extends('main.layout')
@section('content')
    <center>
        <br>
            <h2>Ubah Data Nilai</h2>
            <form method="POST" action="/nilai/update/{{ $nilai->id }}">
            @csrf
                <table width="50%">
                    <tr>
                        <td width="25%">Guru Mapel</td>
                        <td width="25%">
                            <select name="mengajar_id">
                                <option></option>
                                @foreach ($mengajar as $r)
                                    <option value="{{ $r->id }}"
                                    @if ($r->id == $nilai->mengajar_id) selected 
                                    @endif>
                                    {{ $r->guru->nama_guru }} {{ $r->mapel->nama_mapel }} {{ $r->kelas->nama_kelas }}
                                    </option>
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
                                    <option value="{{ $s->id }}" @if ($s->id == $nilai->siswa_id) @endif selected > {{ $s->nama_siswa }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">UH</td>
                        <td width="25%"><input type="number" name="uh" value="{{ $nilai->uh }}">
                    </tr>
                    <tr>
                        <td width="25%">UTS</td>
                        <td width="25%"><input type="number" name="uts" value="{{ $nilai->uts }}">
                    </tr>
                    <tr>
                        <td width="25%">UAS</td>
                        <td width="25%"><input type="number" name="uas" value="{{ $nilai->uas }}">
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